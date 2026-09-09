<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <meta name="description" content="Nuts Paradise — an origin-led, quality-first nuts and ingredients platform.">
    </head>
    <body class="site-body">
        <div class="site-frame">
            <x-site-navigation />
            <main id="main-content" tabindex="-1">
                {{ $slot }}
            </main>
        </div>

        @fluxScripts
    </body>
</html>
