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
                                <a href="{{url('/')}}"><img style="width: 130px;"  src="images/boi_main_logo.jpeg" alt=""></a>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header__navigation menu-style-three d-none d-lg-block">
                                <nav class="navigation-menu">
                                    <ul>
                                        <li class="has-children has-children--multilevel-submenu active">
                                            <a href="{{url('/')}}"><span>Home</span></a>
                                            {{-- <ul class="submenu">
                                                <li class="active"><a href="{{url('/')}}"><span>Home One</span></a></li>
                                                <li><a href="index-2.html"><span>Home Two</span></a></li>
                                                <li><a href="index-3.html"><span>Home Three</span></a></li>
                                                <li><a href="index-4.html"><span>Home Four</span></a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="has-children">
                                            <a href="{{url('/about-us')}}"><span>About</span></a>
                                        </li>
                                        <li class="has-children">
                                            <a href="{{url('/events')}}"><span>Event</span></a>
                                        </li>
                                        {{-- <li class="has-children has-children--multilevel-submenu"> --}}
                                            {{-- <a href="service.html"><span>Services</span></a> --}}
                                            <!-- <ul class="submenu">
                                                <li><a href="it-services.html"><span>IT Services</span></a></li>
                                            </ul> -->
                                        {{-- </li> --}}

                                        <li class="has-children"><a href="causes.html"><span>Causes</span></a></li>
                                        {{-- <li class="has-children has-children--multilevel-submenu">
                                            <a href="#"><span>Pages</span></a>
                                            <ul class="submenu">
                                                <li><a href="donation.html"><span>Donation</span></a></li>
                                                <li><a href="gallery.html"><span>Gallery</span></a></li>
                                                <li><a href="mission-and-vision.html"><span>Mission & Vision</span></a></li>
                                                <li><a href="causes-details.html"><span>Causes Details</span></a></li>
                                                <li><a href="events-details.html"><span>Events Details</span></a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="has-children">
                                            <a href="contact-us.html"><span>Contact</span></a>
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






    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area--bg-two bg-overlay-black-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="breadcrumb-title text-white">Events</h3>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Events</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->








    <div class="site-wrapper-reveal">


        <!-- ======== Events Area Start ========== -->
        <div class="events-area section-space--pb_120 section-space--pt_90">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Events Wrap Start -->
                        <div class="single-event-wrap mt-40">
                            <div class="event-image">
                                <a href="events-details.html"><img src="images/events/event-01.png" class="img-fluid" alt="Event Image"></a>
                            </div>
                            <div class="event-content">
                                <div class="content-title">
                                    <a href="events-details.html">
                                        <h4 class="mb-15">Education for all rural children.</h4>
                                    </a>
                                    <div class="event-date"><span>3 Feb 2020 </span> <span>@09.00am to 01.00pm</span></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Ipsum has been standard.</p>
                                </div>
                                {{-- <div class="ticket-button-box mt-20">
                                    <a href="#" class="btn ticket-btn">Buy Ticket</a>
                                </div> --}}
                            </div>
                        </div>
                        <!--// Single Events Wrap End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Events Wrap Start -->
                        <div class="single-event-wrap mt-40">
                            <div class="event-image">
                                <a href="events-details.html">
                                    <img src="images/events/event-02.png" class="img-fluid" alt="Event Image">
                                </a>
                            </div>
                            <div class="event-content">
                                <div class="content-title">
                                    <a href="events-details.html">
                                        <h4 class="mb-15">Ensure child safety & health</h4>
                                    </a>
                                    <div class="event-date"><span>3 Feb 2020 </span> <span>@09.00am to 01.00pm</span></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Ipsum has been standard.</p>
                                </div>
                                {{-- <div class="ticket-button-box mt-20">
                                    <a href="#" class="btn ticket-btn">Buy Ticket</a>
                                </div> --}}
                            </div>
                        </div>
                        <!--// Single Events Wrap End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Events Wrap Start -->
                        <div class="single-event-wrap mt-40">
                            <div class="event-image">
                                <a href="events-details.html">
                                    <img src="images/events/event-03.png" class="img-fluid" alt="Event Image">
                                </a>
                            </div>
                            <div class="event-content">
                                <div class="content-title">
                                    <a href="events-details.html">
                                        <h4 class="mb-15">Reconstruct or new construct Temple</h4>
                                    </a>
                                    <div class="event-date"><span>3 Feb 2020 </span> <span>@09.00am to 01.00pm</span></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Ipsum has been standard.</p>
                                </div>
                                {{-- <div class="ticket-button-box mt-20">
                                    <a href="#" class="btn ticket-btn">Buy Ticket</a>
                                </div> --}}
                            </div>
                        </div>
                        <!--// Single Events Wrap End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Events Wrap Start -->
                        <div class="single-event-wrap mt-40">
                            <div class="event-image">
                                <a href="events-details.html">
                                    <img src="images/events/event-04.png" class="img-fluid" alt="Event Image">
                                </a>
                            </div>
                            <div class="event-content">
                                <div class="content-title">
                                    <a href="events-details.html">
                                        <h4 class="mb-15">Education for all rural children.</h4>
                                    </a>
                                    <div class="event-date"><span>3 Feb 2020 </span> <span>@09.00am to 01.00pm</span></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Ipsum has been standard.</p>
                                </div>
                                {{-- <div class="ticket-button-box mt-20">
                                    <a href="#" class="btn ticket-btn">Buy Ticket</a>
                                </div> --}}
                            </div>
                        </div>
                        <!--// Single Events Wrap End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Events Wrap Start -->
                        <div class="single-event-wrap mt-40">
                            <div class="event-image">
                                <a href="events-details.html">
                                    <img src="images/events/event-05.png" class="img-fluid" alt="Event Image">
                                </a>
                            </div>
                            <div class="event-content">
                                <div class="content-title">
                                    <a href="events-details.html">
                                        <h4 class="mb-15">Education for all rural children.</h4>
                                    </a>
                                    <div class="event-date"><span>3 Feb 2020 </span> <span>@09.00am to 01.00pm</span></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Ipsum has been standard.</p>
                                </div>
                                {{-- <div class="ticket-button-box mt-20">
                                    <a href="#" class="btn ticket-btn">Buy Ticket</a>
                                </div> --}}
                            </div>
                        </div>
                        <!--// Single Events Wrap End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Events Wrap Start -->
                        <div class="single-event-wrap mt-40">
                            <div class="event-image">
                                <a href="events-details.html">
                                    <img src="images/events/event-06.png" class="img-fluid" alt="Event Image">
                                </a>
                            </div>
                            <div class="event-content">
                                <div class="content-title">
                                    <a href="events-details.html">
                                        <h4 class="mb-15">Child Quran Learning for children.</h4>
                                    </a>
                                    <div class="event-date"><span>3 Feb 2020 </span> <span>@09.00am to 01.00pm</span></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Ipsum has been standard.</p>
                                </div>
                                {{-- <div class="ticket-button-box mt-20">
                                    <a href="#" class="btn ticket-btn">Buy Ticket</a>
                                </div> --}}
                            </div>
                        </div>
                        <!--// Single Events Wrap End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Events Wrap Start -->
                        <div class="single-event-wrap mt-40">
                            <div class="event-image">
                                <a href="events-details.html">
                                    <img src="images/events/event-07.png" class="img-fluid" alt="Event Image">
                                </a>
                            </div>
                            <div class="event-content">
                                <div class="content-title">
                                    <a href="events-details.html">
                                        <h4 class="mb-15">Education for all rural children.</h4>
                                    </a>
                                    <div class="event-date"><span>3 Feb 2020 </span> <span>@09.00am to 01.00pm</span></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Ipsum has been standard.</p>
                                </div>
                                {{-- <div class="ticket-button-box mt-20">
                                    <a href="#" class="btn ticket-btn">Buy Ticket</a>
                                </div> --}}
                            </div>
                        </div>
                        <!--// Single Events Wrap End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Events Wrap Start -->
                        <div class="single-event-wrap mt-40">
                            <div class="event-image">
                                <a href="events-details.html">
                                    <img src="images/events/event-08.png" class="img-fluid" alt="Event Image">
                                </a>
                            </div>
                            <div class="event-content">
                                <div class="content-title">
                                    <a href="events-details.html">
                                        <h4 class="mb-15">Education for all rural children.</h4>
                                    </a>
                                    <div class="event-date"><span>3 Feb 2020 </span> <span>@09.00am to 01.00pm</span></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Ipsum has been standard.</p>
                                </div>
                                {{-- <div class="ticket-button-box mt-20">
                                    <a href="#" class="btn ticket-btn">Buy Ticket</a> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                        <!--// Single Events Wrap End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Events Wrap Start -->
                        <div class="single-event-wrap mt-40">
                            <div class="event-image">
                                <a href="events-details.html">
                                    <img src="images/events/event-09.png" class="img-fluid" alt="Event Image">
                                </a>
                            </div>
                            <div class="event-content">
                                <div class="content-title">
                                    <a href="events-details.html">
                                        <h4 class="mb-15">Education for all rural children.</h4>
                                    </a>
                                    <div class="event-date"><span>3 Feb 2020 </span> <span>@09.00am to 01.00pm</span></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Ipsum has been standard.</p>
                                </div>
                                {{-- <div class="ticket-button-box mt-20">
                                    <a href="#" class="btn ticket-btn">Buy Ticket</a>
                                </div> --}}
                            </div>
                        </div>
                        <!--// Single Events Wrap End -->
                    </div>

                </div>
            </div>
        </div>
        <!-- ======== Events Area End ========== -->

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
                                    <li>+91-9310193939</li>
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
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/about-us')}}">About</a></li>
                                    <li><a href="{{url('/events')}}">Event</a></li>
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
                                <a href="{{url('/')}}"><img style="height: 100px" src="images/boi_main_logo.jpeg" alt=""></a>
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
                                <a href="{{url('/')}}">
                                    <img  style="width: 130px;" src="images/boi_main_logo.jpeg" class="img-fluid" alt="">
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
                            <a href="{{url('/')}}">Home</a>

                        </li>
                        <li class="has-children">
                            <a href="{{url('/about-us')}}">about</a>
                        </li>
                        <li class="has-children">
                            <a href="{{url('/events')}}">Evnets</a>
                        </li>
                        {{-- <li class="has-children">
                            <a href="service.html">Services</a>
                        </li> --}}

                        <li class="has-children">
                            <a href="causes.html">Causes</a>
                        </li>

                        {{-- <li class="has-children">
                            <a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="gallery.html"><span>Gallery</span></a></li>
                                <li><a href="mission-and-vision.html"><span>Mission & Vision</span></a></li>
                                <li><a href="causes-details.html"><span>Causes Details</span></a></li>
                                <li><a href="events-details.html"><span>Events Details</span></a></li>
                            </ul>
                        </li> --}}

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
