@props([
    'eyebrow',
    'heading',
    'summary',
    'ctaLabel' => 'Request a Quote',
    'ctaRoute' => 'contact',
    'image' => null,
    'imageAlt' => '',
])

<section class="content-hero {{ $image ? 'content-hero-with-image' : '' }}">
    <div class="np-container content-hero-grid">
        <div class="content-hero-heading reveal">
            <span class="np-label">{{ $eyebrow }}</span>
            <h1>{{ $heading }}</h1>
        </div>
        <div class="content-hero-copy reveal">
            <p>{{ $summary }}</p>
            @if($ctaLabel)
                <a class="np-button lime" href="{{ route($ctaRoute) }}" wire:navigate>{{ $ctaLabel }} <span aria-hidden="true">↗</span></a>
            @endif
        </div>
    </div>
    @if($image)
        <div class="np-container content-hero-image reveal">
            <img src="{{ asset($image) }}" alt="{{ $imageAlt }}" fetchpriority="high">
            <span class="photo-caption">ILLUSTRATIVE PHOTOGRAPHY · TO BE REPLACED WITH APPROVED NUTS PARADISE PHOTOGRAPHY</span>
        </div>
    @endif
</section>
