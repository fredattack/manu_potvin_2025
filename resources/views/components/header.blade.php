<header class="header-three header--sticky">
    <div class="container">
        <div class="row header-top-three">
            <div class="col-lg-6">
                <p class="top-left">Une envie, un projet ?
                    Un rêve à réaliser ...
                    <a href="{{ route('contactPage') }}">Contactez nous
                        <i class="far fa-arrow-right"></i></a>
                </p>
            </div>
            <div class="col-lg-6 right-h-three">
                <div class="header-top-right">
                    <div class="single-right email">
                        <i class="fas fa-envelope "></i>
                        <a href="#">{{$customerData->email}}</a>
                    </div>
                    <div class="single-right call">
                        <i class="far fa-phone-volume"></i>
                        <a href="#">{{$customerData->phone}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row main-header main-header-three">
            <div class="col-lg-3 col-md-4 col-sm-5 col-5">
                <a href="#!" class="thumbnail-logo">
                    {{--                        ggg--}}
                    <img src="{{ asset('assets/images/custom/logo/logo_full.png') }}" alt="manu_potvin">
                </a>
            </div>
            <div class="col-lg-6 d-none d-xl-block">
                <div class="text-center d-flex justify-content-center">

                    @include('components.nav')


                </div>
            </div>
            <div class="col-xl-3 col-lg-9 col-md-8 col-sm-7 col-7">
                <div class="right justify-content-end">
                    <a href="/contact" class="rts-btn btn-primary-3">Contactez nous</a>
                    <button id="menu-btn" class="menu rts-btn btn-primary-3-menu ml--20">
                        <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}" alt="Menu-icon">
                        <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}" alt="Menu-icon">
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!--#region Mobile slider -->
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

            @include('Frontend.Includes.mobileMenu')


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

<div id="anywhere-home"></div>
<!--#endregion -->
