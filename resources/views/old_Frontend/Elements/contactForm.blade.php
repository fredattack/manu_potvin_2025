@extends('Frontend.Layouts.element')
@section('element-content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Contact Form</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Contact Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- contact area start -->
    <div class="rts-contact-area contact-one">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one">
                        <img src="{{ asset('assets/images/contact/01.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one">
                        <div class="rts-title-area contact text-start">
                            <p class="pre-title">
                                Make An Appointment
                            </p>
                            <h2 class="title">Request a free quote</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" action="mailer.php" method="post">
                            <div class="name-email">
                                <input type="text" placeholder="Your Name" name="name" required>
                                <input type="email" placeholder="Email Address" name="email" required>
                            </div>
                            <input type="text" placeholder="Business Topic" name="subject">
                            <textarea placeholder="Type Your Message" name="message"></textarea>
                            <button type="submit" class="rts-btn btn-primary">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- start project with us section -->
    <div class="rts-project-area rts-section-gap bg-project-three margin-controlerproject mt--170 mt_sm--0">
        <div class="container controler">
            <div class="row g-0">
                <div class="col-lg-7">
                    <!-- project area left wrapper -->
                    <div class="title-area-project-w-in">
                        <span class="sub">
                            Make An Appointment
                        </span>
                        <h2 class="title">
                            START PROJECT <br> <span>WITH US!</span>
                        </h2>
                        <p class="disc">
                            Penatibus habitant ligula dapibus rhoncus dictum viverra gravida <br> elementum, integer
                            potenti
                            dui et molestie ante...
                        </p>
                        <div class="bg-email">
                            <div class="content-wrapper">
                                <!-- single-contact info -->
                                <div class="contact-info">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/product/icon/01.jpg') }}" alt="Product_icon">
                                    </div>
                                    <div class="discription">
                                        <span>Need any help?</span>
                                        <h5 class="title-sm">+254 21456.21458</h5>
                                    </div>
                                </div>
                                <!-- single-contact info End -->
                                <!-- single-contact info -->
                                <div class="contact-info">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/product/icon/02.jpg') }}" alt="Product_icon">
                                    </div>
                                    <div class="discription">
                                        <span>Email us anytime</span>
                                        <h5 class="title-sm">info@example.com</h5>
                                    </div>
                                </div>
                                <!-- single-contact info End -->
                            </div>
                        </div>
                    </div>
                    <!-- project area left wrapper end -->
                </div>
                <div class="col-lg-5">
                    <div class="bg-input-project">
                        <div class="product-form">
                            <div id="form-messages"></div>
                            <form id="contact-form" action="mailer.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your Name" name="name" required>
                                    </div>
                                    <div class="col-lg-6 mt_md--20 mt_sm--20">
                                        <input type="email" placeholder="Your Email" name="email" required>
                                    </div>
                                    <div class="col-12 mt--20">
                                        <input type="text" placeholder="Your Website" name="subject">
                                    </div>
                                    <div class="col-12 mt--20">
                                        <textarea placeholder="Your Comment" name="message"></textarea>
                                    </div>
                                    <div class="col-12 mt--35">
                                        <button class="rts-btn btn-primary-3 color-h-black" type="submit">Get in
                                            Touch</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start project with us section End -->
@endsection
