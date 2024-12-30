<div class="rts-testimonials-h2-area rts-section-gap bg_testimonials-h2">
    <div class="container">
        <div class="row mb--30">
            <div class="col-12">
                <div class="title-area testimonials-area-h2 text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"></span>
                    <h2 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Ce que disent nos clients</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12">
                <!-- Swiper -->
                <div class="swiper testimonials-h2">
                    <div class="swiper-wrapper">
                        @foreach(App\Models\Testimonial::with('realisation')->wherePublished(true)->get() as $testimonial)
                           @include('components.home.testimonial')
                        @endforeach
                    </div>
                </div>
{{--                <div class="swiper-pagination2"></div>--}}
                <!-- swiper end -->
            </div>
        </div>
    </div>
</div>
