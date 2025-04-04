<div class="swiper-slide">
    <?php
    /** @var \App\Models\Testimonial $testimonial  */
    ?>
    <!-- single testimonials area -->
    <div class="single-testimonials-h2">
        <div class="body">
            <div class="quote-icon">
                <i class="fas fa-quote-left"></i>
            </div>
            <p class="disc">
                "{{$testimonial->content}}"
            </p>
        </div>
        <div class="footer">
            <div class="left">
                @if($testimonial->realisation instanceof \App\Models\Realisation)
                    <div class="thumbnail-wrapper">
                        <a class="thumbnail" href="{{ route('pages.details',['realisation'=>$testimonial->realisation]) }}">
                            {!! $testimonial->realisation->image !!}
                        </a>
                    </div>
                @endif
                <div class="desig">
                    <a href="{{ $testimonial->realisation instanceof \App\Models\Realisation ? route('pages.details',['realisation'=>$testimonial->realisation]) : '#' }}">
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

<style>
    /* Styles pour le composant testimonial */
    .single-testimonials-h2 {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        padding: 35px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .single-testimonials-h2:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .single-testimonials-h2 .body {
        position: relative;
        padding-bottom: 25px;
        flex-grow: 1;
    }

    .single-testimonials-h2 .quote-icon {
        position: absolute;
        top: -15px;
        left: -8px;
        font-size: 32px;
        color: var(--color-primary-0);
        opacity: 0.3;
    }

    .single-testimonials-h2 .disc {
        font-style: italic;
        color: #333;
        line-height: 1.8;
        margin: 10px 0 0;
        font-size: 1.3rem;
        font-weight: 400;
        letter-spacing: 0.01em;
    }

    .single-testimonials-h2 .footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 15px;
        padding-top: 15px;
    }

    .single-testimonials-h2 .left {
        display: flex;
        align-items: center;
    }

    .single-testimonials-h2 .thumbnail-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 20px;
        border: 3px solid var(--color-primary-0);
        position: relative;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .single-testimonials-h2 .thumbnail {
        display: block;
        width: 100%;
        height: 100%;
    }

    .single-testimonials-h2 .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .single-testimonials-h2 .thumbnail:hover img {
        transform: scale(1.1);
    }

    .single-testimonials-h2 .desig {
        flex: 1;
    }

    .single-testimonials-h2 .desig .title {
        margin: 0 0 5px 0;
        font-size: 1.2rem;
        font-weight: 600;
        color: #222;
        transition: color 0.3s ease;
    }

    .single-testimonials-h2 .desig a:hover .title {
        color: var(--color-primary-0);
    }

    .single-testimonials-h2 .desig p {
        margin: 0;
        font-size: 1rem;
        color: #666;
    }

    .single-testimonials-h2 .stars-area ul {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .single-testimonials-h2 .stars-area li {
        margin-left: 3px;
    }

    .single-testimonials-h2 .stars-area li i {
        color: #FFD700;
        font-size: 1.1rem;
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
        .single-testimonials-h2 {
            padding: 25px;
        }

        .single-testimonials-h2 .disc {
            font-size: 1.05rem;
        }

        .single-testimonials-h2 .thumbnail-wrapper {
            width: 70px;
            height: 70px;
        }

        .single-testimonials-h2 .footer {
            flex-direction: column;
            align-items: flex-start;
        }

        .single-testimonials-h2 .right {
            margin-top: 15px;
            align-self: flex-end;
        }
    }
</style>
