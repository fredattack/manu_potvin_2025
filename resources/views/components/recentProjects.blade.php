<!-- single wizered start -->
<div class="rts-single-wized Recent-post">
    <div class="wized-header">
        <h5 class="title">
            Projets Récents
        </h5>
    </div>
    <div class="wized-body">
        <!-- recent-post -->
        @foreach( \App\Models\Realisation::whereJsonContains('category',$category)->take(4)->latest()->get() as $realisation)
            <div class="recent-post-single">
                <div class="thumbnail">
                    <a href="{{ route('pages.details',['realisation'=>$realisation]) }}"  target="_blank">{!! $realisation->image !!}</a>
                </div>
                <div class="content-area">
                    <div class="user">
                        <i class="fal fa-clock"></i>
                        <span>{{$realisation->date->format('d M Y')}}</span>
                    </div>
                    <a class="post-title" href="{{ route('pages.details',['realisation'=>$realisation]) }}"  target="_blank">
                        <h6 class="title">{{$realisation->title}}</h6>
                    </a>
                </div>
            </div>
        @endforeach
        <!-- recent-post End -->

    </div>
</div>
<!-- single wizered End -->
