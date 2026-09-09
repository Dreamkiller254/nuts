<x-layouts.site :title="$title" :description="$description" body-class="inner-page">
    <section class="inner-hero">
        <div class="np-container inner-hero-grid">
            <div class="reveal">
                <span class="np-label">{{ $eyebrow }}</span>
                <h1>{{ $heading }}</h1>
            </div>
            <div class="inner-hero-copy reveal">
                <p>{{ $summary }}</p>
                @unless(in_array($name, ['contact', 'privacy', 'terms'], true))
                    <a class="np-button lime" href="{{ route('contact') }}" wire:navigate>Request a Quote <span>↗</span></a>
                @endunless
            </div>
        </div>
    </section>

    <section class="inner-proof">
        <div class="np-container inner-proof-grid reveal">
            <div><span class="np-label">Processing base</span><strong>Mbombela</strong><p>Riverside Park, South Africa</p></div>
            <div><span class="np-label">Processing capacity</span><strong>1,000 MT</strong><p>Per month</p></div>
            <div><span class="np-label">Certified processing</span><strong>FSSC 22000</strong><p>Macadamias &amp; cashews</p></div>
        </div>
    </section>

    <section class="np-section np-container inner-intro reveal">
        @if($name === 'contact')
            <span class="np-label">Buyer enquiry</span>
            <h2>Product. Volume.<br><em>Destination. Timing.</em></h2>
            <p class="np-body">The public front end is being completed first. The production enquiry workflow will be connected after the website experience is approved, without changing this route or navigation structure.</p>
        @elseif($name === 'privacy')
            <span class="np-label">Launch requirement</span>
            <h2>Clear data handling,<br><em>without invented policy.</em></h2>
            <p class="np-body">Final privacy wording and enquiry consent language will be added from client-approved legal copy before form persistence is enabled.</p>
        @elseif($name === 'terms')
            <span class="np-label">Launch requirement</span>
            <h2>Website terms,<br><em>client approved.</em></h2>
            <p class="np-body">Final terms will be published here once approved. No legal or commercial terms are being invented to fill the page.</p>
        @else
            <span class="np-label">Phase 1 foundation</span>
            <h2>A real destination,<br><em>ready for the full story.</em></h2>
            <p class="np-body">This route is now part of the permanent Nuts Paradise information architecture and shares the same premium navigation, SEO foundation and visual system as the homepage. Its full page-specific content is the next build pass.</p>
            <a class="under-link" href="{{ route('home') }}" wire:navigate>Return to Home <span>↗</span></a>
        @endif
    </section>
</x-layouts.site>
