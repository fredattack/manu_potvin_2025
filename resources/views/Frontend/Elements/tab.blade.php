@extends('Frontend.Layouts.element')
@section('element-content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Testimonial</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Testimonial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- start client feed back section -->
    <div class="rts-client-feedback">
        <div class="container">
            <div class="row">
                <!-- start testimonials area -->
                <div class="col-lg-7">
                    <div class="rts-title-area reviews text-start pl--30 pt--70">
                        <p class="pre-title">
                            Our Testimonials
                        </p>
                        <h2 class="title">Client’s Feedbacks</h2>

                        <!-- swiper area start -->
                        <div class="swiper mySwipertestimonial">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-inner">
                                        <p class="disc text-start">
                                            “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                            laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                            tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                            tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="business-testimonials">
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">David Smith</h5>
                                                </a>
                                                <span>JHKL Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-inner">
                                        <p class="disc text-start">
                                            “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                            laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                            tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                            tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="business-testimonials">
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">David Smith</h5>
                                                </a>
                                                <span>JHKL Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-inner">
                                        <p class="disc text-start">
                                            “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                            laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                            tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                            tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="business-testimonials">
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">David Smith</h5>
                                                </a>
                                                <span>JHKL Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- swiper area end -->
                    </div>
                </div>
                <!-- end testimonials are -->
                <!-- images area -->
                <div class="col-lg-5">
                    <div class="rts-test-one-image-inner">
                        <img src="{{ asset('assets/images/testimonials/01.png') }}" alt="business_testimobials">
                    </div>
                </div>
                <!-- image area end -->
            </div>
        </div>
    </div>
    <!-- start client feed back section End -->

    <!-- start client review area start -->
    <div class="rts-client-review-two rts-section-gapTop bg-client-r-h2">
        <div class="container">
            <div class="row mt--30">
                <div class="title-area left-right testimonial-h2">
                    <div class="title-left">
                        <span>Our Testimonial</span>
                        <h2 class="title mt--15">
                            Our Client Reviews
                        </h2>
                    </div>
                    <div class="button-area">
                        <a href="#" class="rts-btn btn-primary-2">See All Reviews</a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-12">
                    <div class="swiper mySwiperh2_clients">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-01.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/03.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-02.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/04.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-03.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start client review area end -->

    <!-- testimonials area start -->
    <div class="rts-testimonials-h2-area rts-section-gap bg_testimonials-h2">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area testimonials-area-h2 text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Customer
                            Testimonial</span>
                        <h2 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">2356+
                            Customer Feedback’s</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper testimonials-h2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Business Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Marketing Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Corporate Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Insurance Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Consulting Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination2"></div>
                    <!-- swiper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials area end -->
@endsection
