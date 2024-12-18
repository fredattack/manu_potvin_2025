<div class="rts-single-wized">
    <div class="wized-header">
        <h5 class="title">
            Mots clés
        </h5>
    </div>
    <div class="wized-body">
        <div class="tags-wrapper">
            @foreach($items as $item)
                <a href="#">{{$item}}</a>
            @endforeach
        </div>
    </div>
</div>
