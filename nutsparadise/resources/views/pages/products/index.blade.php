<x-layouts.site
    title="Macadamia and Cashew Products | Nuts Paradise"
    description="Explore macadamia and cashew products processed in South Africa by Nuts Paradise for international importers, distributors, manufacturers and ingredient buyers."
    body-class="content-page products-page"
>
    <x-site.page-hero
        eyebrow="Products"
        heading="Macadamia and Cashew Products"
        summary="A focused product portfolio for international food, retail, distribution and ingredient markets. The conversation starts with your approved specification and buying requirements."
        cta-label="Request a Quote"
        image="assets/photos/macadamias.jpg"
        image-alt="Macadamia nuts and pale kernels"
    />

    <section class="np-section np-container">
        <div class="np-section-head reveal">
            <div><span class="np-label">Two product families</span><h2>Focused by design.<br><em>Built for professional supply.</em></h2></div>
            <p class="np-body">Nuts Paradise currently presents only macadamias and cashews. Grades, kernel styles, sizes, packaging and shelf-life information remain unpublished until approved specification sheets are supplied.</p>
        </div>

        <div class="product-gateway-grid">
            <article class="product-gateway-card reveal">
                <div class="product-gateway-image"><img src="{{ asset('assets/photos/macadamia-dark.webp') }}" alt="Close-up of macadamia nuts" width="1800" height="3200" loading="lazy"></div>
                <div class="product-gateway-copy">
                    <span class="np-label">01 / Macadamias</span>
                    <h3>South African-processed macadamias</h3>
                    <p>Prepared around approved buyer specifications, volume, destination and timing requirements.</p>
                    <a class="under-link" href="{{ route('products.macadamias') }}" wire:navigate>Explore Macadamias <span>↗</span></a>
                </div>
            </article>
            <article class="product-gateway-card reveal">
                <div class="product-gateway-image"><img src="{{ asset('assets/photos/cashews.webp') }}" alt="Close-up of curved cashew kernels" width="1500" height="2250" loading="lazy"></div>
                <div class="product-gateway-copy">
                    <span class="np-label">02 / Cashews</span>
                    <h3>Cashews prepared for professional supply</h3>
                    <p>Prepared around agreed requirements for international food, ingredient, distribution and retail buyers.</p>
                    <a class="under-link" href="{{ route('products.cashews') }}" wire:navigate>Explore Cashews <span>↗</span></a>
                </div>
            </article>
        </div>
    </section>

    <section class="content-band">
        <div class="np-container specification-conversation reveal">
            <div><span class="np-label">The specification conversation</span><h2>Start with what<br><em>your market needs.</em></h2></div>
            <div class="requirements-list">
                <div><span>01</span><p><strong>Product</strong> Macadamias, cashews or both.</p></div>
                <div><span>02</span><p><strong>Specification</strong> Share the approved technical requirement you need us to review.</p></div>
                <div><span>03</span><p><strong>Volume</strong> Estimated order or monthly requirement.</p></div>
                <div><span>04</span><p><strong>Destination & timing</strong> Market and timing help shape the commercial conversation.</p></div>
            </div>
        </div>
    </section>

    <x-site.cta heading="Tell us what you need to source." copy="Send the product, specification, estimated volume, destination and timing. We will use those details as the starting point for a buyer conversation." />
</x-layouts.site>
