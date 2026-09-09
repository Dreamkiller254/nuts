<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Nuts Paradise — South African macadamia and cashew processing for global buyers. A cinematic origin-led design direction.">
        <title>Nuts Paradise — Rooted in Africa | Concept 03</title>
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxAppearance
        <link rel="stylesheet" href="{{ asset('assets/common.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/concept-3.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/design3.css') }}">
    </head>
    <body data-concept="3">
        <a class="skip-link" href="#main">Skip to content</a>

        <div class="cinema">
            <img class="cinema-image" src="{{ asset('assets/photos/orchard-canopy.jpg') }}" alt="An aerial study of lush orchard trees arranged in rows" width="1894" height="2651" fetchpriority="high">
            <header class="np-header np-container">
                <a class="np-brand" href="{{ route('home') }}">
                    <img class="np-logo" src="{{ asset('logo.webp') }}" alt="Nuts Paradise" width="500" height="287">
                </a>
                <nav class="np-links" aria-label="Main navigation">
                    <a href="#about">Our story</a>
                    <a href="#products">Our products</a>
                    <a href="#processing">Our process</a>
                    <a href="#logistics">Our reach</a>
                    <a href="#quality">Our standard</a>
                    <a class="np-button" href="#enquiry" data-enquiry>Request a Quote <span>↗</span></a>
                </nav>
                <button class="np-menu-toggle" type="button">Menu ☰</button>
            </header>

            <main id="main">
                <section class="hero np-container">
                    <div class="hero-topline">
                        <span class="np-label">South African processor &amp; exporter</span>
                        <span class="np-label">African origin. Global perspective.</span>
                    </div>
                    <h1>Rooted in Africa.<br><em>Ready for the world.</em></h1>
                    <div class="hero-bottom">
                        <p>Macadamias and cashews. Carefully processed in South Africa, prepared for the possibilities of a global market.</p>
                        <a class="np-button lime" href="#products">Explore our products <span>↗</span></a>
                        <a class="scroll-cue" href="#about" aria-label="Discover our story">↓</a>
                    </div>
                </section>
            </main>

            <div class="cinema-footer np-container">
                <span>MACADAMIA &amp; CASHEW PROCESSING</span>
                <span>MACADAMIA ORCHARD ORIGIN · SOUTH AFRICAN PROCESSING</span>
            </div>
        </div>

        <section class="evidence">
            <div class="np-container evidence-grid">
                <div><span class="np-label">01 / Our home</span><strong>South Africa</strong><span>Processing in Mbombela</span></div>
                <div><span class="np-label">02 / Our capacity</span><strong>1,000 <small>MT</small></strong><span>Up to, per month</span></div>
                <div><span class="np-label">03 / Our standard</span><strong>FSSC 22000</strong><span>Certified for both product categories</span></div>
            </div>
        </section>

        <section class="np-section np-container story" id="about">
            <div class="story-title reveal">
                <span class="np-label">A world of possibility, from here.</span>
                <h2>Great origins.<br><em>Greater connections.</em></h2>
                <a href="#processing" class="under-link">Discover our approach <span>↗</span></a>
            </div>
            <div class="story-copy reveal">
                <p class="large-copy">The distance between an African nut and a global market is measured in more than miles.</p>
                <p class="np-body">It takes thoughtful processing, clear quality expectations and a partner who understands your business. From our base in Mbombela, Nuts Paradise brings those things together for professional buyers.</p>
                <div class="story-signature"><span class="np-mark" aria-hidden="true"></span><span>AFRICAN ORIGIN<br>SOUTH AFRICAN EXPERTISE</span></div>
            </div>
        </section>

        <section class="collection np-section" id="products">
            <div class="np-container">
                <div class="np-section-head reveal">
                    <div><span class="np-label">Our product collection</span><h2>Two remarkable nuts.<br><em>Endless possibilities.</em></h2></div>
                    <p class="np-body">For importers, manufacturers, distributors and retail buyers. Your requirements shape the conversation.</p>
                </div>
                <div class="collection-grid">
                    <article class="collection-card reveal">
                        <div class="product-image"><img src="{{ asset('assets/photos/macadamias.jpg') }}" alt="Whole and cracked macadamias showing the pale kernels" width="1800" height="1200" loading="lazy"><span class="product-no">01</span></div>
                        <div class="collection-info"><div><span class="np-label">Naturally distinctive</span><h3>Macadamias</h3></div><a href="#enquiry" data-enquiry data-product="Macadamias" class="round-link" aria-label="Enquire about macadamias">↗</a></div>
                        <p class="np-body">Macadamia products processed in South Africa for your food, ingredient and retail requirements.</p>
                    </article>
                    <article class="collection-card reveal">
                        <div class="product-image"><img src="{{ asset('assets/photos/cashews.jpg') }}" alt="A close-up of curved, cream-coloured cashew kernels" width="1500" height="2250" loading="lazy"><span class="product-no">02</span></div>
                        <div class="collection-info"><div><span class="np-label">Remarkably versatile</span><h3>Cashews</h3></div><a href="#enquiry" data-enquiry data-product="Cashews" class="round-link" aria-label="Enquire about cashews">↗</a></div>
                        <p class="np-body">Cashew products prepared around agreed specifications and professional buyer requirements.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="process np-section" id="processing">
            <div class="np-container process-grid">
                <div class="process-image reveal"><img src="{{ asset('assets/photos/harvest-hands.jpg') }}" alt="Hands holding freshly gathered macadamia nuts" width="1400" height="933" loading="lazy"><span class="photo-caption">MACADAMIA ORIGIN · PREPARED FOR GLOBAL FOOD MARKETS</span></div>
                <div class="process-copy reveal">
                    <span class="np-label">From origin to export</span>
                    <h2>Good things<br>deserve <em>great care.</em></h2>
                    <p class="np-body">Our Riverside Park operation connects product preparation, quality management and export readiness.</p>
                    <div class="process-steps">
                        <div><span>01</span><section><h3>Understand your requirements</h3><p>Product, volume, destination and timing.</p></section></div>
                        <div><span>02</span><section><h3>Align the processing</h3><p>Preparation shaped by agreed buyer requirements.</p></section></div>
                        <div><span>03</span><section><h3>Prepare for what comes next</h3><p>Quality oversight and coordinated export preparation.</p></section></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="logistics np-section" id="logistics">
            <div class="np-container logistics-grid">
                <div class="logistics-copy reveal">
                    <span class="np-label">From local roots to global routes</span>
                    <h2>Ready for the<br><em>right destination.</em></h2>
                    <p class="np-body">A useful supply partner makes the next step feel clear: the right format, the right documentation and a plan that respects your market.</p>
                    <div class="logistics-points">
                        <div><span>01</span><p><strong>Market fit</strong> Align product, pack and specification to the brief.</p></div>
                        <div><span>02</span><p><strong>Export readiness</strong> Coordinate the details that keep a shipment moving.</p></div>
                        <div><span>03</span><p><strong>Long-term thinking</strong> Build a relationship beyond a single order.</p></div>
                    </div>
                </div>
                <div class="logistics-image reveal"><img src="{{ asset('assets/photos/export.jpg') }}" alt="Crates prepared for export at a logistics facility" width="1600" height="1067" loading="lazy"><span class="photo-caption">EXPORT PREPARATION · MACADAMIA &amp; CASHEW SUPPLY</span></div>
            </div>
        </section>

        <section class="quality np-container" id="quality">
            <div class="quality-inner reveal">
                <div><span class="np-label">A standard worth sharing</span><h2>Confidence,<br><em>built in.</em></h2></div>
                <div class="quality-statement"><span class="cert-type">FSSC 22000</span><p class="np-body">Certified processing for both macadamias and cashews. Quality management that belongs at the heart of your supply chain.</p><a class="under-link" href="#enquiry" data-enquiry>Discuss your quality requirements <span>↗</span></a></div>
            </div>
        </section>

        <section class="closing np-section np-container"><span class="np-label">Let's grow something together</span><h2>Your next supply partner<br>starts <em>right here.</em></h2><a class="np-button lime" href="#enquiry" data-enquiry>Request a Quote <span>↗</span></a></section>

        <footer class="np-footer">
            <div class="np-container">
                <div class="np-footer-top">
                    <div><a class="np-brand" href="{{ route('home') }}"><img class="np-logo" src="{{ asset('logo.webp') }}" alt="Nuts Paradise" width="500" height="287"></a><p>South African macadamia &amp; cashew processing. From African origin to global market.</p></div>
                    <nav aria-label="Footer navigation"><a href="#about">Our story</a><a href="#products">Products</a><a href="#processing">Processing</a><a href="#logistics">Our reach</a><a href="#enquiry" data-enquiry>Let's talk ↗</a></nav>
                </div>
                <div class="np-footer-bottom"><span>Riverside Park · Mbombela · South Africa</span><a href="{{ route('photography') }}" wire:navigate>Photography details ↗</a></div>
            </div>
        </footer>

        <dialog class="np-dialog" id="enquiry" aria-labelledby="enquiry-title">
            <button class="np-close" type="button" aria-label="Close enquiry">×</button>
            <div class="np-label">Nuts Paradise · Buyer enquiries</div>
            <h2 id="enquiry-title">Let's talk about<br>your next shipment.</h2>
            <p>Tell us what you need. Start with the product, volume and destination, and build your buyer enquiry.</p>
            <form>
                <div class="form-grid">
                    <label>Full name<input name="Full name" autocomplete="name" required></label>
                    <label>Company name<input name="Company" autocomplete="organization" required></label>
                    <label>Business email<input name="Business email" type="email" autocomplete="email" required></label>
                    <label>Country<input name="Country" autocomplete="country-name" required></label>
                    <label>Product interest<select name="Product"><option>Macadamias</option><option>Cashews</option><option>Both</option></select></label>
                    <label>Estimated volume<input name="Volume" placeholder="e.g. 10 MT per month" required></label>
                    <label class="full">Destination market<input name="Destination market" required></label>
                    <label class="full">Anything else we should know?<textarea name="Message" placeholder="Specifications, timing or other requirements"></textarea></label>
                </div>
                <button class="np-button" type="submit">Save enquiry brief <span aria-hidden="true">↗</span></button>
                <p class="form-note">Design preview: this saves your enquiry to your device. No information is sent.</p>
                <p class="form-status" role="status" aria-live="polite"></p>
            </form>
        </dialog>

        @fluxScripts
        <script src="{{ asset('assets/design3.js') }}" data-navigate-once defer></script>
    </body>
</html>
