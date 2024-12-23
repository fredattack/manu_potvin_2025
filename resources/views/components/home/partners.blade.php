<div class="rts-client-area ptb--100 client-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="client-two-wrapper  ">
                @foreach(\App\Models\Partner::with('media')->get() as $partner)
                    {!! $partner->image !!}
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
