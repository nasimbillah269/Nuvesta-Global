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


/* =========================================
   QUALITY & COMPLIANCE SECTION
========================================= */

.qualitySection {
    padding: 100px 0;
    background: #f7f8fa;
    position: relative;
    overflow: hidden;
}

/* Background decoration */
.qualitySection::before {
    content: "";
    position: absolute;
    width: 450px;
    height: 450px;
    border-radius: 50%;
    background: rgba(196, 155, 76, 0.06);
    top: -220px;
    right: -150px;
}

.qualitySection::after {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: rgba(22, 35, 52, 0.03);
    bottom: -150px;
    left: -100px;
}


/* =========================================
   HEADING
========================================= */

.qualityHeading {
    max-width: 760px;
    margin: 0 auto 65px;
    position: relative;
    z-index: 2;
}

.qualityTag {
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2.5px;
    color: #b38a3e;
    margin-bottom: 15px;
    position: relative;
}

.qualityTag::before,
.qualityTag::after {
    content: "";
    display: inline-block;
    width: 25px;
    height: 1px;
    background: #b38a3e;
    vertical-align: middle;
    margin: 0 10px;
}

.qualityHeading h2 {
    margin: 0 0 18px;
    color: #172333;
    font-size: 46px;
    line-height: 1.15;
    font-weight: 700;
}

.qualityHeading h2 span {
    color: #b38a3e;
}

.qualityHeading p {
    max-width: 680px;
    margin: auto;
    color: #687586;
    font-size: 16px;
    line-height: 1.8;
}


/* =========================================
   PROCESS
========================================= */

.qualityProcess {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0;
    position: relative;
    z-index: 2;
}


/* Individual step */

.qualityStep {
    width: 165px;
    min-height: 245px;
    padding: 25px 15px;
    text-align: center;
    background: #ffffff;
    border: 1px solid #e8ebef;
    border-radius: 12px;
    position: relative;
    transition: all 0.35s ease;
    box-shadow: 0 8px 30px rgba(20, 32, 48, 0.04);
}

.qualityStep:hover {
    transform: translateY(-8px);
    border-color: #c9a45d;
    box-shadow: 0 15px 40px rgba(20, 32, 48, 0.10);
}


/* Step number */

.stepNumber {
    position: absolute;
    top: 10px;
    right: 12px;
    font-size: 10px;
    font-weight: 700;
    color: #c9a45d;
    letter-spacing: 1px;
}


/* Icon */

.stepIcon {
    width: 65px;
    height: 65px;
    margin: 12px auto 18px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f7f2e8;
    color: #b38a3e;
    font-size: 23px;
    transition: all 0.3s ease;
}

.qualityStep:hover .stepIcon {
    background: #b38a3e;
    color: #ffffff;
    transform: scale(1.05);
}


/* Step title */

.qualityStep h4 {
    margin: 0 0 10px;
    color: #172333;
    font-size: 15px;
    font-weight: 700;
}


/* Step description */

.qualityStep p {
    margin: 0;
    color: #7a8491;
    font-size: 12px;
    line-height: 1.6;
}


/* =========================================
   ARROW
========================================= */

.qualityArrow {
    width: 35px;
    text-align: center;
    color: #c9a45d;
    font-size: 18px;
}


/* =========================================
   CERTIFICATION BOX
========================================= */

.certificationBox {
    margin-top: 65px;
    padding: 30px 35px;
    background: #172333;
    border-radius: 15px;
    display: flex;
    align-items: center;
    position: relative;
    z-index: 2;
    overflow: hidden;
    box-shadow: 0 15px 45px rgba(20, 32, 48, 0.12);
}

.certificationBox::after {
    content: "";
    position: absolute;
    width: 260px;
    height: 260px;
    border: 45px solid rgba(201, 164, 93, 0.08);
    border-radius: 50%;
    right: -100px;
    top: -100px;
}


/* Certification icon */

.certificationIcon {
    width: 65px;
    height: 65px;
    flex: 0 0 65px;
    border-radius: 50%;
    background: rgba(201, 164, 93, 0.12);
    color: #d5b36c;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 25px;
    margin-right: 25px;
}


/* Content */

.certificationContent {
    flex: 1;
    position: relative;
    z-index: 2;
}

.certificationContent > span {
    color: #d5b36c;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
}

.certificationContent h3 {
    margin: 7px 0 8px;
    color: #ffffff;
    font-size: 22px;
    font-weight: 600;
}

.certificationContent p {
    margin: 0;
    max-width: 780px;
    color: #b7c0ca;
    font-size: 14px;
    line-height: 1.7;
}


/* Badge */

.certificationBadge {
    width: 100px;
    height: 100px;
    flex: 0 0 100px;
    border: 1px solid rgba(213, 179, 108, 0.35);
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #d5b36c;
    text-align: center;
    position: relative;
    z-index: 2;
}

.certificationBadge i {
    font-size: 22px;
    margin-bottom: 5px;
}

.certificationBadge span {
    font-size: 9px;
    line-height: 1.4;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 1199px) {

    .qualityProcess {
        flex-wrap: wrap;
        gap: 20px;
    }

    .qualityArrow {
        width: auto;
    }

    .qualityStep {
        width: 175px;
    }
}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 767px) {

    .qualitySection {
        padding: 65px 0;
    }

    .qualityHeading {
        margin-bottom: 45px;
    }

    .qualityHeading h2 {
        font-size: 32px;
    }

    .qualityHeading p {
        font-size: 14px;
    }

    .qualityTag::before,
    .qualityTag::after {
        width: 15px;
        margin: 0 6px;
    }

    .qualityProcess {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .qualityStep {
        width: 100%;
        min-height: 225px;
    }

    .qualityArrow {
        display: none;
    }

    .certificationBox {
        padding: 25px;
        display: block;
        text-align: center;
    }

    .certificationIcon {
        margin: 0 auto 20px;
    }

    .certificationContent h3 {
        font-size: 19px;
    }

    .certificationContent p {
        font-size: 13px;
    }

    .certificationBadge {
        margin: 25px auto 0;
    }
}


@media (max-width: 450px) {

    .qualityProcess {
        grid-template-columns: 1fr;
    }

    .qualityStep {
        min-height: auto;
        padding: 25px 20px;
    }

    .qualityHeading h2 {
        font-size: 28px;
    }
}



</style>
@endpush 

@section('contents')


    <!-- ==========================================================================
         1. COMPACT PAGE COVER (ONLY PAGE NAME & BREADCRUMB)
         ========================================================================== -->
    <section class="about-cover-section">
        <div class="container">
            <h1 class="about-cover-title">{{$page->name}}</h1>
            <div class="about-cover-breadcrumb">
                <a href="{{route('index')}}">Home</a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current">{{$page->name}}</span>
            </div>
        </div>
    </section>

<section class="qualitySection">
    <div class="container">

        <!-- Section Heading -->
        {{--<div class="qualityHeading text-center">
            <span class="qualityTag">QUALITY &amp; COMPLIANCE</span>

            <h2>Quality Is Managed, <span>Not Assumed.</span></h2>

            <p>
                Nuvesta coordinates quality throughout the sourcing process,
                ensuring that every stage is monitored with care, consistency,
                and accountability.
            </p>
        </div>--}}

        <!-- Quality Process -->
        <div class="qualityProcess">

            <div class="qualityStep">
                <div class="stepNumber">01</div>
                <div class="stepIcon">
                    <i class="fa fa-scissors"></i>
                </div>
                <h4>Fabric Quality</h4>
                <p>Material quality is checked before production begins.</p>
            </div>

            <div class="qualityArrow">
                <i class="fa fa-long-arrow-right"></i>
            </div>

            <div class="qualityStep">
                <div class="stepNumber">02</div>
                <div class="stepIcon">
                    <i class="fa fa-check"></i>
                </div>
                <h4>Sample Approval</h4>
                <p>Samples are reviewed and approved against requirements.</p>
            </div>

            <div class="qualityArrow">
                <i class="fa fa-long-arrow-right"></i>
            </div>

            <div class="qualityStep">
                <div class="stepNumber">03</div>
                <div class="stepIcon">
                    <i class="fa fa-cogs"></i>
                </div>
                <h4>Pre-production</h4>
                <p>Production readiness is verified before bulk manufacturing.</p>
            </div>

            <div class="qualityArrow">
                <i class="fa fa-long-arrow-right"></i>
            </div>

            <div class="qualityStep">
                <div class="stepNumber">04</div>
                <div class="stepIcon">
                    <i class="fa fa-eye"></i>
                </div>
                <h4>Inline Monitoring</h4>
                <p>Quality is monitored continuously during production.</p>
            </div>

            <div class="qualityArrow">
                <i class="fa fa-long-arrow-right"></i>
            </div>

            <div class="qualityStep">
                <div class="stepNumber">05</div>
                <div class="stepIcon">
                    <i class="fa fa-search"></i>
                </div>
                <h4>Final Inspection</h4>
                <p>Finished goods are inspected before shipment.</p>
            </div>

            <div class="qualityArrow">
                <i class="fa fa-long-arrow-right"></i>
            </div>

            <div class="qualityStep">
                <div class="stepNumber">06</div>
                <div class="stepIcon">
                    <i class="fa fa-ship"></i>
                </div>
                <h4>Packing &amp; Shipment</h4>
                <p>Approved goods are packed and prepared for dispatch.</p>
            </div>

        </div>

        <!-- Certification Notice -->
        <div class="certificationBox">
            <div class="certificationIcon">
                <i class="fa fa-certificate"></i>
            </div>

            <div class="certificationContent">
                <span>COMPLIANCE &amp; CERTIFICATION</span>

                <h3>Verified Certifications, Where Applicable.</h3>

                <p>
                    Actual certifications are shown only where the relevant
                    factory or supplier has verified certification. This helps
                    ensure transparency and gives buyers confidence in the
                    sourcing process.
                </p>
            </div>

            <div class="certificationBadge">
                <i class="fa fa-shield"></i>
                <span>Verified<br>Supplier</span>
            </div>
        </div>

    </div>
</section>


@endsection 
@push('js') 
@endpush


