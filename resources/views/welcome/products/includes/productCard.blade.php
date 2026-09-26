{{-- Product card (used on listing, category, related, wishlist… pages) --}}
@php
  $pcHasAlt = $product->bannerFile !== null;
  $pcIsNew  = $product->new_arrival || ($product->created_at && $product->created_at->gt(now()->subDays(60)));
  // square / landscape photos (e.g. catalogue shots with logo + spec text) are shown whole instead of cropped
  $pcImg    = $product->image();
  $pcSize   = is_file(public_path($pcImg)) ? @getimagesize(public_path($pcImg)) : false;
  $pcFit    = ($pcSize && $pcSize[1] > 0 && $pcSize[0] / $pcSize[1] >= 0.9) ? 'is-contain' : '';
@endphp
<a href="{{ route('productView',$product->slug?:Str::slug($product->name)) }}" class="nv-pcard {{ $pcHasAlt ? 'has-alt' : '' }} {{ $pcFit }}">
  <div class="nv-pcard-media">
    @if($pcIsNew)<span class="nv-pcard-badge">New</span>@endif
    <img src="{{ asset($pcImg) }}" alt="{{ $product->name }}" class="nv-pcard-img nv-pcard-img-main" loading="lazy">
    @if($pcHasAlt)
      <img src="{{ asset($product->banner()) }}" alt="" aria-hidden="true" class="nv-pcard-img nv-pcard-img-alt" loading="lazy">
    @endif
  </div>
  <div class="nv-pcard-body">
    <h3 class="nv-pcard-title">{{ $product->name }}</h3>
    @if($product->sku_code)<span class="nv-pcard-sku">{{ $product->sku_code }}</span>@endif
  </div>
</a>
