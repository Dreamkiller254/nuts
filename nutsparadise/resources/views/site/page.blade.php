<x-layouts.site>
    <section class="site-page-hero">
        <p class="site-kicker">Nuts Paradise / {{ $eyebrow }}</p>
        <h1>{{ $heading }}</h1>
        <p class="site-lede">{{ $summary }}</p>
    </section>
    <section class="site-page-note">
        <span class="site-card-index">In progress</span>
        <h2>This page is ready for the next model.</h2>
        <p>The route, shell and fast navigation are in place. Add verified content, photography and the appropriate Livewire component here without changing the shared navigation contract.</p>
        <a class="site-button site-button-primary" href="{{ route('contact') }}" wire:navigate>Start a conversation <span aria-hidden="true">→</span></a>
    </section>
</x-layouts.site>
