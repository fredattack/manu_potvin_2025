@extends('Frontend.Layouts.element')
@section('element-content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Accordion Style</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Accordion Style</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts faq section area -->
    <div class="rts-faq-section rts-section-gap rts-faq-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-faq-four">
                        <img src="{{ asset('assets/images/faq/02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-two-inner">
                        <div class="title-area-faq">
                            <span class="sub">ACCORDION</span>
                            <h2 class="title">Accordion Style One</h2>
                        </div>
                        <!-- faq accordion area -->
                        <div class="faq-accordion-area">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01. </span> What should i included my personal details?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis
                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo
                                            service lifereu visionary sources unleash online businesss solutions
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02. </span> Where i can find my business growth result?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis
                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo
                                            service lifereu visionary sources unleash online businesss solutions
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03. </span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis
                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo
                                            service lifereu visionary sources unleash online businesss solutions
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- faq accordion area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq section area End -->

    <!-- start customers faq section -->
    <div class="rts-faq-area rts-section-gap inner">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 order-xl-1 order-md-2 order-sm-2 order-2">
                    <div class="accordion-area inner">
                        <div class="title-area">
                            <span>ACCORDION</span>
                            <h2 class="title">Accordion Style Two</h2>
                        </div>
                        <div class="accordion-one-inner">
                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01.</span> What should i included my personal details?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02.</span> Where i can find my business growth result?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03.</span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span>04.</span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End customers faq section -->

    <!-- start customers faq section -->
    <div class="rts-faq-area rts-section-gap inner inner2">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 order-xl-1 order-md-2 order-sm-2 order-2">
                    <div class="accordion-area inner inner2">
                        <div class="title-area">
                            <span>ACCORDION</span>
                            <h2 class="title">Accordion Style Three</h2>
                        </div>
                        <div class="accordion-one-inner inner">
                            <div class="accordion" id="accordionExample4">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01.</span> What should i included my personal details?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02.</span> Where i can find my business growth result?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03.</span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseFour">
                                            <span>04.</span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End customers faq section -->
    <div class="rts-faq-area rts-section-gap inner">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 order-xl-1 order-md-2 order-sm-2 order-2">
                    <div class="accordion-area inner inner2">
                        <div class="title-area">
                            <span>ACCORDION</span>
                            <h2 class="title">Accordion Style Four</h2>
                        </div>
                        <div class="accordion-one-inner inner inner2">
                            <div class="accordion" id="accordionExample5">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01.</span> What should i included my personal details?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample5">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02.</span> Where i can find my business growth result?
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample5">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03.</span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample5">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapseFour">
                                            <span>04.</span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample5">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End customers faq section -->

    <!-- service accordion area -->
    <div class="rts-accordion-area service rts-section-gap inner">
        <div class="accordion-service-bg bg_image inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="accordion-service-inner inner">
                            <div class="title-area-start">
                                <span class="sub color-primary">ACCORDION</span>
                                <h2 class="title">Accordion Style Five</h2>
                            </div>
                            <div class="accordion-area">
                                <div class="accordion" id="accordionExample3">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                Making Easy Business Growth
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Business Solution Model
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Finbiz Company Solution
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEight">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                Management Process
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingNine">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                Managing Invesment
                                            </button>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service accordion area End -->
@endsection
