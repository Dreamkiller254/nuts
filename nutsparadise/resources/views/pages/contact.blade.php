<x-layouts.site
    title="Contact Nuts Paradise | Macadamia & Cashew Enquiries"
    description="Contact Nuts Paradise to discuss South African macadamia and cashew processing, product requirements and export opportunities."
    body-class="content-page contact-page"
>
    <x-site.page-hero
        eyebrow="Contact Us"
        heading="Start With Your Requirements"
        summary="Tell us the product, estimated volume, destination market and timing. The backend workflow will be connected later without changing this public route or form structure."
        :cta-label="null"
    />

    <section class="np-section np-container contact-layout">
        <div class="contact-intro reveal">
            <span class="np-label">Buyer enquiry</span>
            <h2>Product. Volume.<br><em>Destination. Timing.</em></h2>
            <p class="np-body">This Phase 2 form is intentionally front-end only. It validates the buyer journey and fields now, but it does not pretend to send an email or save an enquiry before the backend is connected.</p>

            <div class="contact-location-list">
                <div><span class="np-label">Processing facility</span><strong>Mbombela</strong><p>Riverside Park Industrial Zone, Rapid Street, Riverside Park, Mbombela, South Africa</p></div>
                <div><span class="np-label">Administrative office</span><strong>Johannesburg</strong><p>Smit Street, Braamfontein 2000, Johannesburg, South Africa</p></div>
            </div>
        </div>

        <form class="buyer-enquiry-form reveal" data-preview-form novalidate>
            <div class="form-grid">
                <label>Full name<input name="full_name" autocomplete="name" required></label>
                <label>Company<input name="company" autocomplete="organization" required></label>
                <label>Business email<input name="email" type="email" autocomplete="email" required></label>
                <label>Country<input name="country" autocomplete="country-name" required></label>
                <label>Product interest<select name="product_interest" required><option value="">Select product</option><option>Macadamias</option><option>Cashews</option><option>Both</option></select></label>
                <label>Estimated volume<input name="estimated_volume" placeholder="e.g. 10 MT per month" required></label>
                <label class="full">Destination market<input name="destination_market" required></label>
                <label class="full">Message<textarea name="message" rows="5" placeholder="Specifications, timing or other requirements"></textarea></label>
                <label class="full consent"><input type="checkbox" name="consent" required><span>I understand this preview form is not yet connected to a backend. Final consent wording will be replaced with client-approved privacy language before production submissions are enabled.</span></label>
            </div>
            <button class="np-button lime" type="submit">Review Enquiry <span aria-hidden="true">↗</span></button>
            <p class="form-preview-note">Front-end preview only · Nothing is sent or stored.</p>
            <p class="form-status" role="status" aria-live="polite"></p>
        </form>
    </section>

    <section class="contact-boundary">
        <div class="np-container reveal">
            <span class="np-label">Approved contact details</span>
            <p>No public phone number, email address or map pin has been added because those details have not yet been approved for publication.</p>
        </div>
    </section>
</x-layouts.site>
