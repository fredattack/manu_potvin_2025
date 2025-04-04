<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
    <?php
    /** @var \App\Models\Realisation $model */
    ?>
    <div class="rts-product-one">
        <div class="thumbnail-area">
            {!! $model->image !!}

            <a class="rts-btn btn-primary rounded" href="{{ route('pages.details',['realisation'=>$model]) }}" target="_blank"><i class="far fa-arrow-right"></i></a>
        </div>
        <div class="product-contact-wrapper">
            <span>{{ App\Enums\Categories::getCategoryLabels($model->category) }}</span>
            <a href="{{ route('pages.details',['realisation'=>$model]) }}" target="_blank">
                <h5 class="title">{{$model->title}}</h5>
            </a>
            <p class="disc">
                {{$model->description}}
            </p>
        </div>
    </div>
</div>

<style>
    /* Style pour uniformiser les images */
    .rts-product-one {
        height: 100%;
        transition: transform 0.3s ease;
    }
    
    .rts-product-one:hover {
        transform: translateY(-5px);
    }
    
    .rts-product-one .thumbnail-area {
        position: relative;
        width: 100%;
        padding-top: 75%; /* Ratio 4:3 */
        overflow: hidden;
    }
    
    .rts-product-one .thumbnail-area img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .rts-product-one .thumbnail-area .rts-btn {
        position: absolute;
        bottom: 20px;
        right: 20px;
        z-index: 2;
    }
    
    .rts-product-one .product-contact-wrapper {
        padding: 20px;
        background: #fff;
    }
    
    .rts-product-one .product-contact-wrapper span {
        display: inline-block;
        margin-bottom: 10px;
        font-size: 0.9rem;
    }
    
    .rts-product-one .product-contact-wrapper .title {
        margin-top: 5px;
        margin-bottom: 10px;
    }
    
    .rts-product-one .product-contact-wrapper .disc {
        color: #666;
        font-size: 0.9rem;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
