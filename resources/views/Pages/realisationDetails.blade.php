<?php
/** @var \App\Models\Realisation $realisation  */
?>
@extends('Layouts.app')

@section('title')
    Portfolio details (Business Consultant)
@endsection
@section('content')


    <!-- project details image area -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="big-bg-porduct-details" style="background: url({{asset("assets/images/custom/bg-00.webp")}})">
                        {!! $realisation->image !!}
                        <div class="project-info ">
                            <div class="info-head">
                                <h5 class="title">{{$realisation->title}}</h5>
                            </div>
                            <div class="info-body">
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Clients:</span>
                                        <h6 class="name">{{$realisation->customer}}</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Categories:</span>
                                        <h6 class="name">{{App\Enums\Categories::getCategoryLabels($realisation->category)}}</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Date:</span>
                                        <h6 class="name">{{$realisation->date->format('d M Y')}}</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info" style=" display: flex; align-items: center;">
                                    <div class="info-ico">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-details w-full" style="flex: 1;" >
                                        <span>Lieu:</span>
                                        @if($realisation->place)
                                        <h6 class="name">{{$realisation->place}}</h6>
                                        @endif
                                    </div>
                                </div>
                                <!-- end single info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--70 mb--50">
                <div class="col-12">
                    <div class="product-details-main-inner">
                        <h3 class="title">{{$realisation->title}}</h3>
                        @if($realisation->description)
                            <p class="italic">
                                “{{$realisation->description }}”</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row g-5 mb--60">
                <?php
                /** @var \App\Models\CustomerData $media  */
                ?>
                <x-lightbox-gallery :images="$realisation->images_lightbox" />



        </div>
    <!-- project details image area end -->
@endsection
