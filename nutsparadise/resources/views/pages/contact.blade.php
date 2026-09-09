<x-layouts.site
    title="Contact Nuts Paradise | Macadamia & Cashew Enquiries"
    description="Contact Nuts Paradise to discuss South African macadamia and cashew processing, product requirements and export opportunities."
    body-class="content-page contact-page"
>
    <x-site.page-hero
        eyebrow="Contact Us"
        heading="Start With Your Requirements"
        summary="Product interest, estimated volume, destination market and timing give us the right place to begin a professional buyer conversation."
        :cta-label="null"
    />

    <section class="np-section np-container contact-layout">
        <div class="contact-intro reveal">
            <span class="np-label">Buyer enquiry</span>
            <h2>Product. Volume.<br><em>Destination. Timing.</em></h2>
            <p class="np-body">Use the enquiry form to prepare the details needed for a buyer conversation. Online submission is not enabled yet, so nothing entered here is sent or stored.</p>

            <div class="contact-location-list">
                <div><span class="np-label">Processing facility</span><strong>Mbombela</strong><p>Riverside Park Industrial Zone, Rapid Street, Riverside Park, Mbombela, South Africa</p></div>
                <div><span class="np-label">Administrative office</span><strong>Johannesburg</strong><p>222 Smit Street, Braamfontein 2000, Johannesburg, South Africa</p></div>
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
            </div>
            <button class="np-button lime" type="submit">Check Enquiry Details <span aria-hidden="true">↗</span></button>
            <p class="form-preview-note">Enquiry preview · Nothing is sent or stored.</p>
            <p class="form-status" role="status" aria-live="polite"></p>
        </form>
    </section>

    <section class="contact-boundary">
        <div class="np-container contact-public-details reveal">
            <div class="contact-public-copy">
                <span class="np-label">Contact Nuts Paradise</span>
                <h2>Start the<br><em>conversation.</em></h2>
                <p>Speak with the Nuts Paradise team about macadamia and cashew processing, product requirements and professional supply.</p>
                <div class="contact-detail-list">
                    <a href="tel:+27760204666"><span class="np-label">Call us</span><strong>+27 76 020 4666</strong></a>
                    <a href="mailto:info@nutsparadise.co.za"><span class="np-label">Email us</span><strong>info@nutsparadise.co.za</strong></a>
                    <div><span class="np-label">Johannesburg office</span><strong>222 Smit Street, Braamfontein 2000, Johannesburg, South Africa</strong></div>
                </div>
            </div>
            <div class="contact-map-wrap">
                <iframe
                    title="Nuts Paradise Johannesburg office at 222 Smit Street"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.437839204333!2d28.038759904556!3d-26.194373601498437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950c1f5b0c5207%3A0x4b302f20b8dc8175!2s222%20Smit%20St%2C%20Braamfontein%2C%20Johannesburg%2C%202017%2C%20South%20Africa!5e0!3m2!1sen!2ske!4v1742303428780!5m2!1sen!2ske"
                    width="600"
                    height="450"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>
</x-layouts.site>
