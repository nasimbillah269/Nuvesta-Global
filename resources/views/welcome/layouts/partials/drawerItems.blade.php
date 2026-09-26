{{-- Mobile drawer menu items (recursive). Expects: $items, $menuUrl, $isActive, $target, $level --}}
<ul class="nv-dm-list {{$level ? 'nv-dm-sub' : ''}}">
  @foreach($items as $item)
    @php
      $children = $item->subMenus;
      $active   = $isActive($item);
      $link     = $menuUrl($item);
      $subId    = 'nvDm'.$item->id;
    @endphp
    <li class="nv-dm-item {{$active ? 'is-active' : ''}} {{$children->count() ? 'has-children' : ''}} {{$children->count() && $active ? 'is-open' : ''}}">
      <div class="nv-dm-row">
        @if($children->count() && ($link === '#' || str_ends_with($link, '/#')))
          {{-- parent without its own page: the whole row toggles --}}
          <button type="button" class="nv-dm-link" data-nv-dm-toggle aria-expanded="{{$active ? 'true' : 'false'}}" aria-controls="{{$subId}}">{{$item->menuName()}}</button>
        @else
          <a class="nv-dm-link" href="{{$link}}" {!!$target($item)!!} @if($active) aria-current="page" @endif>{{$item->menuName()}}</a>
        @endif

        @if($children->count())
          <button type="button" class="nv-dm-toggle" data-nv-dm-toggle aria-expanded="{{$active ? 'true' : 'false'}}" aria-controls="{{$subId}}" aria-label="Toggle {{$item->menuName()}} submenu">
            <span class="nv-pm" aria-hidden="true"></span>
          </button>
        @endif
      </div>

      @if($children->count())
        <div class="nv-dm-collapse" id="{{$subId}}">
          <div class="nv-dm-collapse-inner">
            @include(general()->theme.'.layouts.partials.drawerItems', ['items' => $children, 'level' => $level + 1])
          </div>
        </div>
      @endif
    </li>
  @endforeach
</ul>
