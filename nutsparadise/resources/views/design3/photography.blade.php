<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Photography credits · Nuts Paradise</title>
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('assets/common.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/concept-3.css') }}">
    </head>
    <body>
        <main class="np-container np-section">
            <a class="under-link" href="{{ route('home') }}" wire:navigate>← Back to Nuts Paradise</a>
            <span class="np-label" style="display:block;margin-top:70px">Photography credits</span>
            <h1>Illustrative imagery used in Concept 03.</h1>
            <p class="np-body" style="max-width:560px">These images are retained as illustrative stock photography while the final brand photography brief is developed with the client.</p>
            <div class="collection-grid" style="margin-top:50px">
                @foreach (['orchard-canopy.jpg' => 'Orchard canopy', 'macadamias.jpg' => 'Macadamias', 'cashews.jpg' => 'Cashews', 'harvest-hands.jpg' => 'Harvest hands', 'export.jpg' => 'Export preparation'] as $image => $label)
                    <figure><img src="{{ asset('assets/photos/'.$image) }}" alt="{{ $label }}" loading="lazy"><figcaption class="np-body">{{ $label }}</figcaption></figure>
                @endforeach
            </div>
        </main>
        @fluxScripts
    </body>
</html>
