<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">

    <!-- Flaticon Icon CSS -->
    <link rel="stylesheet" href="css/vendor/flaticon.css">

    <!-- Swiper Slider CSS -->
    <link rel="stylesheet" href="css/plugins/swiper.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/plugins/magnific-popup.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <!-- <link rel="stylesheet" href="css/vendor/vendor.min.css">
        <link rel="stylesheet" href="css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>





    <!--====================  header area ====================-->
    <div class="header-area header-area--default">


        <!-- Header Bottom Wrap Start -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center">
                        <div class="header__logo">
                            <div class="logo">
                                <a href="index.html"><img style="width: 130px;" src="images/boi_main_logo.jpeg" alt=""></a>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header__navigation menu-style-three d-none d-lg-block">
                                <nav class="navigation-menu">
                                    <ul>
                                        <li class="has-children has-children--multilevel-submenu active">
                                            <a href="#"><span>Home</span></a>
                                            <ul class="submenu">
                                                <li class="active"><a href="index.html"><span>Home One</span></a></li>
                                                <li><a href="index-2.html"><span>Home Two</span></a></li>
                                                <li><a href="index-3.html"><span>Home Three</span></a></li>
                                                <li><a href="index-4.html"><span>Home Four</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="about-us.html"><span>About</span></a>
                                        </li>
                                        <li class="has-children">
                                            <a href="events.html"><span>Event</span></a>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="service.html"><span>Services</span></a>
                                            <!-- <ul class="submenu">
                                                <li><a href="it-services.html"><span>IT Services</span></a></li>
                                            </ul> -->
                                        </li>

                                        <li class="has-children"><a href="causes.html"><span>Causes</span></a></li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="#"><span>Pages</span></a>
                                            <ul class="submenu">
                                                <li><a href="donation.html"><span>Donation</span></a></li>
                                                <li><a href="gallery.html"><span>Gallery</span></a></li>
                                                <li><a href="mission-and-vision.html"><span>Mission & Vision</span></a></li>
                                                <li><a href="causes-details.html"><span>Causes Details</span></a></li>
                                                <li><a href="events-details.html"><span>Events Details</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="{{url('/contact-us')}}"><span>Contact</span></a>
                                        </li>

                                    </ul>
                                </nav>

                            </div>

                            <div class="header-btn text-right d-none d-sm-block ml-lg-4">
                                <a class="btn-circle btn-default btn" href="#">Donate</a>
                            </div>

                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Bottom Wrap End -->

    </div>
    <!--====================  End of header area  ====================-->



    <div class="site-wrapper-reveal no-overflow">

        <!-- ======== Hero Area Start ========== -->
        <div class="hero-area hero-style-03 christian-hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7 ml-auto">
                        <div class="hero-content text-left">
                            <h2 class="text-black">Buddham namami,
                                dhammam namami
                                sangham namami.</h2>
                            <div class="ht-btn-area section-space--mt_40">
                                <a href="#" class="hero-btn">Learn more</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======== Hero Area End ========== -->

        <div class="bg-gray">
            <!-- ======== Service Area Start ========== -->
            <div class="service-area section-space--ptb_120 service-top-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center">
                                <h3 class="section-title center-style">What we do</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Service Start -->
                            <div class="single-service-wrap mt-30">
                                <div class="service-image">
                                    <a href="#"><img src="images/services/christian-service-01.png" class="img-fluid" alt="Service image"></a>
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title-two">Spiritual Service</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text.</p>
                                </div>
                            </div>
                            <!--// Single Service End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Service Start -->
                            <div class="single-service-wrap mt-30">
                                <div class="service-image">
                                    <a href="#"><img src="images/services/christian-service-02.png" class="img-fluid" alt="Service image"></a>
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title-two">Relief Service</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text.</p>
                                </div>
                            </div>
                            <!--// Single Service End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Service Start -->
                            <div class="single-service-wrap mt-30">
                                <div class="service-image">
                                    <a href="#"><img src="images/services/christian-service-03.png" class="img-fluid" alt="Service image"></a>
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title-two">Medical Service</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text.</p>
                                </div>
                            </div>
                            <!--// Single Service End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======== Service Area End ========== -->

            <!-- ======== Tai About Area Start ========== -->
            <div class="tai-about-area">
                <div class="container-fluid pl-0 pr-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-6">
                            <div class="about-tai-image">
                                <img src="images/banners/christian-about.png" class="img-fluid" alt="Christian Images">
                            </div>
                        </div>
                        <div class="col-lg-6 small-mt__30 tablet-mt__30 small-mb__60 tablet-mb__60">
                            <div class="about-tai-content col-06__right">
                                <div class="section-title-wrap">
                                    <h3 class="section-title left-style">History of our Temple</h3>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                <div class="about-us-button mt-40">
                                    <a class="about-us-btn" href="#">Discover</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ======== Tai About Area End ========== -->
        </div>
        <!-- ======== Classes Area Start ========== -->
        <div class="classes-area section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center">
                            <h3 class="section-title center-style">Our Spiritual Classes</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Spiritual Start -->
                        <div class="single-spiritual-wrap">
                            <div class="spitiutal-title">
                                <h4>Standard Religious Class</h4>
                            </div>
                            <div class="spitital-content">
                                <p>It is a long established fact that a reader will be distracted by the readable.</p>
                            </div>
                            <div class="classes-time">
                                Time @ 09.00 am
                            </div>
                        </div>
                        <!--// Single Spiritual End -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Spiritual Start -->
                        <div class="single-spiritual-wrap">
                            <div class="spitiutal-title">
                                <h4>Standard Religious Class</h4>
                            </div>
                            <div class="spitital-content">
                                <p>It is a long established fact that a reader will be distracted by the readable.</p>
                            </div>
                            <div class="classes-time">
                                Time @ 09.00 am
                            </div>
                        </div>
                        <!--// Single Spiritual End -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Spiritual Start -->
                        <div class="single-spiritual-wrap">
                            <div class="spitiutal-title">
                                <h4>Standard Religious Class</h4>
                            </div>
                            <div class="spitital-content">
                                <p>It is a long established fact that a reader will be distracted by the readable.</p>
                            </div>
                            <div class="classes-time">
                                Time @ 09.00 am
                            </div>
                        </div>
                        <!--// Single Spiritual End -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Spiritual Start -->
                        <div class="single-spiritual-wrap">
                            <div class="spitiutal-title">
                                <h4>Standard Religious Class</h4>
                            </div>
                            <div class="spitital-content">
                                <p>It is a long established fact that a reader will be distracted by the readable.</p>
                            </div>
                            <div class="classes-time">
                                Time @ 09.00 am
                            </div>
                        </div>
                        <!--// Single Spiritual End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ======== Classes Area End ========== -->


        <!-- ======== Donation Area Start ========== -->
        <div class="donation-area section-space--pb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center">
                            <h3 class="section-title center-style">All Donation</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6">
                        <div class="donation-image mt-30">
                            <img src="images/donation/christian-donate-01.png" class="img-fluid" alt="Donation Image">
                        </div>
                        <div class="donation-content mt-30">

                            <div class="progress-wrap-muslim">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="progress-bar--two">

                                            <div class="progress_sold_target">
                                                <p class="start-sold">Total Collection $5933.00</p>
                                                <p class="sold-av">Last Donte 5m ago</p>
                                            </div>

                                            <!-- Start Single Progress Charts -->
                                            <div class="progress-charts">
                                                <div class="progress">
                                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <div class="progress_sold_av">
                                                    <p class="start-sold">$00.00</p>
                                                    <p class="sold-av">$8500.00 <br> <span>OUR GOAL</span></p>
                                                </div>
                                            </div>
                                            <!-- End Single Progress Charts -->
                                        </div>
                                    </div>
                                </div>
                                <div class="christian-donate-box">
                                    <div class="donate-btn">
                                        <a href="#" class="btn donate-btn">Donate Now</a>
                                    </div>

                                    <div class="social-share">
                                        <div class="share-title">
                                            <p>Share now</p>
                                        </div>
                                        <ul class="social-share-icon">
                                            <li><a href="#"><i class="flaticon-facebook-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="donation-image mt-30">
                            <img src="images/donation/christian-donate-02.png" class="img-fluid" alt="Donation Image">
                        </div>
                        <div class="donation-content mt-30">

                            <div class="progress-wrap-muslim">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="progress-bar--two">

                                            <div class="progress_sold_target">
                                                <p class="start-sold">Total Collection $5933.00</p>
                                                <p class="sold-av">Last Donte 5m ago</p>
                                            </div>

                                            <!-- Start Single Progress Charts -->
                                            <div class="progress-charts">
                                                <div class="progress">
                                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <div class="progress_sold_av">
                                                    <p class="start-sold">$00.00</p>
                                                    <p class="sold-av">$8500.00 <br> <span>OUR GOAL</span></p>
                                                </div>
                                            </div>
                                            <!-- End Single Progress Charts -->
                                        </div>
                                    </div>
                                </div>
                                <div class="christian-donate-box">
                                    <div class="donate-btn">
                                        <a href="#" class="btn donate-btn">Donate Now</a>
                                    </div>

                                    <div class="social-share">
                                        <div class="share-title">
                                            <p>Share now</p>
                                        </div>
                                        <ul class="social-share-icon">
                                            <li><a href="#"><i class="flaticon-facebook-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ======== Donation Area End ========== -->

        <!-- ======== Others Activities Area Start ========== -->
        <div class="others-activities-area section-space--pb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center">
                            <h3 class="section-title center-style">Others Activities</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Activities Start -->
                        <div class="single-activities-wrap">
                            <a href="#" class="activities-imgaes">
                                <img src="images/activities/christian-activities-01.png" class="img-fluid" alt="">
                            </a>
                            <div class="activities-content text-center">
                                <div class="widget-metadata"><span>South Temple</span></div>
                                <a href="#">
                                    <h4 class="activities-title">Spiritual Service</h4>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <!--// Single Activities End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Activities Start -->
                        <div class="single-activities-wrap">
                            <a href="#" class="activities-imgaes">
                                <img src="images/activities/christian-activities-02.png" class="img-fluid" alt="">
                            </a>
                            <div class="activities-content text-center">
                                <div class="widget-metadata"><span>South Temple</span></div>
                                <a href="#">
                                    <h4 class="activities-title">Spiritual Service</h4>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <!--// Single Activities End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Activities Start -->
                        <div class="single-activities-wrap">
                            <a href="#" class="activities-imgaes">
                                <img src="images/activities/christian-activities-03.png" class="img-fluid" alt="">
                            </a>
                            <div class="activities-content text-center">
                                <div class="widget-metadata"><span>South Temple</span></div>
                                <a href="#">
                                    <h4 class="activities-title">Spiritual Service</h4>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <!--// Single Activities End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ======== Others Activities Area End ========== -->


        <!-- ======== Upcoming Event Area Start ========== -->
        <div class="upcoming-event-area section-space--pb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center">
                            <h3 class="section-title center-style">Upcoming Event</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Activities Start -->
                        <div class="single-activities-wrap">
                            <a href="#" class="activities-imgaes">
                                <img src="images/activities/christian-event-01.png" class="img-fluid" alt="">
                            </a>
                            <div class="activities-content text-center">
                                {{-- <div class="widget-metadata"><span>Time : 09:30 am to 12:00 pm</span></div> --}}
                                <a href="#">
                                    <h4 class="activities-title">Bhagwan Parshuram Temple</h4>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="buy-ticket">
                                    {{-- <a href="#">BUY TICKET</a> --}}
                                </div>
                            </div>
                        </div>
                        <!--// Single Activities End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Activities Start -->
                        <div class="single-activities-wrap">
                            <a href="#" class="activities-imgaes">
                                <img src="images/activities/christian-event-02.png" class="img-fluid" alt="">
                            </a>
                            <div class="activities-content text-center">
                                {{-- <div class="widget-metadata"><span>Time : 09:30 am to 12:00 pm</span></div> --}}
                                <a href="#">
                                    <h4 class="activities-title">MAA RENUKA HOSTEL.</h4>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="buy-ticket">
                                    {{-- <a href="#">FREE</a> --}}
                                </div>
                            </div>
                        </div>
                        <!--// Single Activities End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Activities Start -->
                        <div class="single-activities-wrap">
                            <a href="#" class="activities-imgaes">
                                <img src="images/activities/christian-event-03.png" class="img-fluid" alt="">
                            </a>
                            <div class="activities-content text-center">
                                {{-- <div class="widget-metadata"><span>Time : 09:30 am to 12:00 pm</span></div> --}}
                                <a href="#">
                                    <h4 class="activities-title"> Braham Rishi Jagmdagni Vaidik Research and Cultural Center</h4>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="buy-ticket">
                                    {{-- <a href="#">FREE</a> --}}
                                </div>
                            </div>
                        </div>
                        <!--// Single Activities End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ======== Upcoming Event Area End ========== -->




    </div>



    <!--========== Footer Area Start ==========-->
    <footer class="footer-area bg-footer">
        <div class="footer-top section-space--ptb_80 section-pb text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget-footer mt-30">
                            <div class="footer-title">
                                <h6>Address</h6>
                            </div>
                            <div class="footer-contents">
                                <ul>
                                    <li>A-2,Suraj Park,Opp.Badli Industrial Area Sector-18.Rohini,Delhi-110042 India</li>
                                    <li> +91-9310193939</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget-footer mt-30">
                            <div class="footer-title">
                                <h6>Related Links</h6>
                            </div>
                            <div class="footer-contents">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="events.html">Event</a></li>
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="causes.html">Causes</a></li>
                                    <li><a href="{{url('/contact-us')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        {{-- <div class="widget-footer mt-30">
                            <div class="footer-title">
                                <h6>Information</h6>
                            </div>
                            <div class="footer-contents">
                                <ul>
                                    <li>Sun Rise: 6:00 am</li>
                                    <li>Sun Sat: 5:50 pm</li>
                                    <li>Start Time: 9:00 am</li>
                                    <li>End Time: 11.00 pm</li>
                                    <li>Lunch: 01:30 pm</li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget-footer mt-30">
                            <div class="footer-title">
                                <h6>Related Links</h6>
                            </div>
                            <div style="100px" class="footer-logo mb-15">
                                <a href="index.html"><img style="height: 100px" src="images/boi_main_logo.jpeg" alt=""></a>
                            </div>
                            <div class="footer-contents">
                                <p> Subscribe to our Newsletter & stay update. </p>
                                <div class="newsletter-box">
                                    <input type="text" placeholder="Enter your mail address">
                                    <button><i class="flaticon-paper-plane"></i></button>
                                </div>

                                <ul class="footer-social-share mt-20">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-pinterest-social-logo"></i></a></li>
                                    <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right-box">
                            <p class="text-white">Copyright &copy; 2020 EGS Solution
                                 <span>All Right Reserved</span>.</p>
                            <p class=" text-white"><a href="#">Privacy policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--==========// Footer Area End ==========-->




    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top flaticon-up-arrow"></i>
        <i class="arrow-bottom flaticon-up-arrow"></i>
    </a>
    <!--====================  End of scroll top  ====================-->


    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo/logo.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-right">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html"><span>Home 1</span></a></li>
                                <li><a href="index-2.html"><span>Home 2</span></a></li>
                                <li><a href="index-3.html"><span>Home 3</span></a></li>
                                <li><a href="index-4.html"><span>Home 4</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="about-us.html">about</a>
                        </li>
                        <li class="has-children">
                            <a href="events.html">Evnets</a>
                        </li>
                        <li class="has-children">
                            <a href="service.html">Services</a>
                        </li>

                        <li class="has-children">
                            <a href="causes.html">Causes</a>
                        </li>

                        <li class="has-children">
                            <a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="gallery.html"><span>Gallery</span></a></li>
                                <li><a href="mission-and-vision.html"><span>Mission & Vision</span></a></li>
                                <li><a href="causes-details.html"><span>Causes Details</span></a></li>
                                <li><a href="events-details.html"><span>Events Details</span></a></li>
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="{{url('/contact-us')}}">Contact</a>
                        </li>



                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->





    <!-- JS
    ============================================ -->

    <!-- Modernizer JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="js/vendor/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/vendor/bootstrap.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="js/plugins/swiper.min.js"></script>

    <!-- Waypoints JS -->
    <script src="js/plugins/waypoints.min.js"></script>

    <!-- Counterup JS -->
    <script src="js/plugins/counterup.min.js"></script>

    <!-- Magnific Popup JS -->
    <script src="js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- wow JS -->
    <script src="js/plugins/wow.min.js"></script>

    <!-- Ajax mail JS -->
    <script src="js/plugins/ajax.mail.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
    <script src="js/plugins/plugins.min.js"></script>
    -->

    <!-- Main JS -->
    <script src="js/main.js"></script>


</body>
</html>
