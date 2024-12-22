<?php
/** @var \App\Models\Realisation $realisation  */
?>
<div class="rts-business-case-s-2 style-home-7S">
    <a href="{{route('pages.details',['realisation'=>$realisation])}}" class="thumbnail">
        {!! $realisation->image !!}
    </a>
    <div class="inner">
        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}"  target="_blank">
            <h5 class="title">
                {{$realisation->title}}
            </h5>
        </a>
        <span></span>
    </div>
    <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" class="over_link"  target="_blank"></a>
</div>
