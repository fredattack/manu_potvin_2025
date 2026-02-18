<div class="rts-latest-blog-three rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area blog-three text-center">
                    <span>Mises à jour</span>
                    <h2 class="title">Nos dernières réalisations</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            @foreach(\App\Enums\Categories::all() as $category)
                @if($category['key'] != \App\Enums\Categories::ALL->value)
                    @php($realisation = $favoritesRealisations->hasOneCategory($category['key'],'category')->first())

                    @if ($realisation instanceof \App\Models\Realisation)
                        <?php
                        /** @var \App\Models\Realisation $realisation  */
                        ?>
                        <!-- single blog -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="blog-three-wrapepr">


                                <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" class="main-thumbnail" target="_blank" >
                                    <img src="{{ $realisation->image_url }}" alt="Blog_image" width="100%" loading="lazy">
                                    <span class="badge-blog">{{\App\Enums\Categories::getLabelByKey($category['key'])}}</span>
                                </a>

                                <div class="blog-body">
                                    <div class="blog-header">
                                        <div class="left">
                                            <i class="far fa-clock"></i>
                                            <span>{{$realisation->date}}</span>
                                        </div>
                                        <div class="right">
                                            <i class="far fa-user"></i>
                                            <span>{{$realisation->customer}}</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}">
                                            <h5 class="title">
                                                {{$realisation->title}}
                                            </h5>
                                        </a>
                                        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" class="rts-btn btn-light-3" target="_blank">Détails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single blog -->
                   @endif
                 @endif
            @endforeach
        </div>
    </div>
</div>
