<div class="site-progress" wire:loading.delay aria-hidden="true"></div>

<nav class="site-nav" aria-label="Primary navigation">
    <a class="site-brand" href="{{ route('home') }}" wire:navigate>
        <img class="site-logo" src="{{ asset('logo.webp') }}" alt="{{ config('app.name', 'Nuts Paradise') }}" width="500" height="287">
    </a>

    <div class="site-nav-links">
        <a href="{{ route('about') }}" wire:navigate wire:current="site-nav-active">Origin</a>
        <a href="{{ route('products') }}" wire:navigate wire:current="site-nav-active">Products</a>
        <a href="{{ route('capabilities') }}" wire:navigate wire:current="site-nav-active">Capabilities</a>
        <a href="{{ route('quality') }}" wire:navigate wire:current="site-nav-active">Quality</a>
        <a href="{{ route('contact') }}" wire:navigate wire:current="site-nav-active">Contact</a>
    </div>

    <div class="site-nav-actions">
        @auth
            <a href="{{ route('dashboard') }}" wire:navigate wire:current="site-nav-active">Dashboard</a>
        @else
            @if (Route::has('login'))
                <a href="{{ route('login') }}" wire:navigate>Sign in</a>
            @endif
        @endauth
    </div>
</nav>
