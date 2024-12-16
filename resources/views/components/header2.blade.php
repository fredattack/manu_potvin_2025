<header class="header--sticky header-one six">
    <div class="header-top header-top-one bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-xl-block d-none">
                    <div class="left">
                        <p class="left-text">Are you ready to grow up your business?</p>
                    </div>
                </div>
                <div class="col-lg-6 d-xl-block d-none">
                    <div class="right">
                        <div class="mail">
                            <i class="fas fa-envelope"></i>
                            <a href="#">info@example.com</a>
                        </div>
                        <div class="call">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">
                                Hoteline: +210-9856988
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="thumbnail">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/custom/logo/logo_full.png') }}" alt="finbiz-logo">
                        </a>
                    </div>
                </div>
                <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="main-header">

                        @include('components.nav')


                        <div class="button-area">
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner">
                                        <div class="input-div">
                                            <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                            <button>
                                                <i class="far fa-search"></i>
                                            </button>
                                        </div>
                                        <div id="close" class="search-close-icon">
                                            <i class="far fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                            <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}" alt="Menu-icon">
                                <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}" alt="Menu-icon">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
