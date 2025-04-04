<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
    <?php
    /** @var \App\Models\Realisation $model */
    ?>
    <div class="rts-product-one realisation-card">
        <div class="thumbnail-area">
            <div class="image-container">
                {!! $model->image !!}
                <div class="overlay">
                    <a class="rts-btn btn-primary rounded" href="{{ route('pages.details',['realisation'=>$model]) }}" target="_blank">
                        <i class="far fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-contact-wrapper">
            <span class="category-badge">{{ App\Enums\Categories::getCategoryLabels($model->category) }}</span>
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
    .realisation-card {
        transition: all 0.3s ease;
        height: 100%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }
    
    .realisation-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .realisation-card .thumbnail-area {
        position: relative;
        overflow: hidden;
    }
    
    .realisation-card .image-container {
        position: relative;
        width: 100%;
        padding-top: 75%; /* 4:3 aspect ratio */
        overflow: hidden;
    }
    
    .realisation-card .image-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .realisation-card:hover .image-container img {
        transform: scale(1.05);
    }
    
    .realisation-card .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .realisation-card:hover .overlay {
        opacity: 1;
    }
    
    .realisation-card .product-contact-wrapper {
        padding: 20px;
        background: #fff;
    }
    
    .realisation-card .category-badge {
        display: inline-block;
        padding: 4px 10px;
        background: #f5f5f5;
        border-radius: 20px;
        font-size: 0.8rem;
        margin-bottom: 10px;
    }
    
    .realisation-card .title {
        margin-top: 5px;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .realisation-card .disc {
        color: #666;
        font-size: 0.9rem;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
