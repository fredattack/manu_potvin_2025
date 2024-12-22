<div id="side-bar" class="side-bar">
    <button class="close-icon-menu">
        <i class="far fa-times"></i>
    </button>
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
                <div class="h6 title">Get In Touch</div>
                <div class="wrapper">
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">+8801234566789</a>
                    </div>
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">example@gmail.com</a>
                    </div>
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">www.webexample.com</a>
                    </div>
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">13/A, New Pro State, NYC</a>
                    </div>
                </div>
                <div class="social-wrapper-two menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
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
            </div>
            <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
        </div>
    </div>
</div>
