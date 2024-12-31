<div class="swiper-slide">
    <?php
    /** @var \App\Models\Testimonial $testimonial  */
    ?>
    <!-- single testimonials area -->
    <div class="single-testimonials-h2">
        <div class="body">
            <h5 class="title"></h5>
            <p class="disc">
                "{{$testimonial->content}}”
            </p>
        </div>
        <div class="footer">
            <div class="left">
                @if($testimonial->realisation instanceof \App\Models\Realisation)
                    <a class="thumbnail" href="{{
                        $testimonial->realisation instanceof \App\Models\Realisation
                        ? route('pages.details',['realisation'=>$testimonial->realisation])
                         :'#'}}
                         ">
                    {!! $testimonial->realisation->image !!}
                </a>
                @endif
                <div class="desig">
                    <a href="{{$testimonial->realisation instanceof \App\Models\Realisation
? route('pages.details',['realisation'=>$testimonial->realisation])
 :'#'}}">
                        <h6 class="title">
                            {{$testimonial->author}}
                        </h6>
                    </a>
                    <p>{{$testimonial->city}} </p>
                </div>
            </div>
            <div class="right">
                <div class="stars-area">
                    <ul>
                        @for($i=0;$i<$testimonial->rating;$i++)
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- single testimonials area End -->
</div>
