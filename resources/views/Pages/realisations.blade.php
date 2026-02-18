@extends('Layouts.app')

@section('title')
Nos Réalisations
@endsection
@section('meta_description', 'Découvrez nos réalisations en châssis PVC et aluminium, portes, fenêtres et pergolas à Hannut et Waremme. Photos de projets réels par Manu Potvin.')
@section('meta_keywords', 'réalisations, exemples travaux, châssis, portes, pergolas')
@section('og_title', 'Nos Réalisations - Inspiration pour vos projets')
@section('og_description', 'Explorez nos projets achevés et inspirez-vous pour vos châssis, fenêtres ou pergolas.')
@section('og_image',asset('assets/images/custom/default/portes-de-garage/porte_garage_main_2.jpeg'))
@section('twitter_title', 'Nos Réalisations - Inspiration garantie')
@section('twitter_description', 'Parcourez nos réalisations pour découvrir nos solutions sur mesure en châssis et pergolas.')
@section('twitter_image', asset('assets/images/custom/default/portes-de-garage/porte_garage_main_2.jpeg'))

@section('content')
 @include('components.header')

    <div class="rts-project-area rts-section-gap  mt--100">
        <div class="container">

        <div class="style">
            <h1 class="title">Nos Réalisations</h1>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-button-area-one">
                        @php($categories = [
                                            ["key"=>"home","label"=>'Tout'],
                                            ["key"=>"chassis","label"=>'Châssis'],
                                            ["key"=>"porte_de_garage","label"=>'Portes de garage'],
                                            ["key"=>"pergolas","label"=>'Pergolas'],
                                            ["key"=>"moustiquaires","label"=>'Moustiquaires']
                                            ])
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach($categories as $category)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{$category['key'] === 'home' ? 'active': '' }}" id="{{$category['key']}}-tab" data-bs-toggle="tab" data-bs-target="#{{$category['key']}}" type="button" role="tab" aria-controls="{{$category['key']}}" aria-selected="true">{{$category['label']}}</button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-content-area mt--50 mt_sm--30">
                        <div class="tab-content" id="myTabContent">
                            @foreach(\App\Enums\Categories::all() as $category)
                            <div class="tab-pane fade show active" id="{{$category['key']}}" role="tabpanel" aria-labelledby="{{$category['key']}}-tab">
                                <!-- tab product area -->
                                <div class="row g-5">
                                        <!-- single -product area -->
                                        @foreach($modelData  as $model)
                                            @if($category['key'] === 'home' || in_array($category['key'],$model->category))
                                                @include('components.realisation_element')
                                            @endif
                                        @endforeach
                                        <!-- single -product area End -->
                                </div>
                                <!-- tab product area end-->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project section end -->

@endsection
