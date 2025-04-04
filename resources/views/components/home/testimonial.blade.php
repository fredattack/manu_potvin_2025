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
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        padding: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .single-testimonials-h2:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .single-testimonials-h2 .body {
        position: relative;
        padding-bottom: 20px;
        flex-grow: 1;
    }
    
    .single-testimonials-h2 .quote-icon {
        position: absolute;
        top: -10px;
        left: -5px;
        font-size: 24px;
        color: var(--color-primary-0);
        opacity: 0.2;
    }
    
    .single-testimonials-h2 .disc {
        font-style: italic;
        color: #555;
        line-height: 1.7;
        margin: 0;
        font-size: 1rem;
    }
    
    .single-testimonials-h2 .footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
        border-top: 1px solid #f0f0f0;
        padding-top: 20px;
    }
    
    .single-testimonials-h2 .left {
        display: flex;
        align-items: center;
    }
    
    .single-testimonials-h2 .thumbnail-wrapper {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 15px;
        border: 2px solid var(--color-primary-0);
        position: relative;
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
        font-size: 1rem;
        font-weight: 600;
        color: #333;
        transition: color 0.3s ease;
    }
    
    .single-testimonials-h2 .desig a:hover .title {
        color: var(--color-primary-0);
    }
    
    .single-testimonials-h2 .desig p {
        margin: 0;
        font-size: 0.85rem;
        color: #777;
    }
    
    .single-testimonials-h2 .stars-area ul {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .single-testimonials-h2 .stars-area li {
        margin-left: 2px;
    }
    
    .single-testimonials-h2 .stars-area li i {
        color: #FFD700;
        font-size: 0.9rem;
    }
    
    /* Responsive adjustments */
    @media (max-width: 767px) {
        .single-testimonials-h2 {
            padding: 20px;
        }
        
        .single-testimonials-h2 .footer {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .single-testimonials-h2 .right {
            margin-top: 15px;
        }
    }
</style>
