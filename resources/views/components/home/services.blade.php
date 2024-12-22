<div class="rts-service-area rts-section-gap pb--140">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center title-service-three">
                    <p class="pre-title">
                        Nos Services
                    </p>
                    <h2 class="title">Ce que nous réalisons</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <div class="col-12">
                <div class="swiper mySwiperh2_Service">

                        @php
                            $categories = isset($categories) ? $categories : \App\Enums\Categories::all();
                        @endphp
                    <div class="swiper-wrapper">
                        @foreach( $categories as $category)
                            @php
                            $service = $serviceListe->hasOneCategory(is_array($category) ? $category['key'] : $category->value,'category')?->first();
                            @endphp
                            <?php
                            /** @var \App\Models\Realisation $service  */
                            ?>
                        @if($service)
                                <div class="swiper-slide">
                                <div class="service-one-inner-four">
                                    <div class="big-thumbnail-area">
                                        <a href="#" class="thumbnail">
                                            @php
                                                ray($service->image)
                                            @endphp
                                            {!! $service->image !!}
                                        </a>
                                        <div class="content">
                                            <h5 class="title">{{\App\Enums\Categories::getCategoryLabels($service->category)}}</h5>
                                            <p class="disc">{{\App\Enums\Categories::getDescription($service->main_category)}}</p>
                                        </div>
                                        <a href="{{ route('pages',['type'=>\App\Enums\Categories::getUrlPath($service->main_category)]) }}" class="over_link"></a>
                                    </div>
                                    <a href="{{ route('pages',['type'=>\App\Enums\Categories::getUrlPath($service->main_category)])  }}" class="rts-btn btn-primary-3"> Voir
                                        Plus<i class="fal fa-arrow-right"></i></a>
                                </div>
                    </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt--80">
            <div class="col-12">
                <div class="pagination-arrow navigation-center-bottom service text-center position-relative">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
