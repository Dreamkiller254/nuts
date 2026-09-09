<footer class="np-footer site-footer">
    <div class="np-container">
        <div class="np-footer-top">
            <div>
                <a class="np-brand" href="{{ route('home') }}" wire:navigate>
                    <img class="np-logo" src="{{ asset('logo.webp') }}" alt="Nuts Paradise" width="500" height="287">
                </a>
                <p>South African macadamia &amp; cashew processing for global markets.</p>
            </div>
            <nav aria-label="Footer navigation">
                <a href="{{ route('about') }}" wire:navigate>About Us</a>
                <a href="{{ route('products.index') }}" wire:navigate>Products</a>
                <a href="{{ route('processing') }}" wire:navigate>Processing</a>
                <a href="{{ route('quality') }}" wire:navigate>Quality</a>
                <a href="{{ route('traceability') }}" wire:navigate>Traceability</a>
                <a href="{{ route('buyers') }}" wire:navigate>Buyers</a>
                <a href="{{ route('export-markets') }}" wire:navigate>Export Markets</a>
                <a href="{{ route('contact') }}" wire:navigate>Contact</a>
            </nav>
        </div>
        <div class="site-location-grid">
            <div><span class="np-label">Processing facility</span><p>Riverside Park Industrial Zone, Rapid Street, Riverside Park, Mbombela, South Africa</p></div>
            <div><span class="np-label">Administrative office</span><p>Smit Street, Braamfontein 2000, Johannesburg, South Africa</p></div>
        </div>
        <div class="np-footer-bottom">
            <span>© {{ now()->year }} Nuts Paradise</span>
            <span class="site-legal-links"><a href="{{ route('privacy') }}" wire:navigate>Privacy Policy</a><a href="{{ route('terms') }}" wire:navigate>Terms of Use</a><a href="{{ route('photography') }}" wire:navigate>Photography credits</a></span>
        </div>
    </div>
</footer>
