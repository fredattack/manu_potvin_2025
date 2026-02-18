@if(isset($serviceArea) && $serviceArea->description)
<section class="rts-section-gap pb--0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog-single-post-listing details mb--0">
                    <div class="blog-listing-content">
                        <h2>Nos services à {{ $serviceArea->name }}</h2>
                        {!! $serviceArea->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
