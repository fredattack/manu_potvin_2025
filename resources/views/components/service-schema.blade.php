@props(['serviceName', 'serviceType', 'description'])

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": @json($serviceName),
    "serviceType": @json($serviceType),
    "description": @json($description),
    "provider": {
        "@id": "{{ url('/') }}/#organization"
    },
    "areaServed": [
        {"@type": "City", "name": "Hannut"},
        {"@type": "City", "name": "Waremme"},
        {"@type": "City", "name": "Jodoigne"},
        {"@type": "City", "name": "Orp-Jauche"},
        {"@type": "City", "name": "Braives"},
        {"@type": "City", "name": "Hélécine"}
    ],
    "url": "{{ url()->current() }}"
}
</script>
