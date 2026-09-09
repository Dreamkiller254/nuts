<header class="site-header-shell">
    <div class="site-header np-container">
        <a class="np-brand" href="{{ route('home') }}" wire:navigate aria-label="Nuts Paradise home">
            <img class="np-logo" src="{{ asset('logo.png') }}" alt="Nuts Paradise">
        </a>

        <nav class="site-desktop-nav" aria-label="Main navigation">
            <a href="{{ route('about') }}" wire:navigate wire:current="is-current">About</a>
            <a href="{{ route('products.index') }}" wire:navigate wire:current="is-current">Products</a>
            <a href="{{ route('processing') }}" wire:navigate wire:current="is-current">Processing</a>
            <a href="{{ route('quality') }}" wire:navigate wire:current="is-current">Quality</a>
            <a href="{{ route('traceability') }}" wire:navigate wire:current="is-current">Traceability</a>
            <a href="{{ route('buyers') }}" wire:navigate wire:current="is-current">Buyers</a>
            <a href="{{ route('export-markets') }}" wire:navigate wire:current="is-current">Export Markets</a>
            <a href="{{ route('contact') }}" wire:navigate wire:current="is-current">Contact</a>
        </nav>

        <div class="site-header-actions">
            <a class="np-button site-quote-button" href="{{ route('contact') }}" wire:navigate>Request a Quote <span aria-hidden="true">↗</span></a>
            <button class="np-menu-toggle site-menu-toggle" type="button" aria-controls="site-mobile-menu" aria-expanded="false">Menu <span aria-hidden="true">☰</span></button>
        </div>

        <dialog class="site-mobile-menu" id="site-mobile-menu" aria-label="Navigation">
            <div class="site-mobile-menu-top">
                <span class="np-label">Nuts Paradise</span>
                <button class="np-close site-menu-close" type="button" aria-label="Close menu">×</button>
            </div>
            <nav>
                <a href="{{ route('about') }}" wire:navigate wire:current="is-current">About Us</a>
                <a href="{{ route('products.index') }}" wire:navigate wire:current="is-current">Products</a>
                <a href="{{ route('processing') }}" wire:navigate wire:current="is-current">Processing</a>
                <a href="{{ route('quality') }}" wire:navigate wire:current="is-current">Quality & Certification</a>
                <a href="{{ route('traceability') }}" wire:navigate wire:current="is-current">Traceability</a>
                <a href="{{ route('buyers') }}" wire:navigate wire:current="is-current">Buyers</a>
                <a href="{{ route('export-markets') }}" wire:navigate wire:current="is-current">Export Markets</a>
                <a href="{{ route('contact') }}" wire:navigate wire:current="is-current">Contact Us</a>
            </nav>
            <a class="np-button lime site-mobile-quote" href="{{ route('contact') }}" wire:navigate>Request a Quote <span aria-hidden="true">↗</span></a>
            <small>South African macadamia & cashew processor & exporter</small>
        </dialog>
    </div>
</header>
