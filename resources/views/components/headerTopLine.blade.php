<div class="row header-top-three">
    <div class="col-lg-6">
        <p class="top-left">Une envie, un projet ?
            Un rêve à réaliser ...
            <a href="{{ route('contactPage') }}">Contactez nous
                <i class="far fa-arrow-right"></i></a>
        </p>
    </div>
    <div class="col-lg-6 right-h-three">
        <div class="header-top-right">
            <div class="single-right email">
                <i class="fas fa-envelope "></i>
                <a href="#">{{$customerData->email}}</a>
            </div>
            <div class="single-right call">
                <i class="far fa-phone-volume"></i>
                <a href="#">{{$customerData->phone}}</a>
            </div>
        </div>
    </div>
</div>
