<footer class="site-footer">
    <div class="np-container">
        <div class="site-footer-feature">
            <div class="site-footer-brand">
                <a class="np-brand" href="{{ route('home') }}" wire:navigate>
                    <img class="np-logo" src="{{ asset('logo.webp') }}" alt="Nuts Paradise" width="500" height="287">
                </a>
                <p>South African macadamia &amp; cashew processing for global markets.</p>
            </div>
            <div class="site-footer-message">
                <span class="np-label">Macadamia &amp; cashew processing</span>
                <h2>South African processing.<br><em>Global supply.</em></h2>
                <a class="np-button lime" href="{{ route('contact') }}" wire:navigate>Request a Quote <span aria-hidden="true">↗</span></a>
            </div>
        </div>

        <div class="site-footer-grid">
            <div class="site-footer-location">
                <span class="np-label">Nuts Paradise in South Africa</span>
                <div class="site-footer-locations">
                    <div class="site-footer-location-card">
                        <strong>Processing facility</strong>
                        <p>Riverside Park Industrial Zone, Rapid Street, Riverside Park, Mbombela, South Africa</p>
                    </div>
                    <div class="site-footer-location-card">
                        <strong>Administrative office</strong>
                        <p>222 Smit Street, Braamfontein 2000, Johannesburg, South Africa</p>
                    </div>
                </div>
            </div>

            <nav class="site-footer-nav" aria-label="Footer navigation">
                <div>
                    <span class="site-footer-heading">Explore</span>
                    <a href="{{ route('about') }}" wire:navigate>About Us</a>
                    <a href="{{ route('processing') }}" wire:navigate>Processing</a>
                    <a href="{{ route('quality') }}" wire:navigate>Quality &amp; Certification</a>
                    <a href="{{ route('traceability') }}" wire:navigate>Traceability</a>
                    <a href="{{ route('privacy') }}" wire:navigate>Privacy Policy</a>
                    <a href="{{ route('terms') }}" wire:navigate>Terms of Use</a>
                    <button type="button" class="site-footer-cookie-button" data-cookie-settings>Cookie settings</button>
                </div>
                <div>
                    <span class="site-footer-heading">Products</span>
                    <a href="{{ route('products.index') }}" wire:navigate>Macadamia &amp; Cashew Portfolio</a>
                    <a href="{{ route('products.macadamias') }}" wire:navigate>South African Macadamias</a>
                    <a href="{{ route('products.cashews') }}" wire:navigate>Cashews</a>
                </div>
                <div>
                    <span class="site-footer-heading">Connect</span>
                    <a href="{{ route('buyers') }}" wire:navigate>For Buyers</a>
                    <a href="{{ route('export-markets') }}" wire:navigate>Export Markets</a>
                    <a href="{{ route('contact') }}" wire:navigate>Contact Nuts Paradise</a>
                    <a href="tel:+27760204666">+27 76 020 4666</a>
                    <a href="mailto:info@nutsparadise.co.za">info@nutsparadise.co.za</a>
                </div>
            </nav>
        </div>

        <div class="site-footer-bottom">
            <span>© {{ now()->year }} Nuts Paradise</span>
            <span class="site-footer-credit">Designed by <a href="https://webunbounded.com/" target="_blank" rel="noopener noreferrer">Web Unbounded</a></span>
        </div>
    </div>
</footer>
