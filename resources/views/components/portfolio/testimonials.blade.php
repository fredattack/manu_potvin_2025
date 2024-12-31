<div class="rts-testimonials-6 rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area-style-six text-center">
                    <div class="pre-title">
                        <img src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                        <span class="pre"></span>
                        <img class="two" src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                    </div>
                    <h2 class="title">
                        Ce que disent nos clients
                    </h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--30">

            <div class="col-lg-12">
                <div class="swiper clients-review-testimonials-7">
                    <div class="swiper-wrapper">
                        @foreach(App\Models\Testimonial::with('realisation')->wherePublished(true)->get() as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonials-7-style">
                                @if($testimonial->realisation instanceof \App\Models\Realisation)
                                <a class="thumbnail" href="{{
                        $testimonial->realisation instanceof \App\Models\Realisation
                        ? route('pages.details',['realisation'=>$testimonial->realisation])
                         :'#'}}
                         ">
{{--                                    {!! $testimonial->realisation->image !!}--}}
                                </a>
                                @endif
                                <div class="body">
                                    <h5 class="title">

                                    </h5>
                                    <p class="disc">
                                        "{{$testimonial->content}}”
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="name-area">
                                        <a href="{{$testimonial->realisation instanceof \App\Models\Realisation
? route('pages.details',['realisation'=>$testimonial->realisation])
 :'#'}}">
                                            <h6 class="title">
                                                {{$testimonial->author}}
                                            </h6>
                                        </a>
                                        <span>{{$testimonial->city}}</span>
                                    </div>
                                    <div class="stars-area">
                                        @for($i=0;$i<$testimonial->rating;$i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
