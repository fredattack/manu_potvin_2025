@extends('Layouts.app')

@section('title')
Nos Réalisations
@endsection
@section('meta_description', 'Découvrez nos réalisations en châssis, portes, fenêtres et pergolas pour vous inspirer.')
@section('meta_keywords', 'réalisations, exemples travaux, châssis, portes, pergolas')
@section('og_title', 'Nos Réalisations - Inspiration pour vos projets')
@section('og_description', 'Explorez nos projets achevés et inspirez-vous pour vos châssis, fenêtres ou pergolas.')
@section('og_image',asset('assets/images/custom/default/portes-de-garage/porte_garage_main_2.jpeg'))
@section('twitter_title', 'Nos Réalisations - Inspiration garantie')
@section('twitter_description', 'Parcourez nos réalisations pour découvrir nos solutions sur mesure en châssis et pergolas.')
@section('twitter_image', asset('assets/images/custom/default/portes-de-garage/porte_garage_main_2.jpeg'))

@section('content')
 @include('components.header')

    <div class="rts-project-area rts-section-gap mt--100">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h1 class="title">Nos Réalisations</h1>
                <p class="subtitle">Découvrez nos projets réalisés avec passion et savoir-faire</p>
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
                        <ul class="nav nav-tabs filter-tabs" id="myTab" role="tablist">
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
                            <div class="tab-pane fade {{$category['key'] === 'home' ? 'show active': '' }}" id="{{$category['key']}}" role="tabpanel" aria-labelledby="{{$category['key']}}-tab">
                                <!-- tab product area -->
                                <div class="row g-4">
                                        <!-- single -product area -->
                                        @foreach($modelData as $model)
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

<style>
    .section-header {
        margin-bottom: 40px;
    }
    
    .section-header .title {
        font-size: 2.5rem;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }
    
    .section-header .title:after {
        content: '';
        position: absolute;
        width: 50px;
        height: 3px;
        background: var(--color-primary);
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .section-header .subtitle {
        color: #666;
        max-width: 700px;
        margin: 0 auto;
        margin-top: 20px;
    }
    
    .filter-tabs {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        border: none;
        margin-bottom: 30px;
    }
    
    .filter-tabs .nav-item {
        margin: 0 5px 10px;
    }
    
    .filter-tabs .nav-link {
        border: none;
        background: #f5f5f5;
        color: #333;
        border-radius: 30px;
        padding: 8px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .filter-tabs .nav-link:hover,
    .filter-tabs .nav-link.active {
        background: var(--color-primary);
        color: white;
    }
    
    @media (max-width: 768px) {
        .filter-tabs {
            justify-content: flex-start;
            overflow-x: auto;
            padding-bottom: 10px;
        }
        
        .filter-tabs .nav-item {
            flex: 0 0 auto;
        }
    }
</style>
@endsection
