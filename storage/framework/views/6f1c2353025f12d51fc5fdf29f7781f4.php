<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

        <?php echo $__env->yieldContent('title'); ?>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset(general()->favicon())); ?>" />
        <?php echo $__env->yieldContent('SEO'); ?>


       
     <!-- Google Font Outfit-->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
     <!-- Bootstrap Icons-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
     <!-- Font Awesome-->
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/vendors/fontawesome.css')); ?>" />
     <!-- Iconsax icon-->
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/vendors/iconsax.css')); ?>" />
     <!-- Bootstrap css-->
     <link rel="stylesheet" type="text/css" id="rtl-link" href="<?php echo e(asset('welcome/assets/css/vendors/bootstrap.css')); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/vendors/swiper-slider/swiper-bundle.min.css')); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/vendors/toastify.css')); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/style.css')); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/newStyle.css')); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/productsdeta.css')); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/coustomeV1.css')); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/respon.css')); ?>" />
     
       <!-- Slick Slider CSS CDN-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/slick.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/slick-theme.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/jquery.fancybox.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/jquery.fancybox.min.css')); ?>" />
       
               <!-- Bootstrap CS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
       
           <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
       

        
        <style>
        
.nv p {

    text-align: justify;
}
        
        
        .appointment-left h2 {
            color: #fff;
        }
        .appointment-left span 
    color: #fff;
}
        
        .dropdown-menu li {
    display: block;
}
        
        @media (min-width: 992px) {
    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
        top: 35px;
    }
}
.dropdown-menu {
    box-shadow: 0 15px 40px rgba(0, 0, 0, .12) !important;
}
        
        .offcanvas-body {
    flex-grow: unset !important
        }
        .offcanvas {
    z-index: 999999;
}
        
        .header-utility-link {
            font-size: 13px;
            text-transform: unset;
        }
        
        
        header .header-1 .main-menu .brand-logo img {
    max-width: 200px !important;
}
        
        
        .nav-menu li {
    position: relative;
}

.nav-submenu {
    display: none;
    position: absolute;
    left: 0;
    top: 100%;
    background: #fff;
    min-width: 200px;
    padding: 0;
}

.nav-submenu-child {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    background: #fff;
    min-width: 200px;
    padding: 0;
}

/* Show on Hover */
.nav-menu li:hover > .nav-submenu {
    display: block;
}

.nav-submenu li:hover > .nav-submenu-child {
    display: block;
}
        
        .mobile-fix-option ul li button {
    border: none;
    background: unset;
}
        
.countPosiMobile span {
    display: block;
}
        
        
        
 .pageContents ul {
    margin-bottom: 20px;
}

.pageContents ul li {
    margin-bottom: 10px;
}

.pageContents {
    padding: 20px 0;
}   
        .pageContents p {
    margin-bottom: 20px;
}
.pageContents ol li {
    display: block;
}
.pageContents ul li {
    display: block;
}
        
        .socialLinks li {
            display: inline-block;
            margin-right: 20px;
        }
        .payment-card-bottom ul li img {
            width: 250px;
        }
        .footer-end {
            display: flex;
            align-items: center;
            height: 100%;
        }
        footer .sub-footer {
            padding: 10px !important;
        }
        .socialLinks {
            
        }
        .footer-end h6 span {
            color: #ff1493;
            font-weight: bold;
            font-size: 17px;
        }
        .footer-end h6 a {
            color: #00d0ff;
            font-weight: bold;
        }
        .home-section-3 ul li a {
           text-align: left;
        }
        
        .home-section-3 ul li a:before {
                background-color: rgba(var(--theme-default));
    content: "";
    height: 1px;
    position: absolute;
    bottom: 15px;
    transition: all .4s ease-in-out;
    width: 0;
        }
        
      .home-section-3 ul li a:hover:before {
            width: 100%;   /* expand to full width on hover */
            left: 0;       /* make it start from left */
        }
        .home-section-3 ul li {
        position: relative;
    }
        
        
        
        
        
        
        
        
        .service-block {
    position: relative;
    padding: 20px;
    background-color: #fff;
    overflow: hidden;
    border: 1px solid transparent;
    transition: all 0.4s ease-in-out;
}

/* top & bottom borders */
.service-block::before,
.service-block::after {
    content: '';
    position: absolute;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #ff1493; /* border color */
    transform: scaleX(0);
    transition: transform 0.4s ease-in-out;
}

.service-block::before {
    top: 0;
    transform-origin: left;
}

.service-block::after {
    bottom: 0;
    transform-origin: right;
}

/* left & right borders */
.service-block span::before,
.service-block span::after {
    content: '';
    position: absolute;
    top: 0;
    height: 100%;
    width: 2px;
    background-color: #007bff; /* border color */
    transform: scaleY(0);
    transition: transform 0.4s ease-in-out;
}

.service-block span::before {
    left: 0;
    transform-origin: top;
}

.service-block span::after {
    right: 0;
    transform-origin: bottom;
}

/* wrap inner content in span for left/right borders */
.service-block span {
    position: relative;
    display: block;
}

/* Hover Animation */
.service-block:hover::before,
.service-block:hover::after {
    transform: scaleX(1);
}

.service-block:hover span::before,
.service-block:hover span::after {
    transform: scaleY(1);
}

footer .footer-content .footer-title h5:before{
    display: none;
}



.category-dropdown select {
    padding-right: 25px;
}





/* Menu Icon */
.menu-toggle {
        font-size: 20px;
    padding: 15px 0;
    cursor: pointer;
    display :none;
}

/* Overlay */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    display: none;
    z-index: 9;
}

/* Sidebar */
.sidebar {
    position: fixed;
    top: 0;
    right: -300px;
    width: 280px;
    height: 100%;
    background: #fff;
    color: #fff;
    transition: 0.4s;
    overflow-y: auto;
    z-index: 999;
}

.sidebar.active {
    right: 0;
}

/* Menu */
.menu {
    list-style: none;
    padding: 0;
}

.menu li {
    border-bottom: 1px solid rgba(255,255,255,0.1);
    display: block;
}

.menu li a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 20px;
    color: #000;
    text-decoration: none;
}

.menu li a:hover {
    background: #ece9e9;
}

/* Submenu */
.submenu {
    display: none;
    background: #fff;
}

.submenu li a {
    padding-left: 35px;
}

/* Toggle Icon */
.toggle-icon {
    font-size: 20px;
}




.footer-logo a img {
    background: #fff;
}



.header-1{
    transition: all 0.4s ease;
}

.sticky-header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #fff;
    z-index: 999;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}



.header2 {
        display: none;
    }



.header-dropdown-menu li+li {
    display: block !important;
}

.mgmt-accordion-btn {
    background-color: #F0F0EF !important;
}




.mobile-bottom-nav{
    position:fixed;
    bottom:0;
    left:0;
    width:100%;
    background:#fff;
    border-top:1px solid #ddd;
    display:flex;
    justify-content:space-around;
    align-items:center;
    height:60px;
    z-index:9999;
    box-shadow:0 -2px 10px rgba(0,0,0,0.08);
}

.nav-item{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    color:#222;
    font-size:12px;
    position:relative;
}

.nav-item .icon,
.cart-wrapper{
    font-size:22px;
    line-height:1;
    margin-bottom:3px;
}

.badge{
    position:absolute;
    top:-6px;
    right:-10px;
    background:#b88a00;
    color:#fff;
    font-size:10px;
    min-width:18px;
    height:18px;
    border-radius:50px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:bold;
    border:2px solid #fff;
}

.cart-wrapper{
    position:relative;
}

.nav-item.active{
    color:#000;
    font-weight:600;
}

.addToSinBtn {
    background: #811a78 !important;
    color: #fff !important;
}






.floating-contact {
    position: fixed;
    right: 20px;
    bottom: 20px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 9999;
}

.floating-contact a {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: #fff;
    font-size: 24px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: 0.3s;
}

/* WhatsApp buttons */
.whatsapp-btn {
    background: #25D366;
}

/* Call buttons */
.call-btn {
    background: #007bff;
}

/* Hover effect */
.floating-contact a:hover {
    transform: scale(1.1);
}

/* Optional: better spacing feel for multiple buttons */
.floating-contact a:not(:last-child) {
    margin-bottom: 8px;
}

.messenger-btn {
    background: #0084ff;
}









.floating-contact {
    position: fixed;
    right: 20px;
    bottom: 20px;
    z-index: 9999;
}

.contact-toggle,
.contact-items a {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    font-size: 22px;
    cursor: pointer;
}

.contact-toggle {
    background: #010a12;
}

.whatsapp-btn {
    background: #25D366;
}

.call-btn {
    background: #087fcb;
}

.contact-items {
    position: absolute;
    bottom: 70px; /* above the toggle button */
    right: 0;
    display: none;
}

.contact-items a {
    margin-bottom: 10px;
}





/* Hide on Desktop */
@media (min-width: 768px){
    .mobile-bottom-nav{
        max-width:400px;
        left:50%;
        transform:translateX(-50%);
        display: none;
    }
  
}











/* Default Desktop */
#main-nav {
    position: relative;
}

/* Mobile View */
@media (max-width: 991px) {

    #main-nav {
        position: fixed;
        top: 0;
        right: -300px; /* Hidden outside screen */
        width: 280px;
        height: 100%;
        background: #fff;
        overflow-y: auto;
        transition: right 0.4s ease-in-out;
        z-index: 9999;
        box-shadow: -5px 0 15px rgba(0,0,0,0.1);
        padding: 20px;
    }

    /* When Active */
    #main-nav.active {
        right: 0;
    }

    /* Optional Overlay */
    .menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.4);
        display: none;
        z-index: 9998;
    }

    .menu-overlay.active {
        display: block;
    }

    .toggle-nav {
        cursor: pointer;
        font-size: 22px;
    }

    /* Mobile Menu Style */
    .nav-menu {
        flex-direction: column;
    }

    .nav-menu li {
        display: block;
        margin-bottom: 10px;
    }

    .nav-submenu,
    .nav-submenu-child {
        display: none;
        padding-left: 15px;
    }
}







@media screen and (max-width: 767px) {
      .floating-contact {
         position: fixed;
    right: 20px;
    bottom: 70px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 9999;
    }
    .list-view .card-img-wrap {
   width: 100px !important;
        min-width: 100px !important;
}
.list-view .card-desc {
    display: none !important;
}
    header .header-1 .main-menu .brand-logo {
        width: unset;
    }
    .dashboard-left-sidebar.sticky {
        margin-bottom: 20px;
         display: block;
    }
    .site-header {
        display: none;
    }
     .header2 {
        display: block;
    }
    .main-menu {
        padding: 5px 0;
    }
    .title {
        font-size: 15px;
    }
    
    .sidebar.active h4 {
        margin: 0;
        text-align: center;
        background: #c3c3c3;
        padding: 10px;
    }
    
    
    
    
}


@media screen and (max-width: 577px) {
    .dashboard-left-sidebar.sticky {
    margin-bottom: 20px;
     display: block;
}
    .left-dashboard-show {
    display: none;
}
.dashboard-left-sidebar-close {
    display: none !important;
}
    .sub_header ul li {
    margin-right: 10px;
}
    .moboleSearch {
    display: block;
}
.mobileLogin {
    display: none;
}
    header .header-1 .main-menu .brand-logo img {
    max-width: 75px !important;
}
    header .header-1 .main-menu .sub_header ul {
        display: flex !important;
    }
    
    header .header-1 .main-menu .sub_header ul li .iconsax {
    --Iconsax-Size: 18px;
    --Iconsax-Color: rgba(var(--theme-font-color), 1);
    vertical-align: sub;
}

header .sub_header ul li .cart_qty_cls {
    background: rgba(var(--theme-default));
    border-radius: 20px;
    color: rgba(var(--white), 1);
    font-size: 11px;
    font-weight: 500;
    height: 13px;
    line-height: 12px;
    padding: 0px;
    position: absolute;
    right: -3px;
    text-align: center;
    top: 0px;
    width: 11px;
}
header .sub_header ul .onhover-div .shoping-prize, header .sub_header ul li .shoping-prize {
    font-size: 15px !important;
}


.menu-toggle {
    display: block;
}







}

@media screen and (max-width: 480px) {
    .jficc .ai-agent-chat-avatar-container {
        bottom: 80px !important;
    }
}







.socialLinks{
    list-style: none;
    padding: 0;
    margin: 0;

    display: flex;
    justify-content: center;
    align-items: center;

    gap: 18px;
    flex-wrap: wrap;
}

/* LI RESET */
.socialLinks li{
    margin: 0;
    padding: 0;
}

/* LINK STYLE */
.socialLinks li a{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    text-decoration: none;
    color: white;
    font-size: 14px;
    font-weight: 500;
    gap: 6px;
}

/* ICON BOX */
.socialLinks li a i{
    width: 45px;
    height: 45px;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 20px;
    line-height: 1;   /* 🔥 fixes youtube alignment */
    color: white;

    border-radius: 50%;
    transition: 0.3s;
}

/* TEXT */
.socialLinks li a span{
    color: white;
    font-size: 13px;
}

/* HOVER EFFECT */
.socialLinks li a:hover i{
    transform: scale(1.1);
}

/* BRAND COLORS */
.fb1 a i{
    background: #1877F2;
}

.socialLinks li:nth-child(2) a i{
    background: #4a4e52;
}

.socialLinks li:nth-child(3) a i{
    background: #797e83;
}

.socialLinks li:nth-child(4) a i{
    background: #E4405F;
}

.socialLinks li:nth-child(5) a i{
    background: #FF0000;
    margin-top: -14px;
}

/* =========================
   MOBILE RESPONSIVE
========================= */
@media (max-width: 768px) {
    .socialLinks {
    display: flex;
    justify-content: start;
}

    .socialLinks li a i {
    width: 40px;
    height: 40px;
        
    }
}






/*new product app css*/




        .prod-slide-text p {
            margin: 0;
            text-align: justify;
            font-size: 14px;
        }
        .prod-slide-wrap {
            text-decoration: none;
            color: #000;
        }
        
        .navbar-brand img {
        height: unset;
        max-width: 200px;
    }
    
    .prod-slide-name {
    font-size: 18px;
    font-weight: 600;
    }
    
    .details p {
        font-size: 14px;
        text-align: justify;
    }
    
    .prod-slide-text span {
    background: linear-gradient(45deg, #1e315b, #e43a59);
    padding: 2px 10px;
    display: inline-block;
    border-radius: 6px;
    color: #fff;
    margin-top: 10px;
    font-size: 13px;
    text-transform: uppercase;
}
        
 .navbar .dropdown:hover > .dropdown-menu{
    display:block;
    margin-top:0;
}

/* Dropdown Menu */
.dropdown-menu{
    min-width: 240px;
    padding: 10px 0;
    margin-top: 12px;
    border: none;
    background: #fff;
    box-shadow: 0 15px 40px rgba(0,0,0,.12);
    animation: dropdownFade .3s ease;
    overflow: hidden;
    transition: all .3s ease;
    border: 0;
}

/* Dropdown Items */
.dropdown-menu .dropdown-item{
   padding: 12px 22px;
    color: #000;
    font-size: 13px;
    font-weight: 400;
    text-transform: uppercase;
    transition: all .3s ease;
    position: relative;
}

/* Hover Effect */
.dropdown-menu .dropdown-item:hover{
    background: lightgray;
    color: #000;
    padding-left: 10px;
}

/* Active Item */
.dropdown-menu .dropdown-item.active,
.dropdown-menu .dropdown-item:active{
    background: #0d6efd;
    color: #fff;
}

/* Dropdown Animation */
@keyframes dropdownFade{
    from{
        opacity:0;
        transform:translateY(12px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.pageTitleHeader h1 {
    text-align: center;
    margin: 0;
    font-size: 30px;
    text-transform: uppercase;
    padding: 25px;
    position: relative;
}


.pageTitleHeader h1::after{
    content: "";
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 18px;
    min-width: 160px;
    height: 14px;
   background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='14' viewBox='0 0 300 14'%3E%3Cpath d='M0 7 Q15 0 30 7 T60 7 T90 7 T120 7 T150 7 T180 7 T210 7 T240 7 T270 7 T300 7' stroke='%23e43a59' stroke-width='4' fill='none'/%3E%3C/svg%3E");
    background-repeat: repeat-x;
    background-size: contain;
    animation: moveWave 10s linear infinite;
}

@keyframes moveWave{
    0%{
        background-position: 0 50%;
    }

    100%{
        background-position: 300px 50%;
    }
}




 .whatsapp-float {
      position: fixed;
      right: 25px;
      bottom: 25px;
      width: 65px;
      height: 65px;
      background: #25d366;
      color: #ffffff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 34px;
      text-decoration: none;
      z-index: 9999;
      box-shadow: 0 10px 25px rgba(37, 211, 102, 0.45);
      animation: floatUpDown 2.5s ease-in-out infinite;
      transition: all 0.3s ease;
    }

    .whatsapp-float:hover {
      color: #ffffff;
      transform: scale(1.08);
      box-shadow: 0 14px 35px rgba(37, 211, 102, 0.6);
    }

    .whatsapp-float::before,
    .whatsapp-float::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background: rgba(37, 211, 102, 0.45);
      z-index: -1;
      animation: pulse 2s infinite;
    }

    .whatsapp-float::after {
      animation-delay: 1s;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        opacity: 0.8;
      }
      100% {
        transform: scale(1.8);
        opacity: 0;
      }
    }

    @keyframes floatUpDown {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    .whatsapp-tooltip {
      position: fixed;
      right: 100px;
      bottom: 42px;
      background: #ffffff;
      color: #222;
      padding: 10px 16px;
      border-radius: 30px;
      font-size: 14px;
      font-weight: 600;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
      z-index: 9998;
    }

    .whatsapp-tooltip::after {
      content: "";
      position: absolute;
      right: -8px;
      top: 50%;
      transform: translateY(-50%);
      border-left: 8px solid #ffffff;
      border-top: 8px solid transparent;
      border-bottom: 8px solid transparent;
    }

    @media (max-width: 575px) {
      .whatsapp-float {
        width: 58px;
        height: 58px;
        font-size: 30px;
        right: 18px;
        bottom: 18px;
      }

      .whatsapp-tooltip {
        display: none;
      }
    }


.stat-item:hover {
    transform: translateY(-5px) !important;
    border-color: #f2424b;
}

 .scroll-top-btn {
    position: fixed;
    left: 25px;
    bottom: 25px;
    width: 55px;
    height: 55px;
    border: none;
    border-radius: 50%;
    background: #111827;
    color: #ffffff;
    font-size: 22px;
    z-index: 9999;
    cursor: pointer;
    display: none;
    box-shadow: 0 10px 25px rgba(17, 24, 39, 0.35);
    animation: arrowFloat 2s ease-in-out infinite;
    transition: all 0.3s ease;
  }

  .scroll-top-btn:hover {
    background: #25d366;
    transform: scale(1.08);
  }

  @keyframes arrowFloat {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-8px);
    }
  }

  @media (max-width: 575px) {
    .scroll-top-btn {
      width: 50px;
      height: 50px;
      left: 18px;
      bottom: 18px;
      font-size: 20px;
    }
  }
.btn-quote {
    background: linear-gradient(45deg, #1e315b, #e43c5a);
    border: none;
    transition: 0.5s all;
    color: #fff;
}
.btn-quote:hover {
    background: linear-gradient(45deg, #e43c5a, #1e315b);
        color: #fff;
}

@media (max-width: 575px) {
    .footer-col h4 {
        text-align: left;
    }
    .footer-links-list {
        text-align: left;
    }
    .subscribe-text {
        text-align: left;
    }
    
    
}



.footer-links-list li {
    display: block;
}

.dropdown-menu li {
    display: block;
}
        .detail-prod-title {
    font-size: 22px;
    font-weight: 400;
        }

.nv .hero h1 {
    font-size: 26px !important;
}

.nv .brand-logo {
    height: 110px !important;
}


.nv .hero .lead-text {
    font-size: 16px !important;
}

.nv .dot-list {
        display: flex;
    flex-wrap: wrap;
    row-gap: 0px !important;
    line-height: 14px;
}

.nv .dot-list li {
    font-size: 13px;
}
.about-2 {
    width: 100%;
    margin: 0 auto;
    border-radius: 10px;
}
.about-collage-img-primary {
    margin-top: 28px;
}
.about-why-section {
    padding: 50px 0;
}
.about-intro-section {
    padding: 50px 0;
}
.about-director-section {
    padding: 50px 0;
}
.about-cover-section {
    padding: 10px 0;
}
.about-banner-section {
    padding: 24px 0;
}
            
        </style>
        
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "WebSite",
              "name": "<?php echo e(websiteTitle()); ?>",
              "url": "<?php echo e(url('/')); ?>",
              "potentialAction": {
                "@type": "SearchAction",
                "target": "https://shoukhincloset.com/search?search={search_term_string}",
                "query-input": "required name=search_term_string"
              }
            }
            </script>
        
        <!-- Nuvesta design (loaded last so the old theme can't override it) -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('welcome/assets/css/newHome.css')); ?>" />
        <?php echo $__env->yieldPushContent('css'); ?>
        
        
        <?php echo general()->script_head; ?>

        
        
    </head>
    
    <body class="skeleton_body">
        
        <?php echo general()->script_body; ?>

        
        
        <!--<span class="cursor"><span class="cursor-move-inner"><span class="cursor-inner"></span></span><span class="cursor-move-outer"><span class="cursor-outer"></span></span></span>-->
        
        <div class="offcanvas offcanvas-top search-details" id="offcanvasTop" tabindex="-1" aria-labelledby="offcanvasTopLabel">
       <div class="offcanvas-header">
         <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
       </div>
       <div class="offcanvas-body theme-scrollbar">
         <div class="container">
           <h3>What are you trying  find? </h3>
           <form action="<?php echo e(route('search')); ?>" class="searchHeaderArea">
               
           <div class="search-box" id="searchHeaderInput"> 
             <input type="search" name="text" name="search" value="<?php echo e(request()->search); ?>" placeholder="I'm looking for" /><i class="iconsax" data-icon="search-normal-2"></i>
           </div>
           </form>
           <h4>Your Search Result </h4>
           <div class="searchResultAjax"></div>
         </div>
       </div>
     </div>
        
        
        
<!--    <div class="floating-contact">-->
        
       
 
<!--    <a href="https://wa.me/8801326245535" class="whatsapp-btn" target="_blank">-->
<!--        <i class="fab fa-whatsapp"></i>-->
<!--    </a>-->

   
<!--    <a href="https://wa.me/8801886600049" class="whatsapp-btn" target="_blank">-->
<!--        <i class="fab fa-whatsapp"></i>-->
<!--    </a>-->


<!--    <a href="tel:+8801326245535" class="call-btn">-->
<!--        <i class="fas fa-phone-alt"></i>-->
<!--    </a>-->


<!--    <a href="tel:+8801886600049" class="call-btn">-->
<!--        <i class="fas fa-phone-alt"></i>-->
<!--    </a>-->

<!--</div>-->


<div class="whatsapp-tooltip">
    Chat with us
  </div>
  <a href="https://wa.me/8801812370181" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>
        
        
        <div class="offcanvas offcanvas-end shopping-details" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
            <?php echo $__env->make(welcomeTheme().'carts.includes.headerCartBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <!--Header Part Include Start-->
        <?php echo $__env->make(general()->theme.'.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Main Section Start-->
        <div class="mainContentArea" style="min-height:500px;">
        <?php echo $__env->yieldContent('contents'); ?>
        </div>
        <!--Main Section End-->
        
        
        
         <!--Footer Part Include Start-->
        <?php echo $__env->make(general()->theme.'.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        
<!-- jQuery FIRST -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<!-- Bootstrap js-->
     <script src="<?php echo e(asset('welcome/assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
     <!-- iconsax js -->
     <script src="<?php echo e(asset('welcome/assets/js/iconsax.js')); ?>"> </script>
     <!-- cursor js-->
     <script src="<?php echo e(asset('welcome/assets/js/stats.min.js')); ?>"> </script>
     <!--<script src="<?php echo e(asset('welcome/assets/js/cursor.js')); ?>"> </script>-->
     <script src="<?php echo e(asset('welcome/assets/js/swiper-slider/swiper-bundle.min.js')); ?>"></script>
     <script src="<?php echo e(asset('welcome/assets/js/swiper-slider/swiper-custom.js')); ?>"></script>
     <script src="<?php echo e(asset('welcome/assets/js/countdown.js')); ?>"></script>
     <script src="<?php echo e(asset('welcome/assets/js/newsletter.js')); ?>"></script>
     <script src="<?php echo e(asset('welcome/assets/js/skeleton-loader.js')); ?>"></script>
     <!-- touchspin-->
     <script src="<?php echo e(asset('welcome/assets/js/touchspin.js')); ?>"></script>
     <!-- cookie js-->
     <script src="<?php echo e(asset('welcome/assets/js/cookie.js')); ?>"></script>
     <!-- tost js -->
     <script src="<?php echo e(asset('welcome/assets/js/toastify.js')); ?>"></script>
     <script src="<?php echo e(asset('welcome/assets/js/theme-setting.js')); ?>"></script>
     <!-- Theme js-->
     <script src="<?php echo e(asset('welcome/assets/js/script.js')); ?>"></script>
     
             <!-- Bootstrap Script  CDN-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     
           <!-- Custom Script for this Design -->
        
        <script src="<?php echo e(asset('welcome/assets/js/animation.js')); ?>"></script>
        <script src="<?php echo e(asset('welcome/assets/js/slick.js')); ?>"></script>
        <script src="<?php echo e(asset('welcome/assets/js/slick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('welcome/assets/js/jquery.fancybox.min.js')); ?>"></script>
     
         <!-- Slick Slider JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
     
         <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom Scroll Animations -->
     


<script>
$(document).ready(function () {
    $('.contact-toggle').click(function () {
        $('.contact-items').fadeToggle(300);
        $(this).find('i').toggleClass('fa-comments fa-times');
    });
});
</script>

<script>

    $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.headerMain').addClass('sticky-header');
    } else {
        $('.headerMain').removeClass('sticky-header');
    }
});

</script>


<script>
    $(document).ready(function(){

    // Open Sidebar
    $(".menu-toggle").click(function(){
        $(".sidebar").addClass("active");
        $(".overlay").fadeIn();
    });

    // Close Sidebar
    $(".overlay").click(function(){
        $(".sidebar").removeClass("active");
        $(".overlay").fadeOut();
    });

    // Submenu Toggle
    $(".has-sub > a").click(function(e){
        e.preventDefault();

        var submenu = $(this).next(".submenu");
        var icon = $(this).find(".toggle-icon");

        submenu.slideToggle(300);

        icon.text(icon.text() == "+" ? "-" : "+");
    });

});
</script>


<script>
    $(document).ready(function(){

    $(".filter-button").click(function(e){
        e.preventDefault();
        e.stopPropagation();

        $(".custom-accordion.theme-scrollbar.left-box")
            .toggleClass("open");
    });

    $(document).click(function(){
        $(".custom-accordion.theme-scrollbar.left-box")
            .removeClass("open");
    });

    $(".custom-accordion").click(function(e){
        e.stopPropagation();
    });

});
</script>


    <script>
    $(document).ready(function(){
    
        $('#toggle-nav').click(function(){
            $('#sm-horizontal').toggleClass('open');
            $('#menu-overlay').toggleClass('open');
        });
    
        $('#menu-overlay').click(function(){
            $('#sm-horizontal').removeClass('open');
            $(this).removeClass('open');
        });
    
    });
</script>


        <script type="text/javascript">
            
            $('.hero-sectionClick').on('click', function (e) {
                e.preventDefault();
            
                var homeUrl = '/'; // or "<?php echo e(url('/')); ?>"
                var targetId = 'offers';
                if (window.location.pathname === '/' || window.location.pathname === '/home') {
            
                    var target = $('#' + targetId);
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top - 240
                        }, 300);
                    }
                } else {
                    window.location.href = homeUrl + '#' + targetId;
                }
            });
        
            (function () {
                
                $('.hamburger-menu').on('click', function() {
                    $('.bar').toggleClass('animate');
                $('.mobile-menu').toggleClass('active');
                return false;
                });
                
                $('.countPosiMobile.Bar').on('click', function() {
                    $('.bar').toggleClass('animate');
                $('.mobile-menu').toggleClass('active');
                return false;
                });
                
              $('.has-children').on ('click', function() {
                       $(this).children('ul').slideToggle('slow', 'swing');
                   $('.icon-arrow').toggleClass('open');
                });
                
                if (!$(event.target).closest('.searchHeaderArea').length) {
                    $('.searchResultAjax').empty();
                }
                
                
            })();
        </script>
     
     
     <script>
    window.addEventListener("scroll", function () {
        const btn = document.getElementById("scrollTop");
        if (window.scrollY > 200) {
            btn.style.display = "flex";
        } else {
            btn.style.display = "none";
        }
    });

    document.getElementById("scrollTop").addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
        

        <script>
            function openSearch() {
                document.getElementById("myOverlay").style.display = "block";
            }

            function closeSearch() {
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>

        <script type="text/javascript">
        /** CSRF Token Header Set **/
            $.ajaxSetup({
        	    headers: {
        	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	    }
        	});
            // home page banner slider script start
              $(".headerTopPart").slick({
                dots: false,
                autoplay: true,
                autoplaySpeed: 5000,
                infinite: true,
                speed: 1500,
                prevArrow: '',
                nextArrow: '',
                slidesToShow: 1,
                slidesToScroll: 1,
                
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ],
            });
        
            $(".feaCtgSlick").slick({
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                infinite: true,
                speed: 300,
                prevArrow: '<i class="fa fa-angle-left"></i>',
                nextArrow: '<i class="fa fa-angle-right"></i>',
                slidesToShow: 8,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ],
            });
        </script>

        <script type="text/javascript">
            $(".brandSlick").slick({
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                infinite: true,
                speed: 300,
                prevArrow: '<i class="fa fa-angle-left"></i>',
                nextArrow: '<i class="fa fa-angle-right"></i>',
                slidesToShow: 8,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ],
            });
        </script>

        <script>
            $(document).ready(function(){
                
                // $(document).on("keyup", "#searchHeaderInput input", function () {
                    
                //     var search =$(this).val();
                    
                //     if(search.length > 0){
                //         var url ="<?php echo e(route('search')); ?>";
                //         $.ajax({
                //           url: url,
                //           type: 'GET',
                //           dataType: 'json',
                //           cache: false,
                //           data:{'search':search}
                //         })
                //         .done(function(data) {
                //             $(".searchResultAjax").empty().append(data.searchProducts);
                //         })
                //         .fail(function() {
                //           // alert("error");
                //         });
                        
                //     }else{
                //         $(".searchResultAjax").empty();
                //     }
                    
                // });
                
                 $("#district").on("change", function(){
                    var id = $(this).val();
                      if(id==''){
                       $('#city').empty().append('<option value="">No City</option>');
                      }
                      var url ='<?php echo e(url('geo/filter')); ?>' + '/'+id;
                      $.get(url,function(data){
                        $('#city').empty().append(data.geoData);  
                      });   
                });
                
                $(document).on("click", ".ajaxaddToCart", function () {
                  var that = $( this );
                  var url = that.data('url');
                    that.addClass('loading');
                    $.ajax({
                      url: url,
                      type: 'GET',
                      dataType: 'json',
                      cache: false,
                    })
                    .done(function(data) {
                        that.removeClass('loading');
                        if(data.success){
                            $(".cartCounter").empty().append(data.cartCount);
                            $(".cartTotal").empty().append(data.cartTotal);
                        }
                        that.empty().append('Cart Added');
                        setTimeout(function() {
                            that.empty().append('Add to Cart');
                        }, 2000);
                    })
                    .fail(function() {
                      // alert("error");
                      that.removeClass('loading');
                    });
                    
                });
                
                 $(document).on('click','.cartUpdate',function(){
    
                      var url = $(this).data('url');
                      var Dcharge =parseInt($('.cartDeliveryCharge').text());
        
                      if (isNaN(Dcharge)){
                        Dcharge =0;
                      }
        
                        $.ajax({
                          url: url,
                          type: 'GET',
                          dataType: 'json',
                          cache: false,
                        })
                        .done(function(data) {
                            $(".cartItemsList").empty().append(data.cartItems);
                            $(".shopping-details").empty().append(data.cartViews);
                            $(".cartCounter").empty().append(data.cartCount);
                            $(".cartTotal").empty().append(data.cartTotal);
                        })
                        .fail(function() {
                          // alert("error");
                        });
                    
                });
                
                
                $(document).on('click','.wishlistCompareUpdate',function(){
                  var that = $( this );
                  var url = that.data('url');
                  that.addClass('loading');
                  $.ajax({
                      url: url,
                      type: 'GET',
                      dataType: 'json',
                      cache: false,
                    })
                    .done(function(data) {
                        that.removeClass('loading');
                        if(data.success)
                           {
                            $(".viewItemsLists").empty().append(data.itemsView);
    
                            if(data.status==true){
                              that.find('.fa-heart').toggleClass('fa-regular fa-solid');
                            }else{
                              that.find('.fa-heart').toggleClass('fa-solid fa-regular');
                            }
                            if(data.statusType==0){
                              $(".wlcounter").empty().append(data.count);
                              if(data.alert==true){
                                alert('Wishlist Are Full. Cannot Added Over 48 Items.');
                              }
                            }else{
                              $(".cpcounter").empty().append(data.count);
                              if(data.alert==true){
                                alert('Compare Are Full. Cannot Added Over 20 Items.');
                              }
                            }
    
                           }
                    })
                    .fail(function() {
                      // alert("error");
                      that.removeClass('loading');
                    });
    
                });
                
                
            
                $(".categoryListMain").hide();
                $(".navCtg").click(function(){
                    $(".categoryListMain").toggle("slow");
                });
                
            });
        </script>
        
        <script>
            $(document).on('click','.subsriberbtm',function(e){
              e.preventDefault();
               var url = $('#subscirbeForm').data('url');
               var subscribeEmail =$('#subscribeEmail').val();
                    $.ajax({
                      url: url,
                      type: 'POST',
                      dataType: 'json',
                      data: {email : subscribeEmail},
                      cache: false,
                    })
                    .done(function(data) {
                        if(data.success)
                          {
                            $("#subscribeemailMsg").html("<span style='color: #339642;padding: 5px 15px;margin-bottom: 10px;display: inline-block;'>"+ data.message +"</span>");
                            $("#subscribeEmail").css("border","");
                            $("#subscirbeForm")[0].reset();
                          }else{
                            $("#subscribeemailMsg").html("<span style='color: #e52734;padding: 5px 15px;margin-bottom: 10px;display: inline-block;'>"+ data.message +"</span>");
                          }
                    })
                    .fail(function() {
                      // alert("error");
                    });
        
            });
        
            $("#subscribeEmail").keyup(function(){
                  if(validateEmail()){
                      $("#subscribeEmail").css("border","2px solid #339642");
                      //$("#subscribeemailMsg").html("<span style='background: #339642;padding: 5px 15px;'>Validated Email</span>");
                  }else{
                        var subscribeEmail=$("#subscribeEmail").val();
                       if(subscribeEmail==''||subscribeEmail==null || subscribeEmail=='undefined'){
                            //$("#subscribeemailMsg").html("<span style='background: #e52734;padding: 5px 15px;'>Please Get a Verified Email</span>");
                        }else{
                          $("#subscribeEmail").css("border","2px solid #e52734");
                          $("#subscribeemailMsg").html("");
                        }
                  }
              });
        
            function validateEmail(){
                  var subscribeEmail=$("#subscribeEmail").val();
        
                   var reg =/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                   if(reg.test(subscribeEmail)){
                      return true;
                   }else{
                      return false;
              }
        
            }
        </script>
        
        <?php echo $__env->yieldPushContent('js'); ?>
        
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/layouts/app.blade.php ENDPATH**/ ?>