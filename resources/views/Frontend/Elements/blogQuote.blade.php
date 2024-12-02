@extends('Frontend.Layouts.element')
@section('element-content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Post Quote</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Post Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts blog mlist area -->
    <div class="rts-blog-list-area ptb--70">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing inner details">
                        <div class="blog-listing-content">
                            <!-- quote area start -->
                            <div class="rts-quote-area mb--0 text-center">
                                <h5 class="title">“Placerat pretium tristique mattis tellus accuan metus dictumst
                                    vivamus odio nulla fusce auctor into suscipit habitasse class congue potenti
                                    iaculis”</h5>
                                <a href="#" class="name">Daniel X. Horrar</a>
                                <span>Author</span>
                            </div>
                            <!-- quote area end -->
                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
            </div>
        </div>
    </div>
    <!-- rts blog mlist area End -->
    <!-- rts blog mlist area -->
    <div class="rts-blog-list-area inner ptb--70">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing inner inner2 details">
                        <div class="blog-listing-content">
                            <!-- quote area start -->
                            <div class="rts-quote-area inner mb--0 text-center">
                                <h5 class="title">“Placerat pretium tristique mattis tellus accuan metus dictumst
                                    vivamus odio nulla fusce auctor into suscipit habitasse class congue potenti
                                    iaculis”</h5>
                                <a href="#" class="name">Daniel X. Horrar</a>
                                <span>Author</span>
                            </div>
                            <!-- quote area end -->
                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
            </div>
        </div>
    </div>
    <!-- Blog Section Start -->
    <div class="rts-inner-blog ptb--70">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-12 pr-35 md-pr-15 md-mt-50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-details">
                                <div class="blog-full">
                                    <blockquote>
                                        <p class="margin-0">We can easily manage if we will only take, each day, the
                                            burden appointed to it. But the load will be too heavy for us if we
                                            carry yesterday’s burden over again today, and then add the burden of
                                            the morrow before we are required to bear it.<br>
                                            <cite>Robert Calibo</cite>
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

@endsection
