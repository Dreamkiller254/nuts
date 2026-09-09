# Nuts Paradise Website Plan

**Working direction:** Concept 03 — Rooted in Africa

**Primary goal:** Launch a credible, premium B2B front end quickly, then add the
Filament content system, enquiry workflow and authentication after the public
experience is approved.

**Reference reviewed:**

- [Certified Origins — About](https://certifiedorigins.com/about/)
- [Certified Origins — home](https://certifiedorigins.com/)
- [Certified Origins — nut products](https://certifiedorigins.com/portfolio/nuts-and-nut-butters/)
- [Certified Origins — contact](https://certifiedorigins.com/contact-us/)
- `website_brief_raw.md`
- Current `3.html` and its `concept-3.css`, `common.css`, photography and logo assets

This is an implementation plan, not permission to copy Certified Origins' wording,
images, layout code or branding. We are borrowing the clarity of its journey and
adapting that structure to the verified Nuts Paradise brief.

---

## 1. What the admired website gets right

The useful lesson from Certified Origins is the sequence and the confidence it
creates for a professional buyer:

1. **A clear B2B promise first.** Visitors immediately understand the company,
   product category and type of partnership.
2. **Product families are destinations, not only homepage cards.** A category opens
   into an organised product portfolio with formats/variants and a route to contact.
3. **Capabilities are explained as proof pillars.** The About flow uses themes such
   as agility, geographic reach, responsible sourcing, logistics, R&D and certified
   quality rather than one long company paragraph.
4. **Quality and supply-chain confidence are repeated in useful places.** Standards,
   traceability, origin and logistics support the product and enquiry decisions.
5. **The site keeps returning to tailored solutions.** Buyers are invited to explain
   market, format and requirements instead of being forced into a consumer shop flow.
6. **Contact is a proper destination.** It combines an enquiry form with clear office
   context and a practical next step.
7. **Knowledge can become a future reason to return.** Their learning/resources area
   supports authority, SEO and buyer education after the core pages are established.

For Nuts Paradise, the equivalent story is:

> South African macadamia and cashew processing, prepared around buyer requirements,
> quality management and export readiness.

The final site should feel like a processor/export partner with operational depth,
not a broker, a consumer snack shop or a generic agricultural brochure.

---

## 2. Current starting point and the required change

### Already available

- Laravel 13.31 app in `nutsparadise/`.
- Livewire 4, Fortify and Filament installed, with Filament intentionally deferred
  until the public front end is approved.
- Concept 03 photography and visual system migrated into
  `resources/views/design3.blade.php` and `public/assets/`.
- Client logo available at `public/logo.png` and `public/favicon.png`.
- Root `.htaccess` routes the domain into `nutsparadise/public`.
- The parent static design files remain references and must not be edited or deleted.

### Current problem

Concept 03 is currently a beautiful one-page narrative. That is useful as a visual
direction, but it is not yet the final information architecture. The page must be
split into crawlable, shareable destinations while preserving its visual language:

- Deep green, warm natural tones, cream, charcoal and lime accents.
- Serif editorial display typography with restrained sans-serif utility text.
- Large photography, generous spacing, precise labels and quiet motion.
- Premium operational confidence rather than consumer-packaging decoration.
- Repeated, specific buyer CTAs.

The one-page hash navigation should be replaced by page-level routes. Keep hash links
only for meaningful in-page sub-navigation inside a long page.

---

## 3. Target information architecture

The header and footer should use the same route set on every public page:

| Route | Page purpose | Primary CTA |
|---|---|---|
| `/` | Positioning, proof, product entry points and conversion | Request a Quote |
| `/about` | Company, operating model, facility and administrative office | Discuss Your Requirements |
| `/products` | Product-family overview for macadamias and cashews | Explore a Product |
| `/products/macadamias` | Macadamia category, approved formats/specification prompt | Request a Macadamia Quote |
| `/products/cashews` | Cashew category, approved formats/specification prompt | Request a Cashew Quote |
| `/processing` | Riverside Park facility, processing approach and operational principles | Discuss Your Product Requirements |
| `/quality-certification` | FSSC 22000 scope and quality-management approach | Request Product Information |
| `/traceability` | Verified processing/export-preparation traceability story | Discuss Your Requirements |
| `/buyers` | Buyer types, information needed and buying journey | Request a Quote |
| `/export-markets` | Export-readiness flow without unsupported destination claims | Speak to Our Export Team |
| `/contact` | Enquiry form and two approved locations | Contact Nuts Paradise |
| `/privacy-policy` | Form/data/privacy disclosure | Contact Nuts Paradise |
| `/terms-of-use` | Website terms | Contact Nuts Paradise |
| `/photography` | Temporary stock-photo credits while original photography is developed | Back to site |

Future, only after content is supplied:

- `/insights` or `/learn` for buyer education, reports and approved articles.
- `/insights/{slug}` for individual resources.
- `/admin` for Filament-managed content and enquiries.

### Header

- Client logo at left, with a short descriptor such as “South African processor &
  exporter”.
- Primary links: About, Products, Processing, Quality, Traceability, Buyers, Export
  Markets, Contact.
- Persistent “Request a Quote” CTA.
- Responsive menu with the same route order and a clear close/focus treatment.
- Active route state using `wire:current`.

### Footer

- Repeat all primary routes.
- Repeat processing facility and administrative office locations exactly as approved.
- Privacy Policy and Terms of Use.
- Photography credits while stock assets remain.
- No phone number, email address or map pin until the client approves them.

---

## 4. Page-by-page front-end blueprint

### Home — `/`

Keep the Concept 03 cinematic opening, but use the brief's approved positioning as
the actual SEO and messaging anchor:

- Hero H1: **South African Macadamia & Cashew Processing for Global Markets**.
- Supporting copy: processor/exporter, Mbombela base, international importers,
  distributors, manufacturers, retailers and ingredient buyers.
- CTAs: **Request a Quote** and **Explore Our Products**.
- Trust line: **FSSC 22000 Certified Processing · 1,000 MT Monthly Capacity · South
  Africa**.
- Intro: “From African Origin to Global Market.”
- Four proof cards: South African Processing, FSSC 22000 Certified, 1,000 MT Monthly
  Capacity, Export-Focused Supply.
- Product family cards for Macadamias and Cashews. Each card links to its own page.
- Processing preview linking to `/processing`.
- Quality preview linking to `/quality-certification`.
- A short “what buyers should send us” strip linking to `/buyers`.
- Final quote CTA.

The hero image must feel operational and premium. Use current Concept 03 imagery only
as an interim visual; replace it with an approved facility/processing photograph when
available. Keep the photography credit and avoid implying that stock imagery shows
the Nuts Paradise facility.

### About Us — `/about`

Use the admired site's capability-pillar rhythm, adapted to verified facts:

- Hero: **A South African Processing and Export Partner**.
- What We Do: processor/exporter, not broker.
- Two-location block: Riverside Park, Mbombela processing facility; Braamfontein,
  Johannesburg administrative office.
- Capability grid: Processing Expertise, Quality Management, Export Readiness,
  Buyer-Focused Preparation. Add Responsible Sourcing only when client-approved
  evidence is supplied.
- “Our promise”: controlled processing, clear communication, product quality and
  export-focused execution.
- Quote CTA.

### Products — `/products`

Treat the page as a product-family gateway, not a consumer catalogue:

- Hero: **Macadamia and Cashew Products**.
- Buyer categories: international food, retail, distribution and ingredient markets.
- Two large family panels, each with photography, short description and CTA.
- A “specification conversation” section explaining what a buyer should provide.
- Quote CTA.

Do not publish grades, kernel styles, sizes, product codes, packaging types,
shelf-life information or nutrition panels until approved product specification sheets
are supplied.

### Macadamias — `/products/macadamias`

- Category hero and origin/processing context.
- Approved product overview only; no invented grade or format matrix.
- Placeholder “Available specifications” component that is hidden until data is
  approved, rather than filled with guesses.
- Buyer requirements checklist: specification, volume, destination and timing.
- Request Macadamia Quote CTA.

### Cashews — `/products/cashews`

Mirror the macadamia page structure so the two categories feel like a deliberate
portfolio. Change only approved copy, photography and category-specific data.

### Processing — `/processing`

- Hero: **Processing in South Africa**.
- Facility details: Riverside Park Industrial Zone, Rapid Street, Riverside Park,
  Mbombela, South Africa.
- Capacity: up to 1,000 MT per month, consistently qualified as processing capacity.
- “Designed for Buyer Requirements”: align processing, quality management and export
  preparation with agreed customer requirements.
- Process story: receiving/understanding requirements → processing alignment →
  quality oversight → documentation/export preparation.
- Photography slots for exterior, receiving/handling, controlled processing, quality
  inspection and dispatch. Use placeholders/credits until real images exist.
- Discuss Your Product Requirements CTA.

### Quality & Certification — `/quality-certification`

- Hero: **Food Safety and Quality Management**.
- State FSSC 22000 scope exactly: certification applies to both macadamia and cashew
  processing.
- Explain controlled handling, processing oversight, documentation and agreed buyer
  requirements in plain language.
- Add a certificate/mark block only after the client supplies current certificate and
  approved brand-use artwork.
- Request Product Information CTA.

### Traceability — `/traceability`

- Hero: **Traceability That Supports Professional Supply**.
- Describe identification and management through processing and export preparation.
- Buyer-facing documentation conversation.
- Use a simple journey graphic: product/order brief → processing records → quality
  and documentation review → export preparation.

Do **not** claim farm-level traceability, blockchain, real-time tracking or batch-level
portals without verified systems and approved wording.

### Buyers — `/buyers`

- Hero: **Supply for International Buyers**.
- Buyer cards: Importers & Distributors, Food Manufacturers, Retail/Private Label,
  Ingredient Buyers.
- “Start With Your Requirements” checklist.
- Example enquiry structure, not a fake quote calculator.
- Request a Quote CTA.

### Export Markets — `/export-markets`

- Hero: **Export-Ready South African Processing**.
- Explain export preparation without naming unverified destination countries, ports,
  Incoterms, freight partners or approvals.
- Five-step process: buyer shares requirements → review → align product/quality/
  commercial requirements → process/prep → coordinate transaction documentation and
  shipment requirements.
- Speak to Our Export Team CTA.

### Contact — `/contact`

- Hero: **Contact Nuts Paradise**.
- Two approved locations, no unapproved contact details.
- Front-end enquiry form fields from the brief:
  Full name, company, business email, country, product interest, estimated volume,
  destination market, message, consent checkbox.
- Clear validation, loading, error and success states.
- Before backend exists, make the form visibly “front-end ready” without pretending
  that an email was sent. Once an approved inbox and mail route exist, connect it to
  Laravel validation/notification and persist the enquiry in Filament.

### Legal pages

Create readable, crawlable Privacy Policy and Terms pages before launch. The final
legal wording must be client/legal-approved; do not invent a compliance policy.

---

## 5. Visual system to preserve from Concept 03

### Design language

- Deep green hero and section blocks.
- Warm cream background and natural nut/olive-lime accents.
- Editorial serif display type for the story; disciplined sans-serif for labels,
  metadata and forms.
- Thin rules, numbered proof points, large image crops and quiet hover movement.
- Strong whitespace and a restrained B2B tone.
- One strong CTA per section; avoid button clutter.

### Logo and brand assets

- Use `public/logo.png` as the approved logo.
- Use `public/favicon.png` for the favicon and touch icon.
- Keep the wordmark legible on dark hero surfaces; use the approved light treatment,
  not an improvised replacement logo.
- Keep the original root logo and static concepts untouched.

### Photography

Priority order:

1. Approved facility exterior and signage.
2. Real product receiving, handling, processing and quality activity.
3. Real finished-product/dispatch photography.
4. Close product photography for macadamias and cashews.
5. South African landscape/origin imagery used sparingly.

Every image gets useful alt text. Stock images stay credited and must never imply a
facility, certification or process that does not belong to Nuts Paradise.

### Motion

- Use Livewire navigation transitions for page-level movement.
- Use scroll-reveal only where it helps hierarchy; honor `prefers-reduced-motion`.
- Maintain visible focus, skip links and a meaningful focus target after navigation.
- Do not let animation delay the first contentful paint or hide critical copy.

---

## 6. Laravel front-end architecture

### Shared components to build first

```text
resources/views/components/site/
  header.blade.php
  footer.blade.php
  cta.blade.php
  breadcrumb.blade.php
  proof-grid.blade.php
  product-family-card.blade.php
  page-hero.blade.php
  image-panel.blade.php
  seo.blade.php
resources/views/layouts/site.blade.php
resources/views/pages/
  home.blade.php
  about.blade.php
  products/index.blade.php
  products/macadamias.blade.php
  products/cashews.blade.php
  processing.blade.php
  quality-certification.blade.php
  traceability.blade.php
  buyers.blade.php
  export-markets.blade.php
  contact.blade.php
```

Keep content in Blade view models/config for the front-end launch, with a clean
interface so the same components can later receive Filament-managed content.

### Navigation behavior

- Use named routes everywhere.
- Use `wire:navigate` for links between public pages.
- Use normal hash links for sections within the same page.
- Use `wire:current` for active navigation.
- Use `@persist` for the header/transition shell only where it improves continuity.
- Keep external links, downloads, mail links and legal documents as appropriate.
- Never make the design dependent on JavaScript for basic navigation or SEO content.

### Data boundaries

Front-end phase can use static view data. Do not create fake products, prices,
certificates, contact details, destinations or customer logos just to fill cards.
Filament resources, user roles and saved enquiries come after the public content is
approved.

---

## 7. SEO and discoverability plan

SEO is a launch requirement, not a later polish pass.

### Metadata

Implement a reusable SEO component supporting:

- Unique title and meta description for every route, using the exact brief metadata
  below as the starting point.
- Canonical URL.
- Open Graph title, description, URL and approved image.
- Twitter card metadata.
- `robots` control for staging/private routes.
- Per-page social image fallback without inventing claims.

| Page | Title | Meta description |
|---|---|---|
| Home | Nuts Paradise \| South African Macadamia & Cashew Processor & Exporter | Nuts Paradise processes and exports macadamia and cashew products from South Africa. FSSC 22000 certified processing in Mbombela with 1,000 MT monthly capacity. |
| About | About Nuts Paradise \| South African Nut Processor & Exporter | Learn about Nuts Paradise, a South African processor and exporter of macadamia and cashew products with operations in Mbombela and Johannesburg. |
| Products | Macadamia and Cashew Products \| Nuts Paradise | Explore macadamia and cashew products processed in South Africa by Nuts Paradise for international importers, distributors, manufacturers and ingredient buyers. |
| Processing | Macadamia & Cashew Processing in Mbombela \| Nuts Paradise | Nuts Paradise processes macadamias and cashews at its Riverside Park facility in Mbombela, South Africa, with capacity of up to 1,000 MT per month. |
| Quality | FSSC 22000 Certified Nut Processing \| Nuts Paradise | Nuts Paradise is FSSC 22000 certified for both macadamia and cashew processing in South Africa. |
| Traceability | Traceability \| Nuts Paradise | Learn how Nuts Paradise supports traceability and professional supply-chain coordination for macadamia and cashew buyers. |
| Buyers | Macadamia & Cashew Supply for International Buyers \| Nuts Paradise | Nuts Paradise serves importers, distributors, manufacturers, retailers and ingredient buyers seeking South African-processed macadamia and cashew products. |
| Export Markets | Export-Ready Macadamia & Cashew Processing \| Nuts Paradise | Nuts Paradise supports international buyers with South African-processed macadamia and cashew products prepared for export requirements. |
| Contact | Contact Nuts Paradise \| Macadamia & Cashew Enquiries | Contact Nuts Paradise to discuss South African macadamia and cashew processing, product requirements and export opportunities. |

### Technical SEO

- Semantic one-H1 page structure and logical H2/H3 hierarchy.
- Breadcrumbs on inner pages.
- XML sitemap for public routes.
- `robots.txt` that blocks staging/private routes but allows public pages/assets.
- Custom 404 page with route back to Products and Contact.
- Redirect plan from any existing static concept URLs where appropriate.
- Clean slugs, trailing-slash consistency and HTTPS canonical URLs.
- Descriptive image filenames and alt text.
- Noindex for the temporary photography-credit page if the client does not want it
  indexed.
- JSON-LD only for facts we can prove: Organization/LocalBusiness after the client
  approves business name, URL, locations and contact details; BreadcrumbList on inner
  pages; Product schema only when approved product data exists.
- Add Search Console and analytics only after the client supplies access/details.

### Performance SEO

- Convert approved images to AVIF/WebP with fallback.
- Preload only the hero image and critical fonts.
- Lazy-load below-the-fold images.
- Keep the first screen useful if JavaScript is disabled.
- Audit Core Web Vitals on mobile, especially the hero image and font loading.

---

## 8. Phased delivery plan

The phases are ordered so the public site can go live before backend work begins.

### Phase 0 — Content, claims and route lock

- [ ] Confirm the exact business name, URL and approved logo.
- [ ] Confirm the brief facts: Mbombela facility, Braamfontein office, 1,000 MT/month,
      FSSC 22000 scope.
- [ ] Mark every other claim as **approved**, **needs evidence** or **do not publish**.
- [ ] Confirm whether the existing stock photos may remain as temporary imagery.
- [ ] Approve the page map and CTA labels in this document.

**Exit:** no developer has to invent a claim to finish a page.

### Phase 1 — Public shell and SEO foundation

- [ ] Replace the one-page-only header/footer with the reusable page shell.
- [ ] Add route-aware navigation, active states, mobile menu and quote CTA.
- [ ] Add SEO component, canonical URLs, OG defaults, sitemap and robots rules.
- [ ] Add breadcrumbs, skip link, focus handling and reduced-motion behavior.
- [ ] Add the approved logo/favicon everywhere.
- [ ] Add the page-level Livewire navigation contract.

**Exit:** all target routes resolve to real, crawlable views with shared navigation.

### Phase 2 — Home page conversion build

- [ ] Recompose Concept 03 into the brief's homepage message and trust line.
- [ ] Build proof grid and product-family entry cards.
- [ ] Link every card to a real destination page, not a dead hash.
- [ ] Add processing, quality and buyer preview sections.
- [ ] Add first mobile/tablet/desktop visual QA.

**Exit:** a buyer understands what Nuts Paradise does, why it is credible and what to
click next within the first screen and the first scroll.

### Phase 3 — About and capability story

- [ ] Build `/about` with the admired site's capability-pillar rhythm.
- [ ] Add facility/office locations from the brief.
- [ ] Add only approved proof; keep unsupported responsible-sourcing language out.
- [ ] Add an enquiry CTA at the end.

**Exit:** the company is positioned as a processor/exporter with a clear operating
model, not a broker.

### Phase 4 — Products and product-family pages

- [ ] Build `/products` gateway.
- [ ] Build `/products/macadamias` and `/products/cashews` using one shared template.
- [ ] Add specification prompt and buyer-use context.
- [ ] Add approved product imagery and structured alt text.
- [ ] Keep unknown grades, sizes, packs, nutrition and shelf life hidden.

**Exit:** a buyer can reach the correct product enquiry in two clicks without seeing
invented specification data.

### Phase 5 — Processing, quality, traceability and export pages

- [ ] Build `/processing` with facility story and operational photography slots.
- [ ] Build `/quality-certification` with exact FSSC 22000 scope.
- [ ] Build `/traceability` with conservative, verified wording.
- [ ] Build `/buyers` for buyer types and enquiry requirements.
- [ ] Build `/export-markets` without unsupported countries, ports or Incoterms.

**Exit:** the website answers the confidence questions that block a B2B enquiry.

### Phase 6 — Contact front end and launch-ready forms

- [ ] Build `/contact` with the full brief form and consent checkbox.
- [ ] Add client-side/server-ready validation states.
- [ ] Add accessible success/error/loading UI.
- [ ] Keep the form in preview mode until an approved inbox and mail workflow exist.
- [ ] Add privacy/terms links beside consent.

**Exit:** the primary conversion is usable and honest, even before persistence is
connected.

### Phase 7 — Content, photography and legal polish

- [ ] Replace temporary stock imagery with approved facility/product photography where
      available.
- [ ] Add credits or remove temporary imagery.
- [ ] Obtain approved FSSC certificate artwork before displaying the mark.
- [ ] Finalise Privacy Policy and Terms of Use with the client/legal reviewer.
- [ ] Final copy proofread for South African English, terminology and consistency.

**Exit:** client can approve a content-complete front end.

### Phase 8 — SEO, performance and accessibility QA

- [ ] Run Lighthouse/PageSpeed mobile and desktop checks.
- [ ] Check Core Web Vitals, image weight, font loading and layout shift.
- [ ] Validate sitemap, robots, canonicals, metadata and social previews.
- [ ] Test keyboard-only navigation, screen-reader landmarks, focus and contrast.
- [ ] Test reduced-motion mode and no-JavaScript baseline.
- [ ] Test all forms and every CTA at mobile/tablet/desktop widths.
- [ ] Check 404, redirects and direct loading of every page.

**Exit:** front end is launch-ready and search-engine crawlable.

### Phase 9 — Front-end launch

- [ ] Confirm `nutsparadise/public` remains the document root target via `.htaccess`.
- [ ] Clear deployment/proxy cache after the final build.
- [ ] Verify HTTPS, favicon, logo, images, fonts and all public routes.
- [ ] Submit sitemap to Search Console once access is supplied.
- [ ] Monitor logs and enquiry CTA behavior for the first launch window.

**Exit:** public site is live with a working front-end conversion path.

### Phase 10 — Filament, Fortify and enquiry backend

This phase deliberately follows front-end approval:

- [ ] Create Filament-managed page/section content only where editing is actually
      needed.
- [ ] Create Product, ProductSpecification, PageSEO, Media, Enquiry and Location
      resources as appropriate.
- [ ] Add roles/permissions and Fortify-authenticated staff workflows.
- [ ] Persist contact enquiries, send notifications to the approved inbox and protect
      against spam/rate abuse.
- [ ] Replace static view data with typed view models while preserving URLs and SEO.
- [ ] Add audit trail and safe publish/draft controls.

**Exit:** staff can maintain approved content without a developer, and the public
front end continues to use the same fast navigation contract.

---

## 9. Definition of done for every public page

Before marking a page complete:

- [ ] Has one clear H1, one primary purpose and one primary CTA.
- [ ] Has approved title, description, canonical and social metadata.
- [ ] Has direct-load and `wire:navigate` behavior tested.
- [ ] Has useful alt text on every meaningful image.
- [ ] Has no unsupported claim, fake specification or invented contact detail.
- [ ] Works at mobile, tablet and desktop widths.
- [ ] Works with keyboard navigation and reduced motion.
- [ ] Has loading, error and empty states where interaction exists.
- [ ] Ends with the next logical buyer action.
- [ ] Does not regress the shared header/footer or page transition behavior.

---

## 10. Client inputs that unblock the fastest launch

Request these in parallel with the front-end build:

1. Final approval of the logo and any light/dark logo variants.
2. Current FSSC 22000 certificate and approved mark-use artwork.
3. Original facility, product, processing, quality and dispatch photography.
4. Approved public contact email/inbox and sender identity.
5. Confirmation of facility and office address presentation.
6. Approved product specification sheets for macadamias and cashews.
7. Approved export markets, shipping language and commercial terminology, if any.
8. Legal copy or reviewer for privacy/terms and the enquiry consent language.
9. Search Console/analytics details when the client is ready to add them.

Until those arrive, the site should use the brief's verified facts, clearly credited
temporary photography and honest “discuss your requirements” language.

---

## Immediate build order

The next implementation pass should do only this:

1. Create the shared multi-page public shell and SEO component.
2. Convert Concept 03 into the Home page using the brief's exact homepage copy.
3. Build `/about`, `/products`, `/products/macadamias` and `/products/cashews`.
4. Build `/processing`, `/quality-certification`, `/traceability`, `/buyers` and
   `/export-markets` using reusable sections.
5. Build `/contact`, Privacy and Terms as front-end routes.
6. Run the full SEO/accessibility/performance checklist.
7. Launch the front end.
8. Only then begin Filament/auth/enquiry persistence.

