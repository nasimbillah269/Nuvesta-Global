@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->image())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection
@push('css')
<style>

</style>
@endpush @section('contents')

{{--<div class="pageTitleHeader">
    <div class="container">
        <h1>{{$page->name}}</h1>
    </div>
</div>--}}

{{--<div class="contactInfoMain">
    <div class="container">
        <h4>Get in touch with us!</h4>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="contactInfoGrid">
                    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <p>{{general()->mobile}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contactInfoGrid borderBox">
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <p>{{general()->address_one}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contactInfoGrid">
                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                    <p>{{general()->email}}</p>
                </div>
            </div>
        </div>
    </div>
</div>--}}

<!-- home appoinment form start -->
{{--<div class="homeAppoinmentFormPart">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h2>Schedule Your Appointment Today</h2>
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">脳</button>
                    <strong>Success! </strong> {{Session::get('success')}}.
                </div>
                @endif
                <form action="{{route('contactMail')}}" method="post">
                    @csrf
                    <p>If you got any quary please feel free to send us a message_</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                @if ($errors->has('name'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('name') }}</p>
                                @endif
                                <input type="name" name="name" value="" class="form-control control-section" placeholder="Your Name" required="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                @if ($errors->has('email'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('email') }}</p>
                                @endif
                                <input type="email" name="email" value="" class="form-control control-section" placeholder="Your Email" required="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                @if ($errors->has('phone'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('phone') }}</p>
                                @endif
                                <input type="phone" name="phone" value="" class="form-control control-section" placeholder="Phone Number" required="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                @if ($errors->has('subject'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('subject') }}</p>
                                @endif
                                <input type="subject" name="subject" value="" class="form-control control-section" placeholder="Subject" required="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                @if ($errors->has('message'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('message') }}</p>
                                @endif
                                <textarea name="message" rows="5" value="" class="form-control control-section" placeholder="Write Your Massege" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit">SEND MESSAGE</button>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>--}}
<!-- home appoinment form end -->









    <!-- ==========================================================================
         CONTACT COVER HEADER
         ========================================================================== -->
    <section class="contact-cover-section">
        <div class="container">
            <h1 class="contact-cover-title">Contact Us</h1>
            <div class="contact-cover-breadcrumb">
                <a href="index.html">Home</a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current">Contact Us</span>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         MAIN CONTACT SECTION
         ========================================================================== -->
    <section class="contact-main-section section-padding">
        <div class="container">
            <div class="row g-5">
                
                <!-- Contact Information Column -->
                <div class="col-lg-5">
                    <div class="contact-info-wrapper">
                        <span class="section-subtitle">Get In Touch</span><br>
                        <h2 class="section-title contact-heading mb-4">Let's Work Together</h2>
                        <!--<p class="contact-description mb-5">-->
                        <!--    We are always ready to help you. Reach out to us any time for inquiries, orders, or partnerships. Our team will get back to you as soon as possible.-->
                        <!--</p>-->
                        
                        <div class="contact-info-card">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Lithuania Office</h4>
                                <p>Girulių g. 5, LT-12124<br>Vilnius, Lithuania</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-card">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Bangladesh Office</h4>
                                <p>House 33, (5th Floor), Road 3 Sector 9,<br>Uttara, Dhaka 1230 Bangladesh.</p>
                            </div>
                        </div>

                        

                        <div class="contact-info-card">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Call Us</h4>
                                <p><a href="tel:+447782273969">+447782273969</a></p>
                                <p><a href="tel:+447782273969">+8801812370181</a></p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="contact-icon-box">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Email Us</h4>
                                <p><a href="mailto:contact@nuvestagloballlc.com">info@nuvestagloballlc.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Column -->
                <div class="col-lg-7">
                    <div class="contact-form-container shadow-sm">
                        <h3 class="contact-form-title">Send a Message</h3>
                        
                        
                     @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success! </strong> {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        
                        <form action="{{route('contactMail')}}" method="post" class="nuvesta-contact-form">
                             @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contactName" class="form-label">Full Name</label>
                                        <input type="text" id="contactName" name="name" value="" class="form-control contact-input" placeholder="Enter your name" required>
                                         @if ($errors->has('name'))
                                            <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('name') }}</p>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contactEmail" class="form-label">Email Address</label>
                                        <input type="email" id="contactEmail" name="email" value="" class="form-control contact-input" placeholder="Enter your email" required>
                                         @if ($errors->has('email'))
                                            <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('email') }}</p>
                                          @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contactSubject" class="form-label">Subject</label>
                                        <input type="text" id="contactSubject" name="subject" value="" class="form-control contact-input" placeholder="Subject of your message" required>
                                         @if ($errors->has('subject'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('subject') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contactMessage" class="form-label">Message</label>
                                        <textarea id="contactMessage" rows="6" name="message" class="form-control contact-textarea" placeholder="Write your message here..." required></textarea>
                                          @if ($errors->has('message'))
                                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('message') }}</p>
                                                @endif
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-coral contact-submit-btn w-100">
                                        Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         MAP SECTION
         ========================================================================== -->
    <section class="contact-map-section">
        <div class="container">
            
        <div class="contact-map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14594.301386702586!2d90.3888365126839!3d23.86922986348425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41a3cd378d3%3A0xc0fb19572b9a76bc!2sSector%209%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1700000000000!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>
    </section>







@endsection
@push('js')
@endpush


