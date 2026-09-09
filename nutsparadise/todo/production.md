# Production Content Replacement Job

**Job name:** Production Content Replacement & Placeholder Removal  
**Status:** Ready for handoff  
**Owner:** Next content/SEO implementation agent  
**Scope:** Public-facing copy only. Do not redesign the approved UI, change routes, or connect backend services in this job.

## Objective

Replace every visitor-facing provisional notice, draft shell, “will be added later” statement, preview disclaimer and unsupported-content warning with concise, client-approved production copy. The finished pages must read as complete, credible Nuts Paradise pages rather than a website under construction.

Use verified information supplied by Nuts Paradise or the client. Never invent grades, kernel styles, sizes, packaging, shelf life, nutrition, prices, availability, export destinations, ports, Incoterms, turnaround times, certifications, traceability systems or legal terms.

## Page-by-page replacement work

### 1. Contact Us — `/contact`

- Replace the paragraph explaining that online submission is not enabled and that nothing is sent or stored.
- Replace preview-only form behavior/copy in `public/assets/site.js` with approved production wording once the approved submission workflow exists.
- Keep the form fields, validation and layout unless the approved brief requires a change.
- Required inputs from the client: approved enquiry handling statement, public contact details, inbox, sender identity and privacy/consent wording.

### 2. Product Portfolio — `/products`

- Replace the notice that grades, sizes, packaging and shelf-life information remain unpublished.
- Supply a concise, factual overview of the macadamia and cashew portfolio.
- Required inputs: approved product families, formats, grades/styles, sizes, packaging, shelf life, minimum order information and any permitted availability language.

### 3. South African-Processed Macadamias — `/products/macadamias`

- Replace language saying approved product data can be added later.
- Replace the “Available specifications” placeholder panel with approved macadamia content.
- Required inputs: approved macadamia specification sheet, product codes, formats, grades/styles, sizes, packaging, shelf life, nutrition and permitted claims.

### 4. Cashews Prepared for Professional Supply — `/products/cashews`

- Replace language saying the page is waiting for approved product data.
- Replace the “Available specifications” placeholder panel with approved cashew content.
- Required inputs: approved cashew specification sheet, product codes, formats, grades/styles, sizes, packaging, shelf life, nutrition and permitted claims.

### 5. Food Safety and Quality Management — `/quality-certification`

- Replace the explanation that certificate artwork will be supplied later.
- Replace the typographic certificate placeholder with approved certificate/mark treatment only after the current certificate and brand-use artwork are provided.
- Required inputs: current certificate, exact scope, validity dates, approved mark artwork and permitted certification wording.

### 6. Export-Ready South African Processing — `/export-markets`

- Replace “What we are not publishing yet” and the list of withheld logistics details.
- Add only approved markets, routes and commercial terminology.
- Required inputs: approved destination countries/regions, ports, shipping partners, Incoterms, lead times, market approvals and export documentation claims.

### 7. Traceability That Supports Professional Supply — `/traceability`

- Replace the paragraph listing traceability features the company does not claim.
- Describe the real, verified traceability and documentation process in positive production language.
- Required inputs: traceability stages, records, systems, batch/lot capabilities, customer access and approved terminology.

### 8. Supply for International Buyers — `/buyers`

- Replace the “Example buyer brief” structure-only disclaimer with an approved buyer-facing explanation or remove the example entirely.
- Required inputs: approved buyer segments, purchasing process, enquiry expectations, commercial qualification steps and any permitted service claims.

### 9. Privacy Policy — `/privacy-policy`

- Replace the “Draft shell” notice and every “final policy should…” paragraph.
- Publish only client/legal-approved privacy wording.
- Required inputs: data controller identity, lawful basis, data collected, purposes, retention, processors, cookies/analytics, user rights, security, cross-border transfers, complaints process and approved privacy contact.

### 10. Terms of Use — `/terms-of-use`

- Replace the “Draft shell” notice and every “final terms should…” paragraph.
- Publish only client/legal-approved terms.
- Required inputs: website-use rules, intellectual property, product-information terms, enquiry/quotation terms, disclaimers, liability, governing law, dispute process and effective date.

## Legacy template cleanup

After confirming these files are not routed, remove or rewrite their placeholder copy so it cannot be accidentally reintroduced:

- `resources/views/site/home.blade.php` — “is being built” copy.
- `resources/views/site/page.blade.php` — “In progress” and “ready for the next model” copy.
- `resources/views/design3.blade.php` and `public/assets/design3.js` — design-preview enquiry copy.

## Acceptance checklist

- [ ] No public page contains “draft shell”, “in progress”, “preview only”, “nothing has been sent/stored”, “will appear here”, “will live here”, “added later”, “not enabled yet” or equivalent wording.
- [ ] No public page tells visitors that content is waiting for the client, another model or a future backend.
- [ ] Product, certification, logistics, traceability, contact and legal copy is backed by supplied evidence or approval.
- [ ] Existing routes, navigation, Livewire navigation, responsive layout and SEO metadata remain intact.
- [ ] All page titles, descriptions, canonical URLs, Open Graph text and sitemap entries are reviewed after copy replacement.
- [ ] `composer ci:check`, `npm run build` and the public-route/browser smoke tests pass.

## Handoff rule

The next AI should first gather the required approved data listed above, map each fact to its page, and only then edit the Blade copy. If a fact is unavailable, leave a neutral, finished-sounding statement or remove the section; do not replace one placeholder with another and do not invent a claim to fill space.
