@extends('Layouts.app')

@section('title')
Nos Réalisations
@endsection
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
