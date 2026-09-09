<x-layouts.site>
    <section class="site-page-hero">
        <p class="site-kicker">Nuts Paradise / {{ $eyebrow }}</p>
        <h1>{{ $heading }}</h1>
        <p class="site-lede">{{ $summary }}</p>
    </section>
    <section class="site-page-note">
        <span class="site-card-index">Nuts Paradise</span>
        <h2>Professional macadamia and cashew supply from South Africa.</h2>
        <p>Speak with the Nuts Paradise team about product requirements, processing, quality information and international supply.</p>
        <a class="site-button site-button-primary" href="{{ route('contact') }}" wire:navigate>Start a conversation <span aria-hidden="true">→</span></a>
    </section>
</x-layouts.site>
