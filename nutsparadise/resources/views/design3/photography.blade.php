<x-layouts.site
    title="Nuts Paradise Photography | South African Nut Processing"
    description="Photography supporting the Nuts Paradise story: South African macadamia and cashew processing, products and export preparation for global buyers."
    body-class="content-page photography-page"
    robots="noindex,follow"
    image="assets/photos/orchard-canopy.jpg"
    image-alt="Aerial orchard rows representing South African macadamia production"
>
    @php
        $creditImageDimensions = [
            'orchard-canopy.jpg' => [1894, 2651],
            'macadamias.jpg' => [1800, 1200],
            'cashews.jpg' => [1500, 2250],
            'harvest-hands.jpg' => [1400, 933],
            'export.jpg' => [1600, 1067],
        ];
    @endphp
    <section class="content-hero compact-hero">
        <div class="np-container content-hero-grid">
            <div>
                <span class="np-label">Photography Credits</span>
                <h1>Nut processing imagery,<br><em>from origin to market.</em></h1>
            </div>
            <div class="content-hero-copy">
                <p>Photography across the Nuts Paradise story — orchard origin, macadamia and cashew products, harvest handling and export preparation.</p>
                <a class="under-link light-link" href="{{ route('home') }}" wire:navigate>Back to Home <span>↗</span></a>
            </div>
        </div>
    </section>

    <section class="np-section np-container">
        <div class="np-section-head">
            <div>
                <span class="np-label">Business photography library</span>
                <h2>Macadamia and cashew supply<br><em>from South Africa to global buyers.</em></h2>
            </div>
            <p class="np-body">These images illustrate the product and processing journey behind Nuts Paradise, from South African agricultural origin through buyer-focused preparation and export readiness.</p>
        </div>

        <div class="credit-grid">
            @foreach ([
                'orchard-canopy.jpg' => 'Macadamia orchard origin',
                'macadamias.jpg' => 'South African macadamia products',
                'cashews.jpg' => 'Cashew kernels for professional supply',
                'harvest-hands.jpg' => 'Macadamia harvest handling',
                'export.jpg' => 'Export preparation for global markets',
            ] as $image => $label)
                <figure class="credit-card">
                    <div class="credit-image"><img src="{{ asset('assets/photos/'.str($image)->replaceEnd('.jpg', '.webp')) }}" alt="{{ $label }}" width="{{ $creditImageDimensions[$image][0] ?? 1600 }}" height="{{ $creditImageDimensions[$image][1] ?? 1067 }}" loading="lazy" decoding="async"></div>
                    <figcaption><span class="np-label">Nuts Paradise visual story</span><strong>{{ $label }}</strong></figcaption>
                </figure>
            @endforeach
        </div>
    </section>
</x-layouts.site>
