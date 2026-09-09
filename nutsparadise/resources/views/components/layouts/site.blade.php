@props([
    'title' => 'Nuts Paradise | South African Macadamia & Cashew Processor & Exporter',
    'description' => 'Nuts Paradise processes and exports macadamia and cashew products from South Africa for international buyers.',
    'bodyClass' => '',
    'robots' => 'index,follow',
    'image' => null,
    'imageAlt' => 'Illustrative macadamia photography for Nuts Paradise',
    'preloadImage' => null,
])
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <x-site.seo :title="$title" :description="$description" :robots="$robots" :image="$image" :image-alt="$imageAlt" />
        @if($preloadImage)
            <link rel="preload" as="image" href="{{ asset($preloadImage) }}" fetchpriority="high">
        @endif
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxAppearance
        <link rel="stylesheet" href="{{ asset('assets/common.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/concept-3.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/design3.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site-public.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/content-pages.css') }}">
    </head>
    <body class="np-site {{ $bodyClass }}">
        <a class="skip-link" href="#main">Skip to content</a>

        @persist('site-header')
            <x-site.header />
        @endpersist

        @persist('site-transition')
            <div class="np-transition" id="np-transition" aria-hidden="true" inert>
                <div class="np-transition-inner np-container">
                    <span class="np-label np-transition-label">Loading page</span>
                    <div class="np-skeleton np-skeleton-title"></div>
                    <div class="np-skeleton np-skeleton-copy"></div>
                    <div class="np-skeleton np-skeleton-copy short"></div>
                    <div class="np-skeleton-grid">
                        <div class="np-skeleton np-skeleton-card"></div>
                        <div class="np-skeleton np-skeleton-card"></div>
                        <div class="np-skeleton np-skeleton-card"></div>
                    </div>
                </div>
            </div>
        @endpersist

        <main id="main" tabindex="-1">
            <x-site.breadcrumbs />
            {{ $slot }}
        </main>

        <x-site.footer />

        @fluxScripts
        <script src="{{ asset('assets/site.js') }}" data-navigate-once defer></script>
    </body>
</html>
