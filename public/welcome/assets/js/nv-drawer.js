/* =====================================================================
   Nuvesta – mobile drawer menu
   - slides in from the right ([data-nv-drawer-open] / close on backdrop, ✕, Esc)
   - submenus expand/collapse with a +/− toggle (any depth)
   - opening a submenu closes its open siblings (accordion)
   ===================================================================== */
(function () {
  'use strict';

  var drawer = document.getElementById('nvDrawer');
  if (!drawer) return;

  var panel = drawer.querySelector('.nv-drawer-panel');
  var openers = document.querySelectorAll('[data-nv-drawer-open]');
  var lastFocus = null;

  function isOpen() { return drawer.classList.contains('is-open'); }

  function open() {
    if (isOpen()) return;
    lastFocus = document.activeElement;
    drawer.hidden = false;
    document.documentElement.classList.add('nv-drawer-lock');
    requestAnimationFrame(function () {
      requestAnimationFrame(function () { drawer.classList.add('is-open'); });
    });
    openers.forEach(function (b) { b.setAttribute('aria-expanded', 'true'); });
    setTimeout(function () {
      var first = panel.querySelector('.nv-drawer-x');
      if (first) first.focus();
    }, 320);
  }

  function close(restoreFocus) {
    if (!isOpen()) return;
    drawer.classList.remove('is-open');
    openers.forEach(function (b) { b.setAttribute('aria-expanded', 'false'); });
    setTimeout(function () {
      drawer.hidden = true;
      document.documentElement.classList.remove('nv-drawer-lock');
    }, 350);
    if (restoreFocus !== false && lastFocus && lastFocus.focus) lastFocus.focus();
  }

  document.addEventListener('click', function (e) {
    if (e.target.closest('[data-nv-drawer-open]')) { e.preventDefault(); open(); return; }
    var closer = e.target.closest('[data-nv-drawer-close]');
    if (closer && isOpen()) {
      // the search shortcut inside the drawer opens the search popup – don't steal its focus
      close(!closer.hasAttribute('data-nv-search-open'));
    }
  });

  document.addEventListener('keydown', function (e) {
    if (!isOpen()) return;
    if (e.key === 'Escape') { e.preventDefault(); close(); return; }

    // keep keyboard focus inside the drawer
    if (e.key === 'Tab') {
      var f = panel.querySelectorAll('a[href], button:not([disabled])');
      var visible = Array.prototype.filter.call(f, function (n) { return n.offsetParent !== null; });
      if (!visible.length) return;
      var first = visible[0], last = visible[visible.length - 1];
      if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    }
  });

  // close automatically when resizing up to the desktop menu
  var mq = window.matchMedia('(min-width: 1200px)');
  (mq.addEventListener ? mq.addEventListener.bind(mq, 'change') : mq.addListener.bind(mq))(function (ev) {
    if (ev.matches) close(false);
  });

  /* ---------- submenu toggles ---------- */
  function setItem(li, openIt) {
    li.classList.toggle('is-open', openIt);
    li.querySelectorAll(':scope > .nv-dm-row [data-nv-dm-toggle]').forEach(function (b) {
      b.setAttribute('aria-expanded', openIt ? 'true' : 'false');
    });
    if (!openIt) {
      // collapse nested open children too
      li.querySelectorAll('.nv-dm-item.is-open').forEach(function (child) { setItem(child, false); });
    }
  }

  drawer.addEventListener('click', function (e) {
    var btn = e.target.closest('[data-nv-dm-toggle]');
    if (!btn) return;
    e.preventDefault();
    var li = btn.closest('.nv-dm-item');
    var willOpen = !li.classList.contains('is-open');

    if (willOpen) {
      Array.prototype.forEach.call(li.parentElement.children, function (sib) {
        if (sib !== li && sib.classList.contains('is-open')) setItem(sib, false);
      });
    }
    setItem(li, willOpen);
  });
})();
