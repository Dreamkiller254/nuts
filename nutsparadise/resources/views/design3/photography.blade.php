<x-layouts.site
    title="Photography Credits | Nuts Paradise"
    description="Credits for temporary illustrative photography used on the Nuts Paradise website while original facility and product photography is developed."
    body-class="content-page photography-page"
    robots="noindex,follow"
    image="assets/photos/orchard-canopy.jpg"
    image-alt="Illustrative orchard photography used temporarily on the Nuts Paradise website"
>
    <section class="content-hero compact-hero">
        <div class="np-container content-hero-grid">
            <div>
                <span class="np-label">Photography Credits</span>
                <h1>Illustrative imagery,<br><em>clearly identified.</em></h1>
            </div>
            <div class="content-hero-copy">
                <p>These stock images are temporary visual references while original Nuts Paradise facility, processing, product and dispatch photography is developed and approved.</p>
                <a class="under-link light-link" href="{{ route('home') }}" wire:navigate>Back to Home <span>↗</span></a>
            </div>
        </div>
    </section>

    <section class="np-section np-container">
        <div class="np-section-head">
            <div>
                <span class="np-label">Temporary visual library</span>
                <h2>Stock photography used<br><em>without facility claims.</em></h2>
            </div>
            <p class="np-body">None of the images below should be interpreted as a photograph of the Nuts Paradise processing facility, certification system or equipment unless the client later confirms otherwise.</p>
        </div>

        <div class="credit-grid">
            @foreach ([
                'orchard-canopy.jpg' => 'Orchard canopy study',
                'macadamias.jpg' => 'Macadamia product study',
                'cashews.jpg' => 'Cashew product study',
                'harvest-hands.jpg' => 'Harvest and origin study',
                'export.jpg' => 'Export and logistics study',
            ] as $image => $label)
                <figure class="credit-card">
                    <div class="credit-image"><img src="{{ asset('assets/photos/'.$image) }}" alt="{{ $label }}" loading="lazy" decoding="async"></div>
                    <figcaption><span class="np-label">Illustrative stock photography</span><strong>{{ $label }}</strong></figcaption>
                </figure>
            @endforeach
        </div>
    </section>
</x-layouts.site>
