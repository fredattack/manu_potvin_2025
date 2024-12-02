@extends('Frontend.Layouts.app')

@section('content')
    <header class="header--sticky header-one ">
        <div class="header-top header-top-one bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:webmaster@example.com"><i class="fal fa-envelope"></i> info@finbiz.com</a>
                            </div>
                            <div class="working-time">
                                <p><i class="fal fa-clock"></i> Working: 8.00am - 5.00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="right">
                            <ul class="top-nav">
                                <li><a href="{{ route('aboutPage') }}">About</a></li>
                                <li><a href="{{ route('blogPage') }}">News</a></li>
                                <li><a href="{{ route('contactPage') }}">Contact</a></li>
                            </ul>
                            <ul class="social-wrapper-one">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-one bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="thumbnail">
                            <a href ="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/logo-1.svg') }}" alt="finbiz-logo">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="main-header">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Home</a>
                                        <ul class="submenu menu-link1">
                                            <li class="menu-item">
                                                <a class="tag" href="#">Multipages</a>
                                                <ul>
                                                    <li><a href="{{ route('home') }}">Main Home</a></li>
                                                    <li><a href="{{ route('consulting') }}">Consulting Home</a></li>
                                                    <li><a href="{{ route('corporate') }}">Corporate Home</a></li>
                                                    <li><a href="{{ route('insurance') }}">Insurance Home</a></li>
                                                    <li><a href="{{ route('marketing') }}">Marketing Home</a></li>
                                                    <li><a href="{{ route('finance') }}">Home finance</a></li>
                                                    <li><a href="{{ route('humanResource') }}">Human Resources</a></li>
                                                    <li><a href="{{ route('itsolution') }}">IT Solutions</a></li>
                                                    <li><a href="{{ route('modernagency') }}">Modern Agency</a></li>
                                                    <li><a href="{{ route('stratupAgency') }}">Startup Agency</a></li>
                                                    <li><a href="{{ route('brandingagency') }}">Branding-Agency</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Onepages</a>
                                                <ul>
                                                    <li><a href="{{ route('home') }}">Main Home</a></li>
                                                    <li><a href="{{ route('consulting') }}">Consulting Home</a></li>
                                                    <li><a href="{{ route('corporate') }}">Corporate Home</a></li>
                                                    <li><a href="{{ route('insurance') }}">Insurance Home</a></li>
                                                    <li><a href="{{ route('marketing') }}">Marketing Home</a></li>
                                                    <li><a href="{{ route('finance') }}">Finance Home</a></li>
                                                    <li><a href="{{ route('humanResource') }}">Human resource</a></li>
                                                    <li><a href="{{ route('itsolution') }}">IT Solutions</a></li>
                                                    <li><a href="{{ route('modernagency') }}">Modern Agency</a></li>
                                                    <li><a href="{{ route('stratupAgency') }}">Startup Agency</a></li>
                                                    <li><a href="{{ route('brandingagency') }}">Branding-Agency</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Services</a>
                                        <ul class="submenu menu-link3">
                                            <li class="sub-droupdown">
                                                <a class="sub-menu-link" href="#">Our Service</a>
                                                <ul class="submenu third-lvl">
                                                    <li><a href ="{{ route('ourservicePage') }}">Service 1</a></li>
                                                    <li><a href ="{{ route('service2Page') }}">Service 2</a></li>
                                                    <li><a href ="{{ route('service3Page') }}">Service 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href ="{{ route('serviceDetailsPage') }}">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Pages</a>
                                        <ul class="submenu menu-link">
                                            <li class="menu-item">
                                                <a class="tag" href="#">Pages</a>
                                                <ul>
                                                    <li><a href ="{{ route('appoitment') }}">Appoinment</a></li>

                                                    <li><a href="{{ route('aboutPage') }}">About Us</a></li>
                                                    <li><a href="{{ route('pricePlans') }}">Price Plans</a></li>
                                                    <li><a href ="{{ route('ourservicePage') }}">Our Services</a></li>
                                                    <li><a href="{{ route('testimonialStyle') }}">Testimonial</a></li>
                                                    <li><a href="{{ route('errorPage') }}">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Portfolio</a>
                                                <ul>
                                                    <li><a href="{{ route('portfolioStyle1') }}">Portfolio Style 1</a></li>
                                                    <li><a href="{{ route('portfolioStyle2') }}">Portfolio Style 2</a>
                                                    </li>
                                                    <li><a href="{{ route('portfolioStyle3') }}">Portfolio Style 3</a>
                                                    </li>
                                                    <li><a href="{{ route('portfolioStyle4') }}">Portfolio Style 4</a>
                                                    </li>
                                                    <li><a href="{{ route('portfolioStyle5') }}">Portfolio Style 5</a>
                                                    </li>
                                                    <li><a href="{{ route('portfolioDetails') }}">Portfolio Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a class="tag" href="#">Our Teams</a>
                                                <ul>
                                                    <li><a href="{{ route('teamStyle1') }}">Team Style 1</a></li>
                                                    <li><a href="{{ route('teamStyle2') }}">Team Style 2</a></li>
                                                    <li><a href="{{ route('teamStyle3') }}">Team Style 3</a></li>
                                                    <li><a href="{{ route('teamStyle4') }}">Team Style 4</a></li>
                                                    <li><a href="{{ route('teamStyle5') }}">Team Style 5</a></li>
                                                    <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Blog</a>
                                        <ul class="submenu">
                                            <li><a href ="{{ route('blogPage') }}">Blog List</a></li>
                                            <li><a href ="{{ route('blogGridPage') }}">Blog Grid</a></li>
                                            <li><a href ="{{ route('blogDetailsPage') }}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Elements</a>
                                        <ul class="submenu menu-link2">
                                            <li class="menu-item">
                                                <ul>
                                                    <li><a href="{{ route('accordianPage') }}">Accordion</a></li>
                                                    <li><a href="{{ route('addressBox') }}">Address Box</a></li>
                                                    <li><a href="{{ route('buttonPage') }}">Button</a></li>
                                                    <li><a href ="{{ route('blogGridPage') }}">Blog Grid</a></li>
                                                    <li><a href="{{ route('blogSlider') }}">Blog Slider</a></li>
                                                    <li><a href="{{ route('blogQuote') }}">Blog Quote</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <ul>
                                                    <li><a href="{{ route('headingPage') }}">Heading</a></li>
                                                    <li><a href="{{ route('callToA') }}">Call To Action</a></li>
                                                    <li><a href="{{ route('contactForm') }}">Contact Form</a></li>
                                                    <li><a href="{{ route('counterUp') }}">Counter Up</a></li>
                                                    <li><a href="{{ route('brandPage') }}">Brand Logo</a></li>
                                                    <li><a href="{{ route('videoAddon') }}">Video Addon</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <ul>
                                                    <li><a href="{{ route('PricingPage') }}">Pricing Table</a></li>
                                                    <li><a href="{{ route('typoGraphy') }}">Typography</a></li>
                                                    <li><a href="{{ route('tabAddon') }}">Tab Addon</a></li>
                                                    <li><a href="{{ route('progressBar') }}">Progress Bar</a></li>
                                                    <li><a href="{{ route('testimonialPage') }}">Testimonial</a></li>
                                                    <li><a href="{{ route('workingProgress') }}">Working Process</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="nav-item" href="{{ route('contactPage') }}">Contact</a></li>
                                </ul>
                            </nav>

                            <div class="button-area">
                                <button id="search" class="rts-btn btn-primary-alta"><i
                                        class="far fa-search"></i></button>
                                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get
                                    Quote</a>
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}"
                                        alt="Menu-icon">
                                    <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}"
                                        alt="Menu-icon">
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End header area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="{{ route('home') }}"><img class="logo"
                    src="{{ asset('assets/images/logo/logo-1.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-2" href="{{ route('home') }}"><img class="logo"
                    src="{{ asset('assets/images/logo/logo-4.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-3" href="{{ route('home') }}"><img class="logo"
                    src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-4" href="{{ route('home') }}"><img class="logo"
                    src="{{ asset('assets/images/logo/logo-5.svg') }}" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">+8801234566789</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">example@gmail.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.webexample.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">13/A, New Pro State, NYC</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">

                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Home</a>
                            <ul class="submenu">
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Homepages</a>
                                        <li class="mobile-menu-link"><a href ="{{ route('home') }}">Main Home</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('consulting') }}">Consulting
                                                Home</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('corporate') }}">Corporate
                                                Home</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('insurance') }}">Insurance
                                                Home</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('marketing') }}">Marketing
                                                Home</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('finance') }}">Finance Home</a>
                                        </li>
                                        <li class="mobile-menu-link"><a href ="{{ route('humanResource') }}">Human
                                                Resources</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('itsolution') }}">IT
                                                Solutions</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('modernagency') }}">Modern
                                                Agency</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('stratupAgency') }}">Startup
                                                Agency</a></li>
                                        <li class="mobile-menu-link"><a
                                                href="{{ route('brandingagency') }}">Branding-Agency</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Onepages</a>
                                        <li class="mobile-menu-link"><a href ="{{ route('home') }}">Main Home
                                                Onepage</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('consulting') }}">Consulting
                                                Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('corporate') }}">Corporate Home
                                                Onepage</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('insurance') }}">Insurance Home
                                                Onepage</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('marketing') }}">Marketing Home
                                                Onepage</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('finance') }}">Finance Home
                                                Onepage</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('humanResource') }}">Human
                                                Resources Onepage</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('itsolution') }}">IT Solutions
                                                Onepage</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('modernagency') }}">Modern
                                                Agency</a></li>
                                        <li class="mobile-menu-link"><a href ="{{ route('stratupAgency') }}">Startup
                                                Agency</a></li>
                                        <li class="mobile-menu-link"><a
                                                href ="{{ route('brandingagency') }}">Branding-Agency</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('aboutPage') }}">About Us</a></li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Services</a>
                            <ul class="submenu">
                                <li class="has-droupdown sub-droupdown">
                                    <a href="#">Our Service</a>
                                    <ul class="submenu third-lvl mobile-menu">
                                        <li><a href ="{{ route('ourservicePage') }}">Service 1</a></li>
                                        <li><a href ="{{ route('service2Page') }}">Service 2</a></li>
                                        <li><a href ="{{ route('service3Page') }}">Service 3</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-link"><a href ="{{ route('serviceDetailsPage') }}">Service
                                        Details</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Pages</a>
                            <ul class="submenu">
                                <li class="mobile-menu-link"><a href="{{ route('portfolioStyle1') }}">Project</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('portfolioDetails') }}">Project
                                        Details</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('teamStyle1') }}">Team</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                <li class="mobile-menu-link"><a href ="{{ route('appoitment') }}">appoinment</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('pricePlans') }}">Price Plan</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('errorPage') }}">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Blog</a>
                            <ul class="submenu">
                                <li class="mobile-menu-link"><a href ="{{ route('blogPage') }}">Blog List</a></li>
                                <li class="mobile-menu-link"><a href ="{{ route('blogGridPage') }}">Blog Grid</a></li>
                                <li class="mobile-menu-link"><a href ="{{ route('blogDetailsPage') }}">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item"><a class="menu-link"
                                href="{{ route('contactPage') }}">Contact</a></li>
                    </ul>
                </nav>

                <div class="social-wrapper-two menu mobile-menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>

    <div id="anywhere-home">
    </div>
    <!-- ENd Header Area -->
    @yield('element-content')

    <!-- rts footer area start -->
    <div class="rts-footer-area footer-one rts-section-gapTop bg-footer-one">
        <div class="container bg-shape-f1">
            <!-- footer call to action area -->
            <div class="row">
                <div class="col-12">
                    <div class="rts-cta-wrapper">
                        <div class="background-cta">
                            <div class="row">
                                <!-- cta-left -->
                                <div class="col-lg-6">
                                    <div class="cta-left-wrapepr">
                                        <p class="cta-disc">
                                            Latest Business Ideas
                                        </p>
                                        <h3 class="title">Sign Up Newsletter</h3>
                                    </div>
                                </div>
                                <!-- cta left end -->
                                <div class="col-lg-6">
                                    <!-- cta right -->
                                    <form class="cta-input-arae">
                                        <input type="email" name="email" placeholder="Enter Email Address" required>
                                        <button type="submit" class="rts-btn btn-primary">Subscribe Now</button>
                                    </form>
                                    <!-- cta right End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer call to action area End -->
            <!-- rts footer area -->
            <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Quick Links</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner">
                            <ul class="links">
                                <li><a href="#"><i class="far fa-arrow-right"></i> Forum Support</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Help & FAQ</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Pricing & Plans</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Cookie Policy</a></li>
                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="#"><i class="far fa-arrow-right"></i> About Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> My Account</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i>Our Company</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i>Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer mid area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized mid-bg">
                        <div class="wized-title">
                            <h5 class="title">Opening Hours</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day">Week Days</p>
                                <p class="time">09.00 - 24:00</p>
                            </div>
                            <div class="single-opening">
                                <p class="day">Saturday</p>
                                <p class="time">08:00 - 03.00</p>
                            </div>
                            <div class="single-opening mb--30 mb_sm--10">
                                <p class="day">Sunday</p>
                                <p class="time">Day Off</p>
                            </div>
                            <a href="#" class="rts-btn btn-primary contact-us">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->

                <!-- footer end area post -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized margin-left-65">
                        <div class="wized-title">
                            <h5 class="title">Popular Updates</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="post-wrapper">
                            <!-- single post -->
                            <div class="single-footer-post mb--30">
                                <div class="left-thumbnail">
                                    <img src="assets/images/footer/post/01.png" alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                    <a href="{{ route('blogDetailsPage') }}">
                                        <h6 class="title">Best Business Ideas For
                                            Getting Solution</h6>
                                    </a>
                                    <a class="red-more" href="{{ route('blogDetailsPage') }}">Read More<i
                                            class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single post End -->
                            <!-- single post -->
                            <div class="single-footer-post">
                                <div class="left-thumbnail">
                                    <img src="assets/images/footer/post/02.png" alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                    <a href="{{ route('blogDetailsPage') }}">
                                        <h6 class="title">Best Business Ideas For
                                            Getting Solution</h6>
                                    </a>
                                    <a class="red-more" href="{{ route('blogDetailsPage') }}">Read More<i
                                            class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single post End -->
                        </div>
                    </div>
                </div>
                <!-- footer end area post end-->
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p>FINBIZ - Copyright 2022. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
    <!-- rts footer area end -->
    <!-- ENd Header Area -->
@endsection
