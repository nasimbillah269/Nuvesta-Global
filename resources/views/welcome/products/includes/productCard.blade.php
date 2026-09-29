{{-- Product card (used on listing, category, related, wishlist… pages) --}}
@php
  $pcHasAlt = $product->bannerFile !== null;
  // square / landscape photos (e.g. catalogue shots with logo + spec text) are shown whole instead of cropped
  $pcImg    = $product->image();
  $pcSize   = is_file(public_path($pcImg)) ? @getimagesize(public_path($pcImg)) : false;
  $pcFit    = ($pcSize && $pcSize[1] > 0 && $pcSize[0] / $pcSize[1] >= 0.9) ? 'is-contain' : '';
@endphp
<a href="{{ route('productView',$product->slug?:Str::slug($product->name)) }}" class="nv-pcard {{ $pcHasAlt ? 'has-alt' : '' }} {{ $pcFit }}">
  <div class="nv-pcard-media">
    <img src="{{ asset($pcImg) }}" alt="{{ $product->name }}" class="nv-pcard-img nv-pcard-img-main" loading="lazy">
    @if($pcHasAlt)
      <img src="{{ asset($product->banner()) }}" alt="" aria-hidden="true" class="nv-pcard-img nv-pcard-img-alt" loading="lazy">
    @endif
  </div>
</a>
