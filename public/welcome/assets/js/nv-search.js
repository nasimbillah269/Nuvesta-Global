/* =====================================================================
   Nuvesta – header search popup with live (ajax) results
   - opens from any [data-nv-search-open] element, or Ctrl/⌘+K, or "/"
   - live results from #nvSearch[data-endpoint] (debounced, cancellable)
   - ↑/↓ to move, Enter opens the highlighted result,
     otherwise Enter submits the form → full search page
   ===================================================================== */
(function () {
  'use strict';

  var root = document.getElementById('nvSearch');
  if (!root) return;

  var endpoint = root.getAttribute('data-endpoint');
  var form     = root.querySelector('.nv-search-form');
  var input    = root.querySelector('.nv-search-input');
  var clearBtn = root.querySelector('.nv-search-clear');
  var results  = root.querySelector('.nv-search-results');
  var MIN_CHARS = 2;
  var DEBOUNCE  = 250;

  var timer = null, controller = null, lastTerm = null, activeIndex = -1, opener = null;
  var cache = {};

  /* ---------- open / close ---------- */
  function open(trigger) {
    if (root.classList.contains('is-open')) return;
    opener = trigger || document.activeElement;
    root.hidden = false;
    document.documentElement.classList.add('nv-search-lock');
    // next frame so the CSS transition runs
    requestAnimationFrame(function () { root.classList.add('is-open'); });
    setTimeout(function () { input.focus(); input.select(); }, 60);
    syncState();
  }

  function close() {
    if (!root.classList.contains('is-open')) return;
    root.classList.remove('is-open');
    document.documentElement.classList.remove('nv-search-lock');
    setTimeout(function () { root.hidden = true; }, 220);
    if (opener && opener.focus) opener.focus();
  }

  document.addEventListener('click', function (e) {
    var t = e.target.closest('[data-nv-search-open]');
    if (t) { e.preventDefault(); open(t); return; }
    if (e.target.closest('[data-nv-search-close]')) { e.preventDefault(); close(); }
  });

  document.addEventListener('keydown', function (e) {
    var typing = /^(INPUT|TEXTAREA|SELECT)$/.test((e.target.tagName || '')) || e.target.isContentEditable;
    if ((e.key === 'k' || e.key === 'K') && (e.ctrlKey || e.metaKey)) { e.preventDefault(); open(); return; }
    if (e.key === '/' && !typing && !root.classList.contains('is-open')) { e.preventDefault(); open(); return; }
    if (e.key === 'Escape' && root.classList.contains('is-open')) { e.preventDefault(); close(); }
  });

  /* ---------- typing ---------- */
  input.addEventListener('input', function () {
    syncState();
    clearTimeout(timer);
    timer = setTimeout(search, DEBOUNCE);
  });

  clearBtn.addEventListener('click', function () {
    input.value = '';
    syncState();
    input.focus();
  });

  function syncState() {
    var term = input.value.trim();
    root.classList.toggle('has-value', input.value.length > 0);
    root.classList.toggle('has-query', term.length >= MIN_CHARS);
    if (term.length < MIN_CHARS) {
      if (controller) controller.abort();
      root.classList.remove('is-loading');
      results.innerHTML = '';
      lastTerm = null;
      activeIndex = -1;
    }
  }

  /* ---------- ajax ---------- */
  function search() {
    var term = input.value.trim();
    if (term.length < MIN_CHARS || term === lastTerm) return;
    lastTerm = term;

    if (cache[term]) { render(cache[term]); return; }

    if (controller) controller.abort();
    controller = window.AbortController ? new AbortController() : null;
    root.classList.add('is-loading');

    fetch(endpoint + '?search=' + encodeURIComponent(term), {
      headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
      signal: controller ? controller.signal : undefined
    })
      .then(function (r) { if (!r.ok) throw new Error(r.status); return r.json(); })
      .then(function (data) {
        cache[term] = data;
        if (input.value.trim() === term) render(data);
      })
      .catch(function (err) {
        if (err.name === 'AbortError') return;
        renderMessage('bi-wifi-off', 'Something went wrong. Press Enter to search anyway.');
      })
      .finally(function () {
        if (input.value.trim() === term) root.classList.remove('is-loading');
      });
  }

  /* ---------- rendering (DOM API only – no HTML injection) ---------- */
  function el(tag, cls, text) {
    var n = document.createElement(tag);
    if (cls) n.className = cls;
    if (text != null) n.textContent = text;
    return n;
  }

  function highlight(text, term) {
    var frag = document.createDocumentFragment();
    var lower = text.toLowerCase(), t = term.toLowerCase(), i = 0, at;
    while (t && (at = lower.indexOf(t, i)) !== -1) {
      if (at > i) frag.appendChild(document.createTextNode(text.slice(i, at)));
      frag.appendChild(el('mark', null, text.slice(at, at + t.length)));
      i = at + t.length;
    }
    frag.appendChild(document.createTextNode(text.slice(i)));
    return frag;
  }

  function render(data) {
    results.innerHTML = '';
    activeIndex = -1;

    if (!data.total) {
      renderMessage('bi-search', 'No results for “' + data.term + '”', data.all);
      return;
    }

    data.groups.forEach(function (group) {
      var sec = el('div', 'nv-sr-group');
      sec.appendChild(el('p', 'nv-search-label', group.label));
      group.items.forEach(function (item) {
        var a = el('a', 'nv-sr-item');
        a.href = item.url;
        a.setAttribute('role', 'option');

        var thumb = el('span', 'nv-sr-thumb');
        if (item.image) {
          var img = el('img');
          img.src = item.image; img.alt = ''; img.loading = 'lazy';
          thumb.appendChild(img);
        } else {
          thumb.appendChild(el('i', 'bi ' + (item.icon || 'bi-link-45deg')));
        }

        var body = el('span', 'nv-sr-body');
        var title = el('span', 'nv-sr-title');
        title.appendChild(highlight(item.title || '', data.term));
        body.appendChild(title);
        if (item.meta) body.appendChild(el('span', 'nv-sr-meta', item.meta));

        a.appendChild(thumb);
        a.appendChild(body);
        a.appendChild(el('i', 'bi bi-arrow-right nv-sr-go'));
        sec.appendChild(a);
      });
      results.appendChild(sec);
    });

    var all = el('a', 'nv-sr-all');
    all.href = data.all;
    all.appendChild(document.createTextNode('See all results for “' + data.term + '”'));
    all.appendChild(el('i', 'bi bi-arrow-right'));
    results.appendChild(all);
  }

  function renderMessage(icon, text, allUrl) {
    results.innerHTML = '';
    var box = el('div', 'nv-sr-empty');
    box.appendChild(el('i', 'bi ' + icon));
    box.appendChild(el('p', null, text));
    if (allUrl) {
      var a = el('a', 'nv-btn nv-btn-outline', 'Search the full site');
      a.href = allUrl;
      box.appendChild(a);
    }
    results.appendChild(box);
  }

  /* ---------- keyboard navigation ---------- */
  function items() { return results.querySelectorAll('.nv-sr-item, .nv-sr-all'); }

  function setActive(i) {
    var list = items();
    if (!list.length) return;
    activeIndex = (i + list.length) % list.length;
    list.forEach(function (n, k) {
      var on = k === activeIndex;
      n.classList.toggle('is-active', on);
      n.setAttribute('aria-selected', on ? 'true' : 'false');
      if (on) n.scrollIntoView({ block: 'nearest' });
    });
  }

  input.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowDown') { e.preventDefault(); setActive(activeIndex + 1); }
    else if (e.key === 'ArrowUp') { e.preventDefault(); setActive(activeIndex - 1); }
  });

  // Enter: open highlighted result, otherwise go to the full search page
  form.addEventListener('submit', function (e) {
    var list = items();
    if (activeIndex > -1 && list[activeIndex]) {
      e.preventDefault();
      window.location.href = list[activeIndex].href;
      return;
    }
    if (!input.value.trim()) { e.preventDefault(); input.focus(); }
  });
})();
