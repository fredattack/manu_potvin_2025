@extends('Frontend.Layouts.appSecond')
@section('content')

    <body class="home-blue home-ten home-eleven onepage">

        <header class="header-two header--sticky header-nine">
            <div class="header-top">
                <div class="content">
                    <div class="left-header-top">
                        <p class="top-details">
                            Are you ready to grow up your business? <a href="#">Contact Us <i
                                    class="fal fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <div class="right-header-top">
                        <div class="working-time">
                            <i class="far fa-clock"></i>
                            <span>Working: 8.00am - 5.00pm</span>
                        </div>
                        <div class="ht-social">
                            <span>Visit Us:</span>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="content">
                    <div class="header-left">
                        <a class="thumbnail" href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo/logo-8.svg') }}" alt="">
                        </a>
                        <nav class="nav-main mainmenu-nav d-none d-xl-block">
                            <ul class="mainmenu">
                                <li><a href="#banner">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#about-us">About Us</a></li>
                                <li><a href="#projects">Projects</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#contacts-down">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <div class="call-area">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <path
                                        d="M14.2251 11.5362C13.7279 11.5914 13.3688 12.061 13.3965 12.5858C13.4517 13.083 13.8936 13.4697 14.4461 13.4144C14.9985 13.3592 15.5509 13.5249 15.9376 13.9116C16.352 14.3259 16.5177 14.8784 16.4624 15.4308C16.4072 15.9832 16.7939 16.4252 17.2911 16.4804C17.5949 16.508 17.8711 16.3975 18.0645 16.2042C18.2026 16.0661 18.3131 15.8451 18.3407 15.6518C18.4512 14.4917 18.0645 13.3868 17.2635 12.5858C16.4901 11.8124 15.3852 11.4257 14.2251 11.5362ZM13.866 7.80729C13.3136 7.86253 12.9545 8.3321 13.0098 8.82928C13.0374 9.35409 13.507 9.71317 14.0318 9.68554C15.7443 9.51982 17.3739 10.0999 18.5617 11.2876C19.7218 12.4477 20.3294 14.105 20.1637 15.8175C20.1085 16.3147 20.4675 16.7842 20.9923 16.8119C21.2962 16.8395 21.5448 16.7566 21.7381 16.5633C21.9038 16.3975 21.9867 16.2042 22.042 15.9832C22.2905 13.7459 21.5171 11.5362 19.9151 9.93414C18.3131 8.3321 16.131 7.58632 13.866 7.80729ZM13.507 4.07841C12.9821 4.10603 12.6231 4.57559 12.6507 5.1004C12.7059 5.59758 13.1479 5.98428 13.6727 5.95666C16.4901 5.68045 19.2522 6.61957 21.2409 8.60831C23.202 10.5694 24.1688 13.3592 23.8926 16.1766C23.865 16.7014 24.2517 17.1433 24.7488 17.1986C25.0527 17.2262 25.3289 17.1157 25.5222 16.9223C25.6603 16.7842 25.7432 16.5909 25.7708 16.3423C26.1299 13.0001 24.9698 9.68554 22.5668 7.28249C20.1361 4.85181 16.8768 3.74695 13.507 4.07841ZM10.3581 15.0165C10.662 14.7679 10.8001 14.2983 10.6343 13.9116L9.22564 10.6799C9.05991 10.238 8.56273 10.017 8.14841 10.0999L5.11006 10.818C4.69574 10.9009 4.3919 11.3152 4.3919 11.7571C4.3919 19.3254 10.5515 25.485 18.1197 25.485C18.5617 25.485 18.976 25.1811 19.0588 24.7668L19.777 21.7285C19.8599 21.3141 19.6389 20.817 19.197 20.6512L15.9653 19.2425C15.5786 19.0768 15.109 19.2149 14.8604 19.5187L13.5346 21.1208C11.4353 20.1264 9.75045 18.4415 8.75608 16.3423L10.3581 15.0165Z"
                                        fill="#0B4DF5" />
                                </svg>
                            </div>
                            <div class="number-area">
                                <span>Call us anytime</span>
                                <a href="tel:123-456-7890">
                                    <h6 class="call">+256 21458.2146</h6>
                                </a>
                            </div>
                        </div>
                        <a class="rts-btn btn-primary-2 menu-block-none" href="#">Book a Meeting</a>
                        <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20">
                            <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}" alt="Menu-icon">
                            <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}" alt="Menu-icon">
                        </button>
                    </div>
                </div>
            </div>
        </header>


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
                                            <li><a href="{{ route('main') }}">Main Home</a></li>
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
                                    <li class="mobile-menu-link"><a href="{{ route('serviceDetailsPage') }}">Service
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown menu-item">
                                <a class="menu-link" href="#">Pages</a>
                                <ul class="submenu">
                                    <li class="mobile-menu-link"><a href="{{ route('portfolioStyle1') }}">Project</a></li>
                                    <li class="mobile-menu-link"><a href="{{ route('portfolioDetails') }}">Project Details</a></li>
                                    <li class="mobile-menu-link"><a href="{{ route('teamStyle1') }}">Team</a></li>
                                    <li class="mobile-menu-link"><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                    <li class="mobile-menu-link"><a href ="{{ route('appoitment') }}">Appoinment</a></li>
                                    <li class="mobile-menu-link"><a href="{{ route('pricePlans') }}">Price Plan</a></li>
                                    <li class="mobile-menu-link"><a href="{{ route('errorPage') }}">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown menu-item">
                                <a class="menu-link" href="#">Blog</a>
                                <ul class="submenu">
                                    <li class="mobile-menu-link"><a href="{{ route('blogPage') }}">Blog List</a></li>
                                    <li class="mobile-menu-link"><a href="{{ route('blogGridPage') }}">Blog Grid</a></li>
                                    <li class="mobile-menu-link"><a href="{{ route('blogDetailsPage') }}">Blog Details</a></li>
                               
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
                    <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get
                        Quote</a>
                </div>
            </div>
            <!-- inner menu area desktop End -->
        </div>

        <div id="anywhere-home"></div>

        <!-- rts banner area start -->
        <div class="rts-banner-area-eleven rts-section-gap" id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-lg-1 order-md-2 order-sm-2 order-2">
                        <div class="banner-eleven-left-content">
                            <h1 class="title">We’re <br>
                                Magical <span>Branding </span> <br>
                                Agency.</h1>
                            <div class="button-area mt--80 mt_sm--40">
                                <a href="#" class="rts-btn btn-primary-11">Book a Meeting</a>
                                <a class="sign-up-u-btn" href="#">Sign up - its free</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-md-1 order-sm-1 order-1">
                        <div class="thumbnail-banner-11 pt--80">
                            <img src="{{ asset('assets/images/banner/banner-15.png') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts banner area end -->

        <!-- rts about area start -->
        <div class="rts-about-style-11 rts-section-gap bg-color--11" id="about-us">
            <div class="container-120">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-area-thumbnail-11 position-relative">
                            <img src="{{ asset('assets/images/about/05.jpg') }}" alt="image_about">
                            <a id="play-video" class="video-play-button" href="#">
                                <span></span>
                            </a>
                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl--60 pl_md--10 pl_sm--10 pt_md--50 pt_sm--50">
                        <div class="title-left-area-11">
                            <div class="pre-title-flex">
                                <span class="pre-title">why choose us?</span>
                            </div>
                            <h3 class="title">
                                Crafting Timeless Brands with Creativity, Precision, and Purpose....
                            </h3>
                        </div>
                        <div class="inner-content-about-11">
                            <p class="disc">
                                Nunc dolor faucibus elementum iaculis ultricies habitant pretium, neque. Et faucibus sem
                                felis sit vitae vel quis molestie.
                            </p>
                            <div class="check-about-11-flex">
                                <div class="check-area-about-11">
                                    <!-- single check -->
                                    <div class="signle-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p>24/7 Call Services Avilable</p>
                                    </div>
                                    <!-- single check end -->
                                    <!-- single check -->
                                    <div class="signle-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Great Skilled Consultant</p>
                                    </div>
                                    <!-- single check end -->
                                    <!-- single check -->
                                    <div class="signle-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Expert Team Members</p>
                                    </div>
                                    <!-- single check end -->
                                </div>
                                <div class="check-area-about-11">
                                    <!-- single check -->
                                    <div class="signle-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p>How to improve business</p>
                                    </div>
                                    <!-- single check end -->
                                    <!-- single check -->
                                    <div class="signle-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Business is the best plan</p>
                                    </div>
                                    <!-- single check end -->
                                    <!-- single check -->
                                    <div class="signle-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p> Services we provide</p>
                                    </div>
                                    <!-- single check end -->
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary-11">Book a Meeting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts about area end -->

        <!-- service area start -->
        <div class="service-area-start-11 rts-section-gap" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-center-area-11">
                            <div class="pre-title-flex">
                                <span class="pre-title">why choose us?</span>
                            </div>
                            <h3 class="title">
                                Why Choose Us?
                            </h3>
                            <p class="disc">
                                adjust your design through a wide range of theme options in the
                                development and instantly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt--30 g-5">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single service style0-11 -->
                        <div class="single-service-style-11">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="56"
                                    viewBox="0 0 62 56" fill="none">
                                    <path
                                        d="M30.8667 15.5261C32.8724 15.5261 34.7945 14.5297 36.2789 12.7214C37.6346 11.0699 38.4119 8.98693 38.4119 7.00465C38.4119 3.01133 35.1686 0 30.8667 0C26.5648 0 23.3215 3.00741 23.3215 7.00465C23.3215 8.98693 24.0988 11.0699 25.4545 12.7214C26.9389 14.531 28.861 15.5261 30.8667 15.5261ZM30.8667 2.15749C33.9707 2.15749 36.2232 4.19599 36.2232 7.00465C36.2232 10.5351 33.2929 13.3686 30.8667 13.3686C27.8993 13.3686 25.5102 9.88654 25.5102 7.00465C25.5102 4.20122 27.7626 2.15749 30.8667 2.15749Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M21.9379 25.8794L21.1699 36.6787C21.1597 36.82 21.178 36.9619 21.2235 37.0963C21.269 37.2306 21.341 37.3549 21.4352 37.4618C21.5294 37.5688 21.6441 37.6564 21.7727 37.7197C21.9013 37.783 22.0413 37.8207 22.1846 37.8306H22.2616C22.5384 37.8303 22.8049 37.7267 23.0074 37.5407C23.21 37.3546 23.3335 37.0999 23.3533 36.8277L24.1214 26.0376C24.1315 25.8963 24.1132 25.7544 24.0677 25.6201C24.0222 25.4857 23.9502 25.3615 23.856 25.2545C23.7618 25.1475 23.6471 25.0599 23.5185 24.9966C23.3899 24.9333 23.2499 24.8956 23.1066 24.8857C22.9632 24.8757 22.8192 24.8937 22.6829 24.9386C22.5466 24.9835 22.4206 25.0544 22.3121 25.1472C22.2035 25.2401 22.1146 25.3532 22.0505 25.4799C21.9863 25.6067 21.948 25.7446 21.9379 25.886V25.8794Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M45.7091 37.8293C46.006 37.8034 46.2804 37.6625 46.4721 37.4375C46.6638 37.2125 46.7572 36.9217 46.7318 36.629C46.7318 36.629 45.5751 28.4527 45.4053 25.7094C45.0909 20.7838 42.0386 16.8324 37.2698 16.1132C35.5931 15.8595 32.5474 15.6686 30.9556 15.6673C28.7826 15.7044 26.6131 15.8524 24.4556 16.1106C22.219 16.4124 20.1704 17.5071 18.6933 19.1899C17.1412 20.9564 16.4475 23.2146 16.3055 25.7147C16.1463 28.4606 15.0918 36.6407 15.0918 36.6407C15.074 36.7826 15.085 36.9264 15.1241 37.064C15.1632 37.2016 15.2297 37.3302 15.3196 37.4422C15.4096 37.5543 15.5212 37.6476 15.648 37.7168C15.7749 37.786 15.9144 37.8297 16.0585 37.8453C16.2026 37.8608 16.3484 37.8481 16.4874 37.8076C16.6265 37.7672 16.756 37.7 16.8685 37.6098C16.9809 37.5196 17.0741 37.4084 17.1425 37.2824C17.211 37.1564 17.2534 37.0183 17.2672 36.8761C17.2672 36.8761 18.3377 28.607 18.4903 25.8337C18.7078 21.9031 21.0677 18.744 24.7541 18.2498C26.8116 18.0034 28.8806 17.862 30.9529 17.8261C32.436 17.8261 35.3795 18.0118 36.9368 18.2471C38.6491 18.5026 40.2146 19.3465 41.3568 20.6295C42.5719 22.0051 43.0985 23.8527 43.2139 25.8402C43.3824 28.6175 44.5577 36.8879 44.5577 36.8879C44.6002 37.1562 44.7407 37.3999 44.9527 37.5732C45.1648 37.7466 45.4337 37.8377 45.7091 37.8293Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M38.595 24.8791C38.4509 24.8889 38.3102 24.9267 38.181 24.9903C38.0518 25.0539 37.9366 25.1421 37.8422 25.2498C37.7477 25.3575 37.6758 25.4826 37.6306 25.6178C37.5854 25.753 37.5678 25.8957 37.5789 26.0376L38.3482 36.8356C38.3674 37.1079 38.4905 37.3629 38.6929 37.5493C38.8952 37.7356 39.1617 37.8394 39.4386 37.8398H39.5169C39.8063 37.8193 40.0757 37.6866 40.2659 37.4706C40.4562 37.2547 40.5517 36.9731 40.5317 36.6878L39.7623 25.8886C39.753 25.7467 39.7155 25.608 39.6517 25.4805C39.588 25.3529 39.4994 25.239 39.391 25.1452C39.2826 25.0515 39.1565 24.9797 39.0199 24.9341C38.8833 24.8884 38.7389 24.8697 38.595 24.8791Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M37.8495 47.5969L43.1131 42.5392C43.2592 42.3987 43.3626 42.2207 43.4115 42.0253C43.4604 41.83 43.4529 41.625 43.3898 41.4337C43.3268 41.2423 43.2107 41.0721 43.0546 40.9423C42.8986 40.8126 42.7089 40.7285 42.5069 40.6994L35.2336 39.6534L31.981 33.1613C31.8906 32.9807 31.7508 32.8285 31.5773 32.7222C31.4039 32.6158 31.2036 32.5595 30.9993 32.5595C30.795 32.5595 30.5948 32.6158 30.4213 32.7222C30.2478 32.8285 30.108 32.9807 30.0177 33.1613L26.7651 39.6573L19.4918 40.7034C19.2898 40.7324 19.1001 40.8165 18.944 40.9463C18.788 41.076 18.6719 41.2462 18.6088 41.4376C18.5458 41.629 18.5383 41.8339 18.5872 42.0293C18.6361 42.2246 18.7395 42.4026 18.8856 42.5431L24.1492 47.6008L22.9076 54.7362C22.8724 54.9351 22.8947 55.1398 22.9717 55.3269C23.0487 55.514 23.1775 55.6761 23.3434 55.7946C23.5092 55.9132 23.7055 55.9834 23.9099 55.9974C24.1143 56.0114 24.3185 55.9686 24.4994 55.8738L30.9993 52.5029L37.4993 55.8738C37.6565 55.9549 37.8312 55.9975 38.0086 55.998C38.168 55.9978 38.3254 55.9633 38.4698 55.8969C38.6143 55.8306 38.7423 55.734 38.845 55.6138C38.9477 55.4937 39.0225 55.3529 39.0643 55.2014C39.1061 55.0498 39.1139 54.891 39.0871 54.7362L37.8495 47.5969ZM30.49 50.3297C29.2192 50.9678 25.4386 52.9448 25.4386 52.9448L26.403 47.3994C26.4329 47.2271 26.42 47.0502 26.3652 46.8839C26.3105 46.7177 26.2155 46.567 26.0886 46.4449L22.0016 42.5222L27.6499 41.7128C27.8254 41.6876 27.992 41.6207 28.1355 41.518C28.279 41.4153 28.395 41.2798 28.4737 41.1231L30.994 36.0772L33.5144 41.1231C33.5931 41.2798 33.7091 41.4153 33.8526 41.518C33.9961 41.6207 34.1627 41.6876 34.3382 41.7128L39.9865 42.5222L35.8995 46.4449C35.7725 46.567 35.6776 46.7177 35.6228 46.8839C35.5681 47.0502 35.5551 47.2271 35.5851 47.3994L36.5495 52.9448C36.5495 52.9448 32.7689 50.9652 31.4981 50.3297C31.3432 50.2473 31.17 50.2041 30.994 50.2041C30.818 50.2041 30.6448 50.2473 30.49 50.3297Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M61.0622 43.9788L55.7442 43.2165L53.3657 38.4674C53.2756 38.2867 53.136 38.1345 52.9626 38.0281C52.7892 37.9217 52.589 37.8652 52.3848 37.8652C52.1805 37.8652 51.9803 37.9217 51.8069 38.0281C51.6336 38.1345 51.4939 38.2867 51.4038 38.4674L49.0254 43.2165L43.7074 43.9788C43.5054 44.0078 43.3156 44.092 43.1596 44.2217C43.0035 44.3515 42.8874 44.5217 42.8244 44.713C42.7613 44.9044 42.7538 45.1094 42.8027 45.3047C42.8516 45.5001 42.955 45.6781 43.1011 45.8186L46.948 49.5164L46.0394 54.7362C46.0042 54.9351 46.0264 55.1398 46.1035 55.3269C46.1805 55.514 46.3093 55.6761 46.4752 55.7946C46.641 55.9132 46.8373 55.9834 47.0417 55.9974C47.246 56.0114 47.4503 55.9686 47.6312 55.8738L52.3867 53.409L57.1436 55.8738C57.3008 55.9549 57.4756 55.9975 57.653 55.998C57.8124 55.9978 57.9698 55.9633 58.1142 55.8969C58.2587 55.8306 58.3867 55.734 58.4894 55.6138C58.592 55.4937 58.6669 55.3529 58.7087 55.2014C58.7505 55.0498 58.7583 54.891 58.7315 54.7362L57.8228 49.5164L61.6697 45.8186C61.8158 45.6781 61.9192 45.5001 61.9681 45.3047C62.017 45.1094 62.0095 44.9044 61.9465 44.713C61.8834 44.5217 61.7673 44.3515 61.6113 44.2217C61.4552 44.092 61.2655 44.0078 61.0635 43.9788H61.0622ZM51.876 51.2358C51.0417 51.649 48.5717 52.9474 48.5717 52.9474L49.2031 49.3216C49.2331 49.1493 49.2201 48.9723 49.1654 48.8061C49.1106 48.6398 49.0157 48.4891 48.8887 48.367L46.2158 45.799L49.9088 45.2759C50.0845 45.2509 50.2514 45.1839 50.3949 45.081C50.5385 44.978 50.6544 44.842 50.7326 44.6849L52.3841 41.3872L54.0356 44.6849C54.1143 44.8419 54.2305 44.9777 54.3742 45.0807C54.518 45.1836 54.6849 45.2506 54.8607 45.2759L58.5524 45.799L55.8808 48.367C55.7537 48.489 55.6586 48.6396 55.6038 48.806C55.549 48.9723 55.5362 49.1492 55.5664 49.3216L56.2031 52.9474C56.2031 52.9474 53.7345 51.649 52.9001 51.2358C52.7428 51.1523 52.5668 51.1086 52.3881 51.1086C52.2093 51.1086 52.0334 51.1523 51.876 51.2358Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M18.2913 43.9788L12.9733 43.2165L10.5949 38.4674C10.5048 38.2867 10.3651 38.1345 10.1917 38.0281C10.0183 37.9217 9.81817 37.8652 9.61392 37.8652C9.40966 37.8652 9.20949 37.9217 9.0361 38.0281C8.86272 38.1345 8.72306 38.2867 8.63296 38.4674L6.25451 43.2165L0.936512 43.9788C0.734509 44.0078 0.544769 44.092 0.388734 44.2217C0.232699 44.3515 0.116589 44.5217 0.0535274 44.713C-0.00953457 44.9044 -0.0170351 45.1094 0.0318733 45.3047C0.0807816 45.5001 0.184149 45.6781 0.330294 45.8186L4.17719 49.5164L3.27516 54.7362C3.24002 54.9351 3.26223 55.1398 3.33927 55.3269C3.41631 55.514 3.54509 55.6761 3.71095 55.7946C3.87681 55.9132 4.07309 55.9834 4.27746 55.9974C4.48183 56.0114 4.68608 55.9686 4.86698 55.8738L9.62386 53.409L14.3794 55.8738C14.5366 55.9549 14.7114 55.9975 14.8888 55.998C15.0482 55.9978 15.2056 55.9633 15.35 55.8969C15.4944 55.8306 15.6225 55.734 15.7251 55.6138C15.8278 55.4937 15.9027 55.3529 15.9445 55.2014C15.9863 55.0498 15.9941 54.891 15.9673 54.7362L15.0586 49.5164L18.9055 45.8186C19.0516 45.6781 19.155 45.5001 19.2039 45.3047C19.2528 45.1094 19.2453 44.9044 19.1823 44.713C19.1192 44.5217 19.0031 44.3515 18.8471 44.2217C18.691 44.092 18.5013 44.0078 18.2993 43.9788H18.2913ZM9.11183 51.2358L5.80217 52.9474L6.43227 49.3216C6.46248 49.1492 6.44965 48.9723 6.39487 48.806C6.34009 48.6396 6.24502 48.489 6.11788 48.367L3.44628 45.799L7.13797 45.2759C7.31377 45.2506 7.48071 45.1836 7.62444 45.0807C7.76816 44.9777 7.88437 44.8419 7.96306 44.6849L9.61458 41.3872L11.2661 44.6849C11.3443 44.842 11.4602 44.978 11.6037 45.081C11.7473 45.1839 11.9141 45.2509 12.0899 45.2759L15.7829 45.799L13.1099 48.367C12.983 48.4891 12.8881 48.6398 12.8333 48.8061C12.7785 48.9723 12.7656 49.1493 12.7956 49.3216L13.427 52.9474L10.1226 51.2358C9.97049 51.1441 9.79559 51.0955 9.61723 51.0955C9.43887 51.0955 9.26397 51.1441 9.11183 51.2358Z"
                                        fill="#845CFF" />
                                </svg>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Team Expertise</h5>
                            </a>
                            <p class="disc">
                                A competent SEO consultant begins by conducting a thorough audi...
                            </p>
                            <a href="{{ route('serviceDetailsPage') }}">View More<i class="far fa-arrow-right"></i></a>
                        </div>
                        <!-- single service style0-11 end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single service style0-11 -->
                        <div class="single-service-style-11">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="56"
                                    viewBox="0 0 62 56" fill="none">
                                    <path
                                        d="M58.6524 28.7035C59.091 11.5205 49.1098 0 30.7997 0C12.5543 0 2.49513 11.468 2.94029 28.7053C0.958742 29.3469 -0.309711 31.3461 0.0657838 33.4382L2.00582 44.0427C2.42848 46.3407 4.63862 47.85 6.94501 47.4334L9.97002 46.8934C11.7635 46.573 12.9601 44.8752 12.6334 43.0932L10.3556 30.6423C10.0315 28.8708 8.31007 27.6899 6.52066 28.0071L4.85903 28.3038C4.62021 12.2993 14.0251 1.90201 30.7998 1.90201C47.5595 1.90201 56.9797 12.2839 56.7409 28.3035L55.0792 28.007C53.2866 27.689 51.5683 28.8706 51.2443 30.6422L48.9665 43.0929C48.6507 44.8153 49.7621 46.5149 51.5648 46.8753L50.7236 48.4339C49.7287 50.277 47.8003 51.46 45.691 51.5223L40.0949 51.6872C39.5724 50.3228 38.0073 49.3217 36.1397 49.3217C33.8473 49.3217 31.983 50.8197 31.983 52.6609C31.983 54.502 33.8475 56 36.1397 56C38.0281 56 39.6081 54.977 40.1126 53.5893L45.7484 53.4233C48.5445 53.3411 51.0998 51.7726 52.4179 49.3299L53.5481 47.2356L54.6525 47.4326C56.9681 47.8494 59.172 46.337 59.594 44.0414L61.534 33.438C61.5345 33.437 61.5345 33.4356 61.5345 33.4347C61.9095 31.3442 60.6386 29.3438 58.6524 28.7035ZM6.86103 29.8793C7.59686 29.746 8.32788 30.2301 8.46515 30.9812L10.7429 43.4319C10.8786 44.1756 10.3812 44.8876 9.62881 45.0214L6.602 45.5614C5.33896 45.7912 4.12849 44.9659 3.89605 43.7027L1.95661 33.1026C1.73235 31.8511 2.57478 30.647 3.83228 30.4201L6.86103 29.8793ZM36.1395 54.0981C34.928 54.0981 33.904 53.4402 33.904 52.661C33.904 51.8819 34.928 51.2238 36.1395 51.2238C37.3511 51.2238 38.3751 51.8818 38.3751 52.661C38.3751 53.44 37.3511 54.0981 36.1395 54.0981ZM59.6429 33.1024L57.7034 43.7018C57.4694 44.9754 56.2496 45.7905 54.995 45.5611L51.9711 45.022C51.2173 44.8873 50.7209 44.1753 50.8565 43.432L53.1343 30.9813C53.2553 30.3214 53.8383 29.8575 54.4932 29.8575C54.5927 29.8575 58.1026 30.5163 58.1993 30.554C59.2093 30.949 59.84 32.003 59.6429 33.1024Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M33.5626 43.6218L33.5813 43.4082C33.6789 42.369 34.3946 41.4816 35.4772 41.0814C35.8028 40.9507 36.0429 40.8559 36.2999 40.7433C37.3267 40.2786 38.4642 40.4058 39.2728 41.0748L39.4458 41.2174C39.8272 41.5317 40.3887 41.5072 40.7396 41.1589L43.2945 38.6291C43.6458 38.2813 43.6712 37.7254 43.3532 37.3475L43.2111 37.1789C42.5399 36.3774 42.4124 35.2435 42.8669 34.2418C43.0062 33.9544 43.1244 33.6674 43.2276 33.3827C43.6189 32.3453 44.5156 31.6405 45.5583 31.5438L45.7886 31.5248C46.2867 31.4834 46.6695 31.0716 46.6695 30.577V26.9918C46.6695 26.4973 46.2868 26.0854 45.7886 26.0441L45.5643 26.0255C44.5159 25.9271 43.6206 25.2221 43.2317 24.1988C43.1243 23.9011 43.0061 23.6142 42.8771 23.3499C42.4123 22.3255 42.5399 21.1916 43.2093 20.3925L43.3533 20.2217C43.6713 19.8437 43.6461 19.2879 43.2946 18.9401L40.7397 16.4103C40.3888 16.0625 39.8278 16.0384 39.446 16.3518L39.271 16.4958C38.4652 17.1626 37.3268 17.2899 36.2911 16.8228C36.0134 16.7001 35.7249 16.5785 35.4492 16.4768C34.3948 16.0877 33.679 15.2002 33.5823 14.1699L33.563 13.9415C33.5213 13.4484 33.1053 13.0694 32.6057 13.0694H28.9941C28.4945 13.0694 28.0785 13.4483 28.0367 13.9415L28.0184 14.1611C27.9209 15.2003 27.2051 16.0878 26.1522 16.4764C25.875 16.5785 25.5866 16.7003 25.3003 16.8265C24.2731 17.2904 23.1352 17.1631 22.3269 16.4944L22.1539 16.3518C21.7721 16.038 21.2121 16.0625 20.8602 16.4103L18.3053 18.9401C17.954 19.2879 17.9287 19.8438 18.2466 20.2217L18.3886 20.3904C19.0599 21.1918 19.1874 22.3257 18.7329 23.3274C18.5935 23.6145 18.4754 23.9014 18.3731 24.1846C17.9786 25.2233 17.0814 25.9292 16.0415 26.0253L15.8112 26.0443C15.3131 26.0857 14.9303 26.4975 14.9303 26.9921V30.5773C14.9303 31.0718 15.313 31.4837 15.8112 31.525L16.0321 31.5432C17.0842 31.6408 17.981 32.3456 18.3681 33.3704C18.4755 33.6676 18.5937 33.9547 18.7226 34.2193C19.1875 35.2437 19.0599 36.3776 18.3904 37.1767L18.2464 37.3475C17.9284 37.7255 17.9537 38.2813 18.3051 38.6291L20.8601 41.1589C21.2119 41.5072 21.7723 41.5322 22.1538 41.2174L22.3288 41.0734C23.136 40.4062 24.2749 40.2803 25.3096 40.7474C25.5625 40.8584 25.8065 40.9543 26.1506 41.0924C27.2051 41.4816 27.9208 42.369 28.018 43.403L28.0372 43.6217C28.0804 44.1129 28.496 44.4901 28.9941 44.4901H32.6057C33.1038 44.4902 33.5194 44.1132 33.5626 43.6218ZM29.8233 42.5882C29.4621 41.1014 28.3603 39.8787 26.8503 39.3215C26.5489 39.2004 26.3105 39.1061 26.098 39.0132C24.6018 38.3375 22.9455 38.4305 21.6313 39.2324L20.2493 37.8643C21.0518 36.5627 21.1466 34.9189 20.4645 33.4172C20.3543 33.1912 20.2613 32.9644 20.1723 32.717C19.601 31.2028 18.3627 30.1125 16.8514 29.7548V27.8152C18.3557 27.4594 19.5963 26.3674 20.1765 24.8396C20.2614 24.6046 20.3543 24.3785 20.4747 24.1292C21.1474 22.648 21.0521 21.0079 20.2486 19.7054L21.6308 18.3365C22.947 19.1389 24.6027 19.2331 26.0888 18.5604C26.3299 18.4547 26.5799 18.3478 26.8218 18.2591C28.358 17.6917 29.463 16.4662 29.8243 14.9715H31.7738C32.1331 16.4625 33.239 17.6912 34.7784 18.2596C35.0191 18.3478 35.2691 18.4547 35.5018 18.5567C36.9966 19.2324 38.6543 19.1381 39.9681 18.3371L41.35 19.7052C40.5475 21.0067 40.4527 22.6505 41.1348 24.1522C41.245 24.3788 41.338 24.6051 41.428 24.8543C42.0034 26.3696 43.2437 27.4598 44.748 27.8154V29.7541C43.24 30.1099 41.9989 31.2025 41.4228 32.7298C41.3379 32.9648 41.245 33.1913 41.1246 33.4401C40.4519 34.9213 40.5472 36.5614 41.3507 37.8639L39.9685 39.2328C38.6523 38.4299 36.997 38.3356 35.5115 39.0089C35.294 39.1038 35.0666 39.1941 34.7775 39.3103C33.2441 39.8767 32.14 41.0995 31.7769 42.5881L29.8233 42.5882Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M38.7921 28.7797C38.7921 24.4171 35.2066 20.8675 30.7997 20.8675C26.3928 20.8675 22.8074 24.417 22.8074 28.7797C22.8074 33.1479 26.3928 36.7016 30.7997 36.7016C35.2066 36.7016 38.7921 33.1479 38.7921 28.7797ZM30.7998 34.7996C27.4523 34.7996 24.7289 32.0989 24.7289 28.7797C24.7289 25.4657 27.4521 22.7696 30.7998 22.7696C34.1475 22.7696 36.8708 25.4656 36.8708 28.7797C36.8707 32.0989 34.1474 34.7996 30.7998 34.7996Z"
                                        fill="#845CFF" />
                                </svg>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">All in One Solution</h5>
                            </a>
                            <p class="disc">
                                A competent SEO consultant begins by conducting a thorough audi...
                            </p>
                            <a href="{{ route('serviceDetailsPage') }}">View More<i class="far fa-arrow-right"></i></a>
                        </div>
                        <!-- single service style0-11 end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single service style0-11 -->
                        <div class="single-service-style-11">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="56"
                                    viewBox="0 0 62 56" fill="none">
                                    <path
                                        d="M30.8667 15.5261C32.8724 15.5261 34.7945 14.5297 36.2789 12.7214C37.6346 11.0699 38.4119 8.98693 38.4119 7.00465C38.4119 3.01133 35.1686 0 30.8667 0C26.5648 0 23.3215 3.00741 23.3215 7.00465C23.3215 8.98693 24.0988 11.0699 25.4545 12.7214C26.9389 14.531 28.861 15.5261 30.8667 15.5261ZM30.8667 2.15749C33.9707 2.15749 36.2232 4.19599 36.2232 7.00465C36.2232 10.5351 33.2929 13.3686 30.8667 13.3686C27.8993 13.3686 25.5102 9.88654 25.5102 7.00465C25.5102 4.20122 27.7626 2.15749 30.8667 2.15749Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M21.9379 25.8794L21.1699 36.6787C21.1597 36.82 21.178 36.9619 21.2235 37.0963C21.269 37.2306 21.341 37.3549 21.4352 37.4618C21.5294 37.5688 21.6441 37.6564 21.7727 37.7197C21.9013 37.783 22.0413 37.8207 22.1846 37.8306H22.2616C22.5384 37.8303 22.8049 37.7267 23.0074 37.5407C23.21 37.3546 23.3335 37.0999 23.3533 36.8277L24.1214 26.0376C24.1315 25.8963 24.1132 25.7544 24.0677 25.6201C24.0222 25.4857 23.9502 25.3615 23.856 25.2545C23.7618 25.1475 23.6471 25.0599 23.5185 24.9966C23.3899 24.9333 23.2499 24.8956 23.1066 24.8857C22.9632 24.8757 22.8192 24.8937 22.6829 24.9386C22.5466 24.9835 22.4206 25.0544 22.3121 25.1472C22.2035 25.2401 22.1146 25.3532 22.0505 25.4799C21.9863 25.6067 21.948 25.7446 21.9379 25.886V25.8794Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M45.7091 37.8293C46.006 37.8034 46.2804 37.6625 46.4721 37.4375C46.6638 37.2125 46.7572 36.9217 46.7318 36.629C46.7318 36.629 45.5751 28.4527 45.4053 25.7094C45.0909 20.7838 42.0386 16.8324 37.2698 16.1132C35.5931 15.8595 32.5474 15.6686 30.9556 15.6673C28.7826 15.7044 26.6131 15.8524 24.4556 16.1106C22.219 16.4124 20.1704 17.5071 18.6933 19.1899C17.1412 20.9564 16.4475 23.2146 16.3055 25.7147C16.1463 28.4606 15.0918 36.6407 15.0918 36.6407C15.074 36.7826 15.085 36.9264 15.1241 37.064C15.1632 37.2016 15.2297 37.3302 15.3196 37.4422C15.4096 37.5543 15.5212 37.6476 15.648 37.7168C15.7749 37.786 15.9144 37.8297 16.0585 37.8453C16.2026 37.8608 16.3484 37.8481 16.4874 37.8076C16.6265 37.7672 16.756 37.7 16.8685 37.6098C16.9809 37.5196 17.0741 37.4084 17.1425 37.2824C17.211 37.1564 17.2534 37.0183 17.2672 36.8761C17.2672 36.8761 18.3377 28.607 18.4903 25.8337C18.7078 21.9031 21.0677 18.744 24.7541 18.2498C26.8116 18.0034 28.8806 17.862 30.9529 17.8261C32.436 17.8261 35.3795 18.0118 36.9368 18.2471C38.6491 18.5026 40.2146 19.3465 41.3568 20.6295C42.5719 22.0051 43.0985 23.8527 43.2139 25.8402C43.3824 28.6175 44.5577 36.8879 44.5577 36.8879C44.6002 37.1562 44.7407 37.3999 44.9527 37.5732C45.1648 37.7466 45.4337 37.8377 45.7091 37.8293Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M38.595 24.8791C38.4509 24.8889 38.3102 24.9267 38.181 24.9903C38.0518 25.0539 37.9366 25.1421 37.8422 25.2498C37.7477 25.3575 37.6758 25.4826 37.6306 25.6178C37.5854 25.753 37.5678 25.8957 37.5789 26.0376L38.3482 36.8356C38.3674 37.1079 38.4905 37.3629 38.6929 37.5493C38.8952 37.7356 39.1617 37.8394 39.4386 37.8398H39.5169C39.8063 37.8193 40.0757 37.6866 40.2659 37.4706C40.4562 37.2547 40.5517 36.9731 40.5317 36.6878L39.7623 25.8886C39.753 25.7467 39.7155 25.608 39.6517 25.4805C39.588 25.3529 39.4994 25.239 39.391 25.1452C39.2826 25.0515 39.1565 24.9797 39.0199 24.9341C38.8833 24.8884 38.7389 24.8697 38.595 24.8791Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M37.8495 47.5969L43.1131 42.5392C43.2592 42.3987 43.3626 42.2207 43.4115 42.0253C43.4604 41.83 43.4529 41.625 43.3898 41.4337C43.3268 41.2423 43.2107 41.0721 43.0546 40.9423C42.8986 40.8126 42.7089 40.7285 42.5069 40.6994L35.2336 39.6534L31.981 33.1613C31.8906 32.9807 31.7508 32.8285 31.5773 32.7222C31.4039 32.6158 31.2036 32.5595 30.9993 32.5595C30.795 32.5595 30.5948 32.6158 30.4213 32.7222C30.2478 32.8285 30.108 32.9807 30.0177 33.1613L26.7651 39.6573L19.4918 40.7034C19.2898 40.7324 19.1001 40.8165 18.944 40.9463C18.788 41.076 18.6719 41.2462 18.6088 41.4376C18.5458 41.629 18.5383 41.8339 18.5872 42.0293C18.6361 42.2246 18.7395 42.4026 18.8856 42.5431L24.1492 47.6008L22.9076 54.7362C22.8724 54.9351 22.8947 55.1398 22.9717 55.3269C23.0487 55.514 23.1775 55.6761 23.3434 55.7946C23.5092 55.9132 23.7055 55.9834 23.9099 55.9974C24.1143 56.0114 24.3185 55.9686 24.4994 55.8738L30.9993 52.5029L37.4993 55.8738C37.6565 55.9549 37.8312 55.9975 38.0086 55.998C38.168 55.9978 38.3254 55.9633 38.4698 55.8969C38.6143 55.8306 38.7423 55.734 38.845 55.6138C38.9477 55.4937 39.0225 55.3529 39.0643 55.2014C39.1061 55.0498 39.1139 54.891 39.0871 54.7362L37.8495 47.5969ZM30.49 50.3297C29.2192 50.9678 25.4386 52.9448 25.4386 52.9448L26.403 47.3994C26.4329 47.2271 26.42 47.0502 26.3652 46.8839C26.3105 46.7177 26.2155 46.567 26.0886 46.4449L22.0016 42.5222L27.6499 41.7128C27.8254 41.6876 27.992 41.6207 28.1355 41.518C28.279 41.4153 28.395 41.2798 28.4737 41.1231L30.994 36.0772L33.5144 41.1231C33.5931 41.2798 33.7091 41.4153 33.8526 41.518C33.9961 41.6207 34.1627 41.6876 34.3382 41.7128L39.9865 42.5222L35.8995 46.4449C35.7725 46.567 35.6776 46.7177 35.6228 46.8839C35.5681 47.0502 35.5551 47.2271 35.5851 47.3994L36.5495 52.9448C36.5495 52.9448 32.7689 50.9652 31.4981 50.3297C31.3432 50.2473 31.17 50.2041 30.994 50.2041C30.818 50.2041 30.6448 50.2473 30.49 50.3297Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M61.0622 43.9788L55.7442 43.2165L53.3657 38.4674C53.2756 38.2867 53.136 38.1345 52.9626 38.0281C52.7892 37.9217 52.589 37.8652 52.3848 37.8652C52.1805 37.8652 51.9803 37.9217 51.8069 38.0281C51.6336 38.1345 51.4939 38.2867 51.4038 38.4674L49.0254 43.2165L43.7074 43.9788C43.5054 44.0078 43.3156 44.092 43.1596 44.2217C43.0035 44.3515 42.8874 44.5217 42.8244 44.713C42.7613 44.9044 42.7538 45.1094 42.8027 45.3047C42.8516 45.5001 42.955 45.6781 43.1011 45.8186L46.948 49.5164L46.0394 54.7362C46.0042 54.9351 46.0264 55.1398 46.1035 55.3269C46.1805 55.514 46.3093 55.6761 46.4752 55.7946C46.641 55.9132 46.8373 55.9834 47.0417 55.9974C47.246 56.0114 47.4503 55.9686 47.6312 55.8738L52.3867 53.409L57.1436 55.8738C57.3008 55.9549 57.4756 55.9975 57.653 55.998C57.8124 55.9978 57.9698 55.9633 58.1142 55.8969C58.2587 55.8306 58.3867 55.734 58.4894 55.6138C58.592 55.4937 58.6669 55.3529 58.7087 55.2014C58.7505 55.0498 58.7583 54.891 58.7315 54.7362L57.8228 49.5164L61.6697 45.8186C61.8158 45.6781 61.9192 45.5001 61.9681 45.3047C62.017 45.1094 62.0095 44.9044 61.9465 44.713C61.8834 44.5217 61.7673 44.3515 61.6113 44.2217C61.4552 44.092 61.2655 44.0078 61.0635 43.9788H61.0622ZM51.876 51.2358C51.0417 51.649 48.5717 52.9474 48.5717 52.9474L49.2031 49.3216C49.2331 49.1493 49.2201 48.9723 49.1654 48.8061C49.1106 48.6398 49.0157 48.4891 48.8887 48.367L46.2158 45.799L49.9088 45.2759C50.0845 45.2509 50.2514 45.1839 50.3949 45.081C50.5385 44.978 50.6544 44.842 50.7326 44.6849L52.3841 41.3872L54.0356 44.6849C54.1143 44.8419 54.2305 44.9777 54.3742 45.0807C54.518 45.1836 54.6849 45.2506 54.8607 45.2759L58.5524 45.799L55.8808 48.367C55.7537 48.489 55.6586 48.6396 55.6038 48.806C55.549 48.9723 55.5362 49.1492 55.5664 49.3216L56.2031 52.9474C56.2031 52.9474 53.7345 51.649 52.9001 51.2358C52.7428 51.1523 52.5668 51.1086 52.3881 51.1086C52.2093 51.1086 52.0334 51.1523 51.876 51.2358Z"
                                        fill="#845CFF" />
                                    <path
                                        d="M18.2913 43.9788L12.9733 43.2165L10.5949 38.4674C10.5048 38.2867 10.3651 38.1345 10.1917 38.0281C10.0183 37.9217 9.81817 37.8652 9.61392 37.8652C9.40966 37.8652 9.20949 37.9217 9.0361 38.0281C8.86272 38.1345 8.72306 38.2867 8.63296 38.4674L6.25451 43.2165L0.936512 43.9788C0.734509 44.0078 0.544769 44.092 0.388734 44.2217C0.232699 44.3515 0.116589 44.5217 0.0535274 44.713C-0.00953457 44.9044 -0.0170351 45.1094 0.0318733 45.3047C0.0807816 45.5001 0.184149 45.6781 0.330294 45.8186L4.17719 49.5164L3.27516 54.7362C3.24002 54.9351 3.26223 55.1398 3.33927 55.3269C3.41631 55.514 3.54509 55.6761 3.71095 55.7946C3.87681 55.9132 4.07309 55.9834 4.27746 55.9974C4.48183 56.0114 4.68608 55.9686 4.86698 55.8738L9.62386 53.409L14.3794 55.8738C14.5366 55.9549 14.7114 55.9975 14.8888 55.998C15.0482 55.9978 15.2056 55.9633 15.35 55.8969C15.4944 55.8306 15.6225 55.734 15.7251 55.6138C15.8278 55.4937 15.9027 55.3529 15.9445 55.2014C15.9863 55.0498 15.9941 54.891 15.9673 54.7362L15.0586 49.5164L18.9055 45.8186C19.0516 45.6781 19.155 45.5001 19.2039 45.3047C19.2528 45.1094 19.2453 44.9044 19.1823 44.713C19.1192 44.5217 19.0031 44.3515 18.8471 44.2217C18.691 44.092 18.5013 44.0078 18.2993 43.9788H18.2913ZM9.11183 51.2358L5.80217 52.9474L6.43227 49.3216C6.46248 49.1492 6.44965 48.9723 6.39487 48.806C6.34009 48.6396 6.24502 48.489 6.11788 48.367L3.44628 45.799L7.13797 45.2759C7.31377 45.2506 7.48071 45.1836 7.62444 45.0807C7.76816 44.9777 7.88437 44.8419 7.96306 44.6849L9.61458 41.3872L11.2661 44.6849C11.3443 44.842 11.4602 44.978 11.6037 45.081C11.7473 45.1839 11.9141 45.2509 12.0899 45.2759L15.7829 45.799L13.1099 48.367C12.983 48.4891 12.8881 48.6398 12.8333 48.8061C12.7785 48.9723 12.7656 49.1493 12.7956 49.3216L13.427 52.9474L10.1226 51.2358C9.97049 51.1441 9.79559 51.0955 9.61723 51.0955C9.43887 51.0955 9.26397 51.1441 9.11183 51.2358Z"
                                        fill="#845CFF" />
                                </svg>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Best Client Support</h5>
                            </a>
                            <p class="disc">
                                A competent SEO consultant begins by conducting a thorough audi...
                            </p>
                            <a href="{{ route('serviceDetailsPage') }}">View More<i class="far fa-arrow-right"></i></a>
                        </div>
                        <!-- single service style0-11 end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- service area end -->

        <!-- rts case studies area start -->
        <div class="rts-case-studied-area-11 rts-section-gap bg_case-11" id="projects">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-left-area-11">
                            <div class="pre-title-flex">
                                <span class="pre-title">why choose us?</span>
                            </div>
                            <h3 class="title">
                                Our Case Studies
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="button-area--11-case">
                            <p class="disc">View the full case study of our recent featured and awesome works that we
                                created for our clients.</p>
                            <a href="#" class="rts-btn btn-border-11">View All Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-120">
                <div class="row g-5 mt--30">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="large-case-studies-11">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/product/07.jpg') }}" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="large-case-studies-11">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/product/08.jpg') }}" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="large-case-studies-11">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/product/09.jpg') }}" alt="product">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="large-case-studies-11">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/product/10.jpg') }}" alt="product">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feeadbacka rea start -->
            <div class="reedback-area-start rts-section-gapTop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <nav class="feedback-11-nav">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">
                                        <img src="{{ asset('assets/images/feature/02.jpg') }}" alt="feature">
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">
                                        <img src="{{ asset('assets/images/feature/03.jpg') }}" alt="feature">
                                    </button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">
                                        <img src="{{ asset('assets/images/feature/04.png') }}" alt="feature">
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-6 pl--60 pl_md--0 pl_sm--10 mt_md--50 mt_sm--30">
                            <div class="tab-content feedback-11-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="title-left-area-11">
                                        <div class="pre-title-flex">
                                            <span class="pre-title">Our Feedbacks</span>
                                        </div>
                                        <h3 class="title">
                                            What They’re Saying
                                        </h3>
                                        <p class="disc">“Completely formulate user-centric partnerships and cross top
                                            benefits and team driven is services edefine after cross capital. Intrinsicly
                                            engage integrated intellectual.”</p>
                                        <div class="author-area">
                                            <img src="{{ asset('assets/images/testimonials/14.jpg') }}"
                                                alt="testimonias">
                                            <div class="author-info">
                                                <h6 class="name">Edward Daniel</h6>
                                                <span>Sales Engineer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="title-left-area-11">
                                        <div class="pre-title-flex">
                                            <span class="pre-title">Our Feedbacks</span>
                                        </div>
                                        <h3 class="title">
                                            What They’re Saying
                                        </h3>
                                        <p class="disc">“Completely formulate user-centric partnerships and cross top
                                            benefits and team driven is services edefine after cross capital. Intrinsicly
                                            engage integrated intellectual.”</p>
                                        <div class="author-area">
                                            <img src="{{ asset('assets/images/testimonials/14.jpg') }}"
                                                alt="testimonias">
                                            <div class="author-info">
                                                <h6 class="name">Edward Daniel</h6>
                                                <span>Sales Engineer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <div class="title-left-area-11">
                                        <div class="pre-title-flex">
                                            <span class="pre-title">Our Feedbacks</span>
                                        </div>
                                        <h3 class="title">
                                            What They’re Saying
                                        </h3>
                                        <p class="disc">“Completely formulate user-centric partnerships and cross top
                                            benefits and team driven is services edefine after cross capital. Intrinsicly
                                            engage integrated intellectual.”</p>
                                        <div class="author-area">
                                            <img src="{{ asset('assets/images/testimonials/14.jpg') }}"
                                                alt="testimonias">
                                            <div class="author-info">
                                                <h6 class="name">Edward Daniel</h6>
                                                <span>Sales Engineer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feeadback area end -->
        </div>
        <!-- rts case studies area end -->

        <!-- rts-pricing-area-start -->
        <div class="rts-pricing-area rts-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-center-area-11">
                            <div class="pre-title-flex">
                                <span class="pre-title">why choose us?</span>
                            </div>
                            <h3 class="title">
                                Flexible Pricing Plans
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- pricing single start -->
                        <div class="pricing-single-11">
                            <div class="head">
                                <h5 class="title">Standard Plan</h5>
                                <div class="pric-area">
                                    <h2 class="title-price">$450 <span>/Month</span> </h2>
                                </div>
                                <p class="disc">
                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                </p>
                            </div>
                            <div class="body">
                                <div class="check-wrapper">
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">Business Solution</p>
                                    </div>
                                    <!-- single -chekc end -->
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">24/7 Consultant Service</p>
                                    </div>
                                    <!-- single -chekc end -->
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">Great Customer Support</p>
                                    </div>
                                    <!-- single -chekc end -->
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">Market Growth Solution</p>
                                    </div>
                                    <!-- single -chekc end -->
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">24/7 Consultant Service</p>
                                    </div>
                                    <!-- single -chekc end -->
                                </div>
                                <a href="#"
                                    class="rts-btn btn-primary-11 pricing-btn d-block text-center mt--30">Buy This Plan</a>
                            </div>
                        </div>
                        <!-- pricing single end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- pricing single start -->
                        <div class="pricing-single-11">
                            <div class="head">
                                <h5 class="title">Premium Plan</h5>
                                <div class="pric-area">
                                    <h2 class="title-price">$650 <span>/Month</span> </h2>
                                </div>
                                <p class="disc">
                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                </p>
                            </div>
                            <div class="body">
                                <div class="check-wrapper">
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">Business Solution</p>
                                    </div>
                                    <!-- single -chekc end -->
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">24/7 Consultant Service</p>
                                    </div>
                                    <!-- single -chekc end -->
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">Great Customer Support</p>
                                    </div>
                                    <!-- single -chekc end -->
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">Market Growth Solution</p>
                                    </div>
                                    <!-- single -chekc end -->
                                    <!-- single -chekc -->
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        <p class="disc">24/7 Consultant Service</p>
                                    </div>
                                    <!-- single -chekc end -->
                                </div>
                                <a href="#"
                                    class="rts-btn btn-primary-11 pricing-btn d-block text-center mt--30">Buy This Plan</a>
                            </div>
                        </div>
                        <!-- pricing single end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- rts-pricing-area-end -->

        <!-- branding agency  start -->
        <div class="branding-agency-area rts-section-gapTop">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/testimonials/15.png') }}" alt="testimonails">
                        </div>
                    </div>
                    <div class="col-lg-6 pl--30 mt_sm--30">
                        <div class="experience-ten-area-left pr--0">
                            <div class="title-area-left-ten">
                                <div class="title-left-area-11">
                                    <div class="pre-title-flex">
                                        <span class="pre-title">why choose us?</span>
                                    </div>
                                    <h3 class="title animated fadeIn">
                                        Our consultant for your awesome
                                        Branding agency
                                    </h3>
                                </div>
                                <p class="disc">Nunc dolor faucibus elementum iaculis ultricies habitant pretium, neque.
                                    Et faucibus sem felis sit vitae vel quis molestie.</p>
                            </div>
                            <div class="rts-progress-ten-wrapper">
                                <!-- single progress -->
                                <div class="single-progress-area-10">
                                    <div class="progress-top">
                                        <p class="name">
                                            Business Development
                                        </p>
                                        <span class="parcent">
                                            85%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar"
                                            style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <!-- single progress -->
                                <!-- single progress -->
                                <div class="single-progress-area-10">
                                    <div class="progress-top">
                                        <p class="name">
                                            Client Management
                                        </p>
                                        <span class="parcent">
                                            85%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar"
                                            style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <!-- single progress -->
                                <!-- single progress -->
                                <div class="single-progress-area-10">
                                    <div class="progress-top">
                                        <p class="name">
                                            Customer Satisfaction
                                        </p>
                                        <span class="parcent">
                                            85%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar"
                                            style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <!-- single progress -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- branding agency  end -->

        <!-- rts blog area start -->
        <div class="rts-blog-area rts-section-gap" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-center-area-11">
                            <div class="pre-title-flex">
                                <span class="pre-title">Our Latest News</span>
                            </div>
                            <h3 class="title">
                                Recent Blog Posts
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="blog-style-11">
                            <a href="{{ route('blogDetailsPage') }}" class="thumbnail">
                                <img src="{{ asset('assets/images/blog/21.png') }}" alt="blog-image">
                            </a>
                            <div class="inner-content-blog-style-11">
                                <div class="catogory-area">
                                    <span>Business Solution</span> /
                                    <span>by David Dolean</span>
                                </div>
                                <a href="#">
                                    <h5 class="title">The Transformative Journey of Crafting Unique
                                        and Impactful Brand</h5>
                                </a>
                                <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="blog-style-11">
                            <a href="{{ route('blogDetailsPage') }}" class="thumbnail">
                                <img src="{{ asset('assets/images/blog/22.png') }}" alt="blog-image">
                            </a>
                            <div class="inner-content-blog-style-11">
                                <div class="catogory-area">
                                    <span>Business Solution</span> /
                                    <span>by David Dolean</span>
                                </div>
                                <a href="#">
                                    <h5 class="title">The Transformative Journey of Crafting Unique
                                        and Impactful Brand</h5>
                                </a>
                                <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts blog area end -->

        <div class="rts-contact-form-area rts-section-gapBottom" id="contacts-down">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="rts-contact-fluid rts-section-gapBottom">
                            <div class="rts-title-area contact-fluid text-center  mb--50">
                                <p class="pre-title">
                                    Get In Touch
                                </p>
                                <h2 class="title">Needs Help? Let’s Get in Touch</h2>
                            </div>
                            <div class="form-wrapper">
                                <form action="#">
                                    <div class="name-email">
                                        <input type="text" placeholder="Your Name" required="">
                                        <input type="email" placeholder="Email Address" required="">
                                    </div>
                                    <input type="text" placeholder="Select Subject">
                                    <textarea placeholder="Type Your Message"></textarea>
                                    <button type="submit" class="rts-btn btn-primary-11">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start header area -->
        <!-- rts footer three area start -->
        <div class="rts-footer-area footer-eleven rts-section-gapTop footer-bg-2">
            <div class="container pb--100 pb_sm--40">
                <div class="row g-5">
                    <div class="col-xl-3 col-lg-6">
                        <div class="footer-three-single-wized left">
                            <a href="index" class="logo_footer">
                                <img src="{{ asset('assets/images/logo/logo-8.svg') }}" alt="Logo-image">
                            </a>
                            <p class="disc">Felis consquat magnis fames sagittis ultrices plasodales porttitor quisque
                                ultrice tempor turpis.</p>
                            <ul class="social-three-wrapper">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer three mid area -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="row">
                            <!-- footer mid area left -->
                            <div class="col-lg-6">
                                <div class="footer-three-single-wized mid-left">
                                    <h5 class="title">Office Information</h5>
                                    <div class="body">
                                        <div class="info-wrapper">
                                            <div class="single">
                                                <ul class="icon">
                                                    <li><i class="fas fa-phone-alt"></i></li>
                                                </ul>
                                                <div class="info">
                                                    <span>Call Us 24/7</span>
                                                    <a href="#">(+256) 2145.2156</a>
                                                </div>
                                            </div>
                                            <div class="single">
                                                <ul class="icon">
                                                    <li><i class="far fa-envelope"></i></li>
                                                </ul>
                                                <div class="info">
                                                    <span>Work with us</span>
                                                    <a href="#">info@finbiz.com</a>
                                                </div>
                                            </div>
                                            <div class="single">
                                                <ul class="icon">
                                                    <li><i class="fas fa-map-marker-alt"></i></li>
                                                </ul>
                                                <div class="info">
                                                    <span>Our Location</span>
                                                    <a href="#">XYZ Hilton Street, 125 <br>
                                                        Town United State</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer mid area left end -->

                            <!-- footer mid area right -->
                            <div class="col-lg-6">
                                <div class="footer-three-single-wized mid-right">
                                    <h5 class="title">Get Updates</h5>
                                    <div class="body">
                                        <div class="update-wrapper">
                                            <p class="disc">Sign up for our latest news & articles. We won’t give you
                                                spam
                                                mails.</p>
                                            <form class="email-footer-area">
                                                <input type="email" placeholder="Enter Email Address" required>
                                                <button type="submit"><i class="fas fa-location-arrow"></i></button>
                                            </form>
                                            <div class="note-area">
                                                <p><span>Note:</span> We do not publish your email</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer mid area right end -->
                        </div>
                    </div>
                    <!-- footer three mid area ENd -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="footer-three-single-wized right">
                            <h5 class="title">Instagram Posts</h5>
                            <div class="body">
                                <div class="footer-gallery-inner">
                                    <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/01.png') }}"
                                            alt="Footer-gallery"></a>
                                    <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/02.png') }}"
                                            alt="Footer-gallery"></a>
                                    <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/03.png') }}"
                                            alt="Footer-gallery"></a>
                                    <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/04.png') }}"
                                            alt="Footer-gallery"></a>
                                    <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/05.png') }}"
                                            alt="Footer-gallery"></a>
                                    <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/06.png') }}"
                                            alt="Footer-gallery"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area ptb--20">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="disc text-center">
                                FINBIZ - Copyright 2022. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts footer three area end -->
        <!-- ENd Header Area -->


        <!-- start loader -->
        <div class="loader-wrapper">
            <div class="loader">
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End loader -->

        <!-- progress Back to top -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- progress Back to top End -->
    @endsection
