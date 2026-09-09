@props([
    'eyebrow',
    'heading',
    'summary',
    'ctaLabel' => 'Request a Quote',
    'ctaRoute' => 'contact',
    'image' => null,
    'imageAlt' => '',
])
@php
    $imageDimensions = [
        'assets/photos/cashew-bowl.jpg' => [1600, 1067],
        'assets/photos/cashews.jpg' => [1500, 2250],
        'assets/photos/export.jpg' => [1600, 1067],
        'assets/photos/harvest-hands.jpg' => [1400, 933],
        'assets/photos/macadamia-dark.jpg' => [1800, 3200],
        'assets/photos/macadamias.jpg' => [1800, 1200],
        'assets/photos/orchard-canopy.jpg' => [1894, 2651],
    ];
    $photoCaptions = [
        'assets/photos/cashew-bowl.jpg' => 'Cashew products prepared for professional food buyers',
        'assets/photos/cashews.jpg' => 'Cashew kernels for South African nut processing and export',
        'assets/photos/export.jpg' => 'Export preparation for macadamia and cashew supply',
        'assets/photos/harvest-hands.jpg' => 'Macadamia origin and processing from South Africa',
        'assets/photos/macadamia-dark.jpg' => 'Macadamia products prepared for global food markets',
        'assets/photos/macadamias.jpg' => 'South African macadamia products for professional buyers',
        'assets/photos/orchard-canopy.jpg' => 'Macadamia orchard origin for South African nut processing',
    ];
    [$imageWidth, $imageHeight] = $imageDimensions[$image] ?? [1600, 1067];
    $photoCaption = $photoCaptions[$image] ?? 'Nuts Paradise macadamia and cashew processing for global buyers';
@endphp

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
            <img src="{{ asset(str($image)->replaceEnd('.jpg', '.webp')) }}" alt="{{ $imageAlt }}" width="{{ $imageWidth }}" height="{{ $imageHeight }}" fetchpriority="high">
            <span class="photo-caption">{{ $photoCaption }}</span>
        </div>
    @endif
</section>
