<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Travel HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="/image/x-icon" href="/assets/img/favicon.ico">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />


		<!-- CSS here -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/flaticon.css">
        <link rel="stylesheet" href="/assets/css/slicknav.css">
        <link rel="stylesheet" href="/assets/css/animate.min.css">
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/assets/css/themify-icons.css">
        <link rel="stylesheet" href="/assets/css/slick.css">
        <link rel="stylesheet" href="/assets/css/nice-select.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/custom.css">
        <link rel="stylesheet" href="/qgis/css/leaflet.css">
        <link rel="stylesheet" href="/qgis/css/qgis2web.css">
        <link rel="stylesheet" href="/qgis/css/fontawesome-all.min.css">
   </head>
   <style>
    .header {
        position: fixed; /* Mengatur posisi header tetap */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000; /* Z-index yang lebih tinggi dari elemen peta */
        background-color: #ffffff; /* Warna latar belakang header */
    }
    
    </style>
   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a href="/"><img src="/assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>               
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="/">Home</a></li>
                                            {{-- <li><a href="/aboutus">About US</a></li> --}}
                                            <li><a href="/package">Kebun</a></li>
                                            <li><a href="/blog">Blog</a></li>
                                            <li><a href="/map">Map</a></li>
                                            <li><a href="/contact">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    @yield('main')

    <footer>

        <!-- Footer Start-->
        <div class="footer-area footer-padding footer-bg" data-background="/assets/img/service/footer_bg.jpg">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="index.html"><img src="/assets/img/logo/logo2_footer.png" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>Lorem iaspsum doldfor sit amvset, consectetur adipisicing cvelit csed do eiusmod tempor incididucvccnt ut labovre.</p>
                                </div>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> Offers & Discounts</a></li>
                                    <li><a href="#"> Get Coupon</a></li>
                                    <li><a href="#">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href="#">Woman Cloth</a></li>
                                    <li><a href="#">Fashion Accessories</a></li>
                                    <li><a href="#"> Man Accessories</a></li>
                                    <li><a href="#"> Rubber made Toys</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                 <li><a href="#">Frequently Asked Questions</a></li>
                                 <li><a href="#">Terms & Conditions</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Report a Payment Issue</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row pt-padding">
                 <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="footer-copy-right">
                         <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                 </div>
                  <div class="col-xl-5 col-lg-5 col-md-5">
                        <!-- social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                 </div>
             </div>
            </div>
        </div>
        <!-- Footer End-->
 
    </footer>

	<!-- JS here -->
       
	
        <script src="/qgis/js/qgis2web_expressions.js"></script>
        <script src="/qgis/js/leaflet.js"></script>
        <script src="/qgis/js/leaflet.rotatedMarker.js"></script>
        <script src="/qgis/js/leaflet.pattern.js"></script>
        <script src="/qgis/js/leaflet-hash.js"></script>
        <script src="/qgis/js/Autolinker.min.js"></script>
        <script src="/qgis/js/rbush.min.js"></script>
        <script src="/qgis/js/labelgun.min.js"></script>
        <script src="/qgis/js/labels.js"></script>
        <script src="/qgis/data/kebunpg_1.js"></script>
		<!-- All JS Custom Plugins Link Here here -->
        <script src="/./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

		<!-- Jquery, Popper, Bootstrap -->
		<script src="/./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/./assets/js/popper.min.js"></script>
        <script src="/./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="/./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="/./assets/js/owl.carousel.min.js"></script>
        <script src="/./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="/./assets/js/wow.min.js"></script>
		<script src="/./assets/js/animated.headline.js"></script>
        <script src="/./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="/./assets/js/jquery.scrollUp.min.js"></script>
        <script src="/./assets/js/jquery.nice-select.min.js"></script>
		<script src="/./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="/./assets/js/contact.js"></script>
        <script src="/./assets/js/jquery.form.js"></script>
        <script src="/./assets/js/jquery.validate.min.js"></script>
        <script src="/./assets/js/mail-script.js"></script>
        <script src="/./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="/./assets/js/plugins.js"></script>
        <script src="/./assets/js/main.js"></script>
        
    </body>
</html>