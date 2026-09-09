<x-layouts.site
    title="Page Not Found | Nuts Paradise"
    description="The requested Nuts Paradise page could not be found."
    body-class="content-page error-page"
    robots="noindex,follow"
>
    <section class="error-hero">
        <div class="np-container error-hero-grid">
            <div>
                <span class="np-label">404 / Page not found</span>
                <h1>This route reached<br><em>the wrong destination.</em></h1>
            </div>
            <div class="error-copy">
                <p>The page may have moved or the address may be incorrect. Continue to the product portfolio or start a buyer enquiry.</p>
                <div class="error-actions">
                    <a class="np-button lime" href="{{ route('products.index') }}" wire:navigate>Explore Products <span>↗</span></a>
                    <a class="under-link" href="{{ route('contact') }}" wire:navigate>Contact Nuts Paradise <span>↗</span></a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.site>
