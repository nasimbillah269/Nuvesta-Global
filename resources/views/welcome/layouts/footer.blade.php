<!-- ================= FOOTER ================= -->
@php
  $pg = fn ($template, $fallback) => ($p = pageTemplate($template)) ? route('pageView',$p->slug) : url($fallback);
@endphp
<footer class="nv site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a href="{{route('index')}}" class="brand">
          <img src="{{asset('welcome/images/home/logo-white.png')}}" alt="{{general()->title ?: 'Nuvesta Global LLC'}}" class="brand-logo">
        </a>
        <p class="footer-tag">Global Apparel Sourcing &amp; Product Development</p>
      </div>

      <div class="footer-col">
        <h6>Quick Links</h6>
        <ul>
          <li><a href="{{route('index')}}">Home</a></li>
          <li><a href="{{$pg('About Us','about-us')}}">About Us</a></li>
          <li><a href="{{$pg('Latest Products','products-all')}}">Products</a></li>
          <li><a href="#">Sourcing</a></li>
          <li><a href="#">Quality &amp; Compliance</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h6>More</h6>
        <ul>
          <li><a href="#">Europe</a></li>
          <li><a href="{{$pg('Latest Blog','blogs')}}">Insights</a></li>
          <li><a href="{{$pg('Contact Us','contact-us')}}">Contact</a></li>
          <li><a href="{{$pg('Get A Quote','get-a-quote')}}">Request an RFQ</a></li>
          <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h6>Contact Us</h6>
        <ul class="contact">
          @if(general()->email)
          <li><i class="bi bi-envelope"></i><a href="mailto:{{general()->email}}">{{general()->email}}</a></li>
          @endif
          @if(general()->mobile)
          <li><i class="bi bi-whatsapp"></i><a href="https://wa.me/{{preg_replace('/\D/','',general()->mobile)}}" target="_blank" rel="noopener">{{general()->mobile}}</a></li>
          @endif
          <li><i class="bi bi-geo-alt"></i><span>Dhaka, Bangladesh</span></li>
          <li><i class="bi bi-geo-alt"></i><span>Vilnius, Lithuania (Europe)</span></li>
          @if(general()->linkedin_link)
          <li><i class="bi bi-linkedin"></i><a href="{{general()->linkedin_link}}" target="_blank" rel="noopener">LinkedIn</a></li>
          @endif
        </ul>
      </div>

      <div class="footer-col footer-map">
        <img src="{{asset('welcome/images/home/worldmap.png')}}" alt="" aria-hidden="true">
        <div class="footer-regions"><span>Bangladesh</span><span>Lithuania / Europe</span><span>Global Markets</span></div>
        <p class="copyright">&copy; {{date('Y')}} Nuvesta Global LLC. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
