<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <title>Mekina - Medical & Health HTML5 Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
@section('cssfile')
<link rel="shortcut icon" type="image/x-icon" href={{asset("assets/img/logo/favicon.png")}}>

<!-- CSS here -->
<link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/swiper-bundle.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/slick.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/icofont.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/icofont.min.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/magnific-popup.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/font-awesome-pro.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/spacing.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/custom-animation.css")}}">
<link rel="stylesheet" href="{{asset("assets/css/main.css")}}">
@show
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="htrrs://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

<!-- preloader start -->

<!-- preloader start -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" >
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- search popup start -->
   <div class="search__popup">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search__wrapper">
                  <div class="search__top d-flex justify-content-between align-items-center">
                     <div class="search__logo">
                        <a href="index.html">
                           <img src=assets/img/logo/logo-white.png alt="img">
                        </a>
                     </div>
                     <div class="search__close">
                        <button type="button" class="search__close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              >
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search__form">
                     <form action="#">
                        <div class="search__input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 >
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search popup end -->

   <!-- rr-offcanvus-area-start -->

   @include('frontend.layouts.offcanvas')
   <!-- rr-offcanvus-area-end -->

      <!-- header area start -->
@include('frontend.layouts.header')
      <!-- header area end -->

   <main>

      <!-- slider area start -->
@yield('slider', '')
@yield('breadcrumb', '')
@yield('content', '')




   </main>


   <footer>
      <div class="rr-footer-main p-relative fix" data-background="assets/img/footer/footer-bg.jpg">

       <!-- footer area start -->
       @include('frontend.layouts.footer')
      <!-- footer area end -->

         <!-- copy-right area start -->
         <div class="rr-copyright-area p-relative">
            <div class="container rr-copyright-broder rr-copyright-space">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s"
                     data-wow-delay=".3s">
                     <div class="rr-copyright-left text-center text-md-start">
                        <p>Copyright © 2024 <a href="#"> Mekina, </a> All Rights Reserved.</p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s"
                     data-wow-delay=".5s">
                     <div class="rr-copyright-right text-center text-md-end">
                        <a href="about.html">About Us </a>
                        <a href="service.html">Events</a>
                        <a href="blog.html">News</a>
                        <a href="service.html">Portfolio</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- copy-right area end -->
      </div>
   </footer>

   <!-- JS here -->
   <script src="{{asset("assets/js/vendor/jquery.js")}}"></script>
   <script src="{{asset("assets/js/vendor/waypoints.js")}}"></script>
   <script src="{{asset("assets/js/bootstrap-bundle.js")}}"></script>
   <script src="{{asset("assets/js/ajax-form.js")}}"></script>
   <script src="{{asset("assets/js/imagesloaded-pkgd.js")}}"></script>
   <script src="{{asset("assets/js/isotope-pkgd.js")}}"></script>
   <script src="{{asset("assets/js/jarallax.js")}}"></script>
   <script src="{{asset("assets/js/magnific-popup.js")}}"></script>
   <script src="{{asset("assets/js/nice-select.js")}}"></script>
   <script src="{{asset("assets/js/purecounter.js")}}"></script>
   <script src="{{asset("assets/js/jquery-knob.js")}}"></script>
   <script src="{{asset("assets/js/jquery-appear.js")}}"></script>
   <script src="{{asset("assets/js/wow.js")}}"></script>
   <script src="{{asset("assets/js/slick.js")}}"></script>
   <script src="{{asset("assets/js/swiper-bundle.js")}}"></script>
   <script src="{{asset("assets/js/main.js")}}"></script>

</body>

</html>
