<!-- single wizered start -->
<div class="rts-single-wized Recent-post">
    <div class="wized-header">
        <h5 class="title">
            Gallerie
        </h5>
    </div>

    <div class="wized-body">
        <div class="gallery-inner">
            @php
                $realisationListChunk = \App\Models\Realisation::whereJsonContains('category',$category)->inRandomOrder()->get()->chunk(3);
            @endphp
            @foreach ($realisationListChunk as $realisationList)
                <div class="row-1 single-row">
                    @foreach ($realisationList as $realisation)
                        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" target="_blank">{!! $realisation->image !!}</a>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- single wizered End -->
