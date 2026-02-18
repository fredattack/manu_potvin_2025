@props(['faqs', 'sectionTitle' => 'Questions fréquentes'])

<div class="rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="title-area text-center">
                    <h2 class="title">{{ $sectionTitle }}</h2>
                </div>
                <div class="accordion-area mt--30">
                    <div class="accordion-one-inner">
                        <div class="accordion" id="faqAccordion">
                            @foreach($faqs as $index => $faq)
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="faqHeading{{ $index }}">
                                    <button class="accordion-button{{ $index > 0 ? ' collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $index }}">
                                        {{ $faq['question'] }}
                                    </button>
                                </h3>
                                <div id="faqCollapse{{ $index }}" class="accordion-collapse collapse{{ $index === 0 ? ' show' : '' }}" aria-labelledby="faqHeading{{ $index }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $index => $faq)
        {
            "@type": "Question",
            "name": @json($faq['question']),
            "acceptedAnswer": {
                "@type": "Answer",
                "text": @json($faq['answer'])
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
