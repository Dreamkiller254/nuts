<x-layouts.site
    title="Nuts Paradise | South African Macadamia & Cashew Processor & Exporter"
    description="Nuts Paradise processes and exports macadamia and cashew products from South Africa. FSSC 22000 certified processing in Mbombela with 1,000 MT monthly capacity."
    body-class="home-page"
    image="assets/photos/orchard-canopy.jpg"
    image-alt="Illustrative aerial orchard photography representing African agricultural origin"
    preload-image="assets/photos/orchard-canopy.jpg"
>
    <section class="cinema home-cinema">
        <picture class="cinema-picture">
            <source media="(max-width: 767px)" srcset="{{ asset('assets/photos/orchard-canopy-mobile.webp') }}" type="image/webp">
            <source srcset="{{ asset('assets/photos/orchard-canopy-desktop.webp') }}" type="image/webp">
            <img class="cinema-image" src="{{ asset('assets/photos/orchard-canopy.jpg') }}" alt="An aerial study of lush orchard trees arranged in rows" width="1894" height="2651" fetchpriority="high" decoding="async">
        </picture>
        <div class="hero np-container">
            <div class="hero-topline">
                <span class="np-label">South African processor &amp; exporter</span>
                <span class="np-label">African Nuts. Processed for Global Markets.</span>
            </div>
            <h1>South African Macadamia &amp; Cashew Processing<br><em>for Global Markets.</em></h1>
            <div class="hero-bottom">
                <p>Nuts Paradise processes macadamia and cashew products in South Africa for international buyers seeking dependable product preparation, quality management and export support.</p>
                <a class="np-button lime" href="{{ route('contact') }}" wire:navigate>Request a Quote <span>↗</span></a>
                <a class="under-link home-products-link" href="{{ route('products.index') }}" wire:navigate>Explore Our Products <span>↗</span></a>
            </div>
            <div class="home-trust-line" aria-label="Nuts Paradise key facts">
                <span>FSSC 22000 Certified Processing</span>
                <span>1,000 MT Monthly Capacity</span>
                <span>South Africa</span>
            </div>
        </div>
        <div class="cinema-footer np-container">
            <span>MACADAMIA &amp; CASHEW PROCESSING</span>
            <span>ORCHARD STUDY · ILLUSTRATIVE PHOTOGRAPHY</span>
        </div>
    </section>

    <section class="evidence">
        <div class="np-container evidence-grid">
            <div><span class="np-label">01 / Processing</span><strong>South Africa</strong><span>Riverside Park, Mbombela</span></div>
            <div><span class="np-label">02 / Capacity</span><strong>1,000 <small>MT</small></strong><span>Processing capacity per month</span></div>
            <div><span class="np-label">03 / Certification</span><strong>FSSC 22000</strong><span>Macadamia &amp; cashew processing</span></div>
        </div>
    </section>

    <section class="np-section np-container story" id="origin">
        <div class="story-title reveal">
            <span class="np-label">From African Origin to Global Market</span>
            <h2>Processing confidence.<br><em>Built in South Africa.</em></h2>
            <a href="{{ route('about') }}" wire:navigate class="under-link">Discover Nuts Paradise <span>↗</span></a>
        </div>
        <div class="story-copy reveal">
            <p class="large-copy">The distance between an African nut and a global market is measured in more than miles.</p>
            <p class="np-body">It takes controlled processing, clear quality expectations and a partner who understands professional buyer requirements. From our base in Mbombela, Nuts Paradise brings those things together for international supply.</p>
            <div class="story-signature"><span class="np-mark" aria-hidden="true"></span><span>AFRICAN ORIGIN<br>SOUTH AFRICAN PROCESSING</span></div>
        </div>
    </section>

    <section class="collection np-section">
        <div class="np-container">
            <div class="np-section-head reveal">
                <div><span class="np-label">Our products</span><h2>Macadamias &amp; cashews.<br><em>Prepared for professional buyers.</em></h2></div>
                <p class="np-body">For importers, manufacturers, distributors, retailers and ingredient buyers. Your requirements shape the conversation.</p>
            </div>
            <div class="collection-grid">
                <article class="collection-card reveal">
                    <div class="product-image"><img src="{{ asset('assets/photos/macadamias.webp') }}" alt="Whole and cracked macadamias showing pale kernels" width="1800" height="1200" loading="lazy" decoding="async"><span class="product-no">01</span></div>
                    <div class="collection-info"><div><span class="np-label">South African processed</span><h3>Macadamias</h3></div><a href="{{ route('products.macadamias') }}" wire:navigate class="round-link" aria-label="Explore macadamias">↗</a></div>
                    <p class="np-body">Macadamia products processed in South Africa around approved professional buyer requirements.</p>
                </article>
                <article class="collection-card reveal">
                    <div class="product-image"><img src="{{ asset('assets/photos/cashews.webp') }}" alt="A close-up of curved cream-coloured cashew kernels" width="1500" height="2250" loading="lazy" decoding="async"><span class="product-no">02</span></div>
                    <div class="collection-info"><div><span class="np-label">Professional supply</span><h3>Cashews</h3></div><a href="{{ route('products.cashews') }}" wire:navigate class="round-link" aria-label="Explore cashews">↗</a></div>
                    <p class="np-body">Cashew products prepared around agreed specifications and professional buyer requirements.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="process np-section">
        <div class="np-container process-grid">
            <div class="process-image reveal"><img src="{{ asset('assets/photos/harvest-hands.webp') }}" alt="Hands holding freshly gathered macadamia nuts" width="1400" height="933" loading="lazy" decoding="async"><span class="photo-caption">ORIGIN STUDY · ILLUSTRATIVE PHOTOGRAPHY</span></div>
            <div class="process-copy reveal">
                <span class="np-label">Processing in Mbombela</span>
                <h2>Built around<br><em>buyer requirements.</em></h2>
                <p class="np-body">Our Riverside Park operation connects processing, quality management and export preparation.</p>
                <div class="process-steps">
                    <div><span>01</span><section><h3>Understand the requirement</h3><p>Product, volume, destination and timing.</p></section></div>
                    <div><span>02</span><section><h3>Align the processing</h3><p>Preparation shaped by agreed buyer requirements.</p></section></div>
                    <div><span>03</span><section><h3>Prepare for what comes next</h3><p>Quality oversight, documentation and export preparation.</p></section></div>
                </div>
                <a class="under-link" href="{{ route('processing') }}" wire:navigate>Explore Processing <span>↗</span></a>
            </div>
        </div>
    </section>

    <section class="quality np-container">
        <div class="quality-inner reveal">
            <div><span class="np-label">Quality & certification</span><h2>Confidence,<br><em>built in.</em></h2></div>
            <div class="quality-statement"><span class="cert-type">FSSC 22000</span><p class="np-body">Certified processing for both macadamias and cashews. Quality management sits at the centre of the professional supply conversation.</p><a class="under-link" href="{{ route('quality') }}" wire:navigate>Explore Quality & Certification <span>↗</span></a></div>
        </div>
    </section>

    <section class="home-buyers np-section">
        <div class="np-container home-buyers-grid reveal">
            <div><span class="np-label">For international buyers</span><h2>Start with the<br><em>requirements that matter.</em></h2></div>
            <div>
                <p class="np-body">Product interest, estimated volume, destination market and timing give us the right place to begin.</p>
                <div class="home-buyer-actions">
                    <a class="np-button" href="{{ route('buyers') }}" wire:navigate>For Buyers <span>↗</span></a>
                    <a class="under-link" href="{{ route('contact') }}" wire:navigate>Request a Quote <span>↗</span></a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.site>
