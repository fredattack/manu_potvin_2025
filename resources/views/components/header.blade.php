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

@include('components.mobileSlider')
