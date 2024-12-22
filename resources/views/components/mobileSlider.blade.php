<div id="side-bar" class="side-bar">
    <button class="close-icon-menu">
        <i class="far fa-times"></i>
    </button>
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="{{ route('home') }}"><img class="logo"
                    src="{{ asset('assets/images/custom/logo/logo_full.png') }}" alt="finbiz_logo"></a>

        <div class="body-mobile d-block d-xl-none">
            @include('Frontend.Includes.mobileMenu')
            <div class="social-wrapper-two menu mobile-menu">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
{{--                <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                <a href="#"><i class="fab fa-whatsapp"></i></a>--}}
            </div>
            <a href="/contact" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Contactez nous</a>
        </div>
    </div>
</div>
