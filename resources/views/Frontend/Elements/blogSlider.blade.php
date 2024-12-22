@extends('Frontend.Layouts.element')
@section('element-content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Blog Slider</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Blog Slider</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- blog area start -->
    <div class="rts-blog-area rts-section-gap bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span>Blog Posts</span>
                        <h2 class="title">News & Updates</h2>
                    </div>
                </div>
            </div>
            <div class="g-5 mt--20">
                <div class="swiper mySwiperh1_blog">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/blog/01.jpg') }}" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.05.2023</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Business Solution </span>/ by David Dolean</p>
                                    <a href="{{ route('blogDetailsPage') }}">
                                        <h5 class="title">The quick settle tips of the new
                                            ages exist </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/blog/02.jpg') }}" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.05.2023</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Business Solution </span>/ by David Dolean</p>
                                    <a href="{{ route('blogDetailsPage') }}">
                                        <h5 class="title">Old generation settle tips of the new
                                            ages upps ! </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/blog/03.jpg') }}" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.05.2023</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Business Solution </span>/ by David Dolean</p>
                                    <a href="{{ route('blogDetailsPage') }}">
                                        <h5 class="title">Monkey Form settle tips of the new
                                            ages end </h5>
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
        </div>
    </div>
    <!-- blog area end -->

@endsection
