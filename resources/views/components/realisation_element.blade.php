<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <?php
                                        /** @var \App\Models\Realisation $model  */
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
                                                <p class="disc">
                                                    {{$model->image_url}}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
