# SEO 10/10 Execution Plan

**Job name:** Nuts Paradise SEO 10/10 — Technical, Content & Authority  
**Status:** Ready for execution  
**Owner:** SEO/content implementation agent  
**Scope:** Prepare the current staging build for maximum search visibility before moving it to the approved production domain.

## What “10/10” means

This plan targets three separate outcomes:

1. **Technical/on-page SEO 10/10:** Search engines can crawl, understand, render and index every approved page correctly.
2. **Content/intent SEO 10/10:** Each page satisfies a distinct buyer search intent with useful, original, evidence-backed content.
3. **Ranking readiness 10/10:** The site demonstrates trust, topical authority, local relevance, strong UX and a sustainable authority-building plan.

No plan can guarantee a position on Google. Rankings also depend on competitors, search demand, links, brand activity and time. The goal here is to remove every controllable weakness and make the site the strongest credible result for its target searches.

## Non-negotiable guardrails

- Never invent product grades, kernel styles, sizes, packaging, shelf life, nutrition, prices, availability, export destinations, ports, Incoterms, turnaround times, certifications, traceability systems, reviews or customer names.
- Use only client-approved claims, contact details, addresses, certification wording, imagery and legal copy.
- Keep the current information architecture, routes, fast Livewire navigation, responsive UI and approved visual direction.
- Do not create doorway pages, keyword-stuffed copy, fake FAQs, fake reviews, spun articles or low-quality backlink schemes.
- Keep staging domain handling separate from the real-domain launch. Do not let staging compete with the production domain in search.

## Current baseline

Already in place:

- One H1 and unique page content on the public routes.
- Page titles, meta descriptions, canonical tags, Open Graph and Twitter metadata.
- Clean product URLs, breadcrumbs, internal navigation, sitemap and robots.txt.
- Descriptive image alt text and a responsive, fast-loading page shell.
- No visible draft, preview or “content coming later” copy on the live public routes.

Known gaps to close:

- No JSON-LD structured data.
- Canonical/domain configuration must be finalized at cutover; staging currently differs from the intended public domain.
- Some title and description lengths need refinement.
- Sitemap is minimal and does not include modification dates.
- Content is credible but still broad; approved product, facility, market and buyer detail will increase search coverage.
- No measured Search Console baseline, local listings, authority campaign or verified backlink profile yet.

## Phase 0 — Measurement and search strategy

- [ ] Confirm the approved business name, real domain, primary country/market, operating locations and target buyer geographies.
- [ ] Create a keyword map with one primary intent and supporting terms for every public route.
- [ ] Group terms by intent: processor, exporter, product, quality/certification, traceability, buyer, location and enquiry.
- [ ] Record current rankings, impressions, CTR, indexed URLs, crawl errors and branded-search demand in Google Search Console and Bing Webmaster Tools after domain verification.
- [ ] Establish baseline Lighthouse/PageSpeed measurements for mobile and desktop.
- [ ] Create a route audit sheet covering title, description, H1, canonical, indexability, schema, internal links, image alt text and conversion CTA.

### Initial keyword-map direction

Use these as research themes, not as unverified final copy:

| Page | Primary search intent | Supporting themes |
|---|---|---|
| Home | South African macadamia and cashew processor/exporter | nut processing, international buyers, South Africa |
| About | South African nut processing partner | Mbombela facility, Johannesburg office, processor/exporter |
| Products | macadamia and cashew products for buyers | B2B nut supply, product portfolio, ingredient buyers |
| Macadamias | South African macadamia processor | macadamia supply, processing, buyer requirements |
| Cashews | cashew processor/export supply | cashew supply, food and ingredient buyers |
| Processing | macadamia and cashew processing in Mbombela | facility, quality management, export preparation |
| Quality | FSSC 22000 nut processing | food safety, quality management, certification scope |
| Traceability | nut processing traceability | records, documentation, supply-chain visibility |
| Buyers | nut supply for international buyers | importers, distributors, manufacturers, retail, ingredients |
| Export Markets | export-ready nut processing | international supply, documentation, destination requirements |
| Contact | contact a South African nut processor | enquiry, macadamia, cashew, buyer requirements |

## Phase 1 — Technical SEO and indexability

### Domain, protocol and crawl control

- [ ] Choose one production hostname and redirect every alternate hostname to it with permanent HTTPS redirects.
- [ ] Set production `APP_URL` to the approved domain at cutover.
- [ ] Generate canonicals, Open Graph URLs and sitemap URLs from the same approved domain.
- [ ] Keep staging `noindex` and/or access-controlled until launch; remove staging restrictions only when the real domain is live.
- [ ] Ensure `robots.txt` references only the production sitemap and does not accidentally block CSS, JavaScript or images required for rendering.
- [ ] Keep `/admin`, auth and account areas out of search while allowing public pages.
- [ ] Return a branded 404 for unknown URLs and a 410 for permanently removed content where appropriate.
- [ ] Preserve the `/photography` removal as a clean 404 unless an approved replacement URL is provided.

### Crawlable rendering and URLs

- [ ] Verify every public route returns a 200 response, has one canonical URL and is reachable through normal HTML links.
- [ ] Verify Livewire navigation has a full-page fallback when JavaScript is unavailable.
- [ ] Prevent duplicate URLs caused by query strings, trailing slashes, case variants or alternate route aliases.
- [ ] Keep breadcrumbs semantic and consistent with the route hierarchy.
- [ ] Identify and fix orphan pages, broken internal links, redirect chains and accidental noindex tags.
- [ ] Add `lastmod` values to the sitemap only when they reflect genuine content changes.

### Core Web Vitals and delivery

- [ ] Reach Lighthouse targets on representative mobile and desktop runs: Performance 90+, Accessibility 95+, Best Practices 95+ and SEO 100.
- [ ] Meet Core Web Vitals targets: LCP under 2.5s, INP under 200ms and CLS under 0.1 on realistic mobile conditions.
- [ ] Serve correctly sized WebP/AVIF images with responsive `srcset` where useful; preload only the true above-the-fold hero image.
- [ ] Lazy-load below-the-fold images and embeds; reserve image dimensions to prevent layout shift.
- [ ] Self-host and subset only the required fonts; use `font-display: swap` and verify no flash or invisible text problem.
- [ ] Minify and cache CSS/JS, enable Brotli or gzip, set immutable cache headers for fingerprinted assets and remove unused legacy bundles.
- [ ] Test all public routes at 375px, 430px, 768px, 1024px, 1440px and 1920px without overflow or clipping.

## Phase 2 — Metadata, semantics and structured data

### Per-page metadata

- [ ] Give every indexable page a unique title with the primary intent near the beginning and `Nuts Paradise` used consistently.
- [ ] Write unique, benefit-led meta descriptions that accurately summarize the page and invite the right buyer action; avoid boilerplate.
- [ ] Keep titles and descriptions within sensible display lengths while prioritizing meaning over arbitrary character limits.
- [ ] Use one descriptive H1 per page, logical H2/H3 nesting and visible text that matches the page’s search intent.
- [ ] Add meaningful image alt text that describes the image; do not stuff keywords or use “image of” repeatedly.
- [ ] Review Open Graph/Twitter title, description, image, image alt and URL for every route.
- [ ] Use `noindex,follow` for 404s, private/auth pages and any intentionally non-search pages.

### JSON-LD schema

Add schema only from verified information and validate it in Google’s Rich Results Test and Schema Markup Validator:

- [ ] `Organization` or `LocalBusiness` with approved name, logo, URL, locations and contact details.
- [ ] `WebSite` and `WebPage` data with accurate names and URLs.
- [ ] `BreadcrumbList` on all inner public pages.
- [ ] `Product` schema only for products with approved product names, descriptions, images and identifiers; do not add invented offers, prices or availability.
- [ ] `ContactPage` for `/contact`.
- [ ] `AboutPage`, `CollectionPage` and `Article` only where the page genuinely fits the type.
- [ ] `FAQPage` only when real visible FAQs and approved answers exist; never add hidden FAQ text for rich results.
- [ ] Never add review, aggregate-rating, certification or award schema without verifiable evidence.

## Phase 3 — Content that can rank and convert

### Page-level improvements

- [ ] Give each route a clear primary question it answers and remove overlapping copy that causes keyword cannibalization.
- [ ] Expand the home page around the approved positioning: South African macadamia and cashew processing, professional buyers, quality and export preparation.
- [ ] Expand the About page with approved company history, operating model, locations, people and differentiators.
- [ ] Expand the Products overview with approved product families and buyer use cases.
- [ ] Replace the generic macadamia and cashew sections with approved specifications, formats, applications, packaging and commercial enquiry guidance.
- [ ] Expand Processing with the actual facility process, controls, capacity evidence, quality checkpoints and approved photography.
- [ ] Expand Quality with the current certificate scope, validity, permitted mark artwork and evidence-backed food-safety explanation.
- [ ] Expand Traceability with the real identification, records, review and documentation flow.
- [ ] Expand Export Markets only with approved markets, routes, documentation and commercial terminology.
- [ ] Expand Buyers with decision-stage information for importers, distributors, manufacturers, retail/private label and ingredient buyers.
- [ ] Keep Contact focused on a clear enquiry action with approved response expectations and privacy wording.
- [ ] Have qualified client/legal reviewers approve Privacy Policy and Terms of Use before indexing them.

### Supporting content and topical authority

- [ ] Add a useful resources/insights hub only when the client can maintain it.
- [ ] Publish genuinely helpful, original topics such as macadamia sourcing questions, cashew buyer checklists, food-safety documentation and export-preparation guidance.
- [ ] Give every article an author/reviewer, publication date, update date, source evidence and a relevant internal CTA.
- [ ] Add buyer FAQs based on real sales questions, not invented search terms.
- [ ] Link related product, processing, quality, traceability and buyer pages contextually.
- [ ] Build comparison and glossary content only where it helps a real buyer make a decision.

## Phase 4 — Trust, local relevance and conversion quality

- [ ] Make the business name, approved phone, approved email and approved locations consistent across the site and external listings.
- [ ] Create or claim Google Business Profile and Bing Places only for approved eligible locations; keep facility and office details accurate.
- [ ] Add approved organization details, operating hours, service areas and contact methods consistently.
- [ ] Obtain client-approved testimonials, case studies, memberships, awards and partner references; publish only attributable evidence.
- [ ] Build a reliable enquiry workflow with approved inbox, consent language, spam protection, delivery monitoring and a human response process.
- [ ] Ensure privacy, cookie and terms content matches the actual form, analytics, map embed and hosting behavior.
- [ ] Add clear authoritativeness signals: certificate evidence, facility photography, named subject-matter reviewers and transparent company information.

## Phase 5 — Ethical authority building

- [ ] Build a list of relevant South African agriculture, food-processing, export, trade and buyer publications.
- [ ] Earn links through useful original resources, verified partnerships, trade memberships, events and expert commentary.
- [ ] Claim consistent profiles on relevant industry directories and chambers; remove duplicates and incorrect listings.
- [ ] Use branded social profiles to distribute useful content and reinforce entity recognition.
- [ ] Monitor referring domains, anchor text, spam links and brand mentions monthly.
- [ ] Reject paid link networks, automated submissions, irrelevant directories and exact-match anchor abuse.

## Phase 6 — Real-domain launch and migration

Do this only after the staging content and SEO checks are complete:

- [ ] Set the approved production domain in `.env` and deployment configuration.
- [ ] Confirm DNS, HTTPS certificate, preferred hostname, redirect rules and proxy headers.
- [ ] Update canonical URLs, Open Graph URLs, sitemap URLs, robots.txt and structured-data URLs.
- [ ] Remove staging `noindex`/access restrictions and confirm public crawlability.
- [ ] Submit the production sitemap in Google Search Console and Bing Webmaster Tools.
- [ ] If replacing an existing domain, map every old URL to the closest relevant new URL with 301 redirects and submit the appropriate migration notification.
- [ ] Crawl the live domain from outside the server and confirm status codes, canonicals, schema, metadata, assets and internal links.
- [ ] Re-run Lighthouse, PageSpeed, Rich Results, accessibility and mobile usability checks after DNS propagation.

## Phase 7 — Ongoing SEO operations

- [ ] Weekly during launch: monitor indexing, crawl errors, server errors, sitemap processing and manual actions.
- [ ] Monthly: review rankings, impressions, CTR, conversions, query changes, Core Web Vitals, broken links and competitor movements.
- [ ] Quarterly: refresh declining pages, update evidence, improve internal links and publish one or more genuinely useful resources.
- [ ] Maintain a claim register showing the source, approver, date and page for every material business claim.
- [ ] Keep titles, descriptions, schema and legal copy synchronized whenever products, locations, certifications or contact details change.

## Final 10/10 acceptance gate

- [ ] Every public route has one indexability decision, one canonical, one H1, unique metadata, meaningful internal links and accurate image alt text.
- [ ] No public page contains draft, placeholder, preview, “coming later”, unsupported-claim or unfinished legal language.
- [ ] All approved claims have evidence and an owner.
- [ ] JSON-LD validates with no critical errors and matches visible page content.
- [ ] Sitemap contains only canonical, indexable 200 URLs and is referenced by robots.txt.
- [ ] Robots, canonicals, redirects and staging controls are correct for the current environment.
- [ ] Lighthouse targets and Core Web Vitals targets pass on mobile and desktop.
- [ ] No accessibility, responsive, JavaScript navigation or form regressions exist.
- [ ] Search Console and Bing show successful verification, sitemap processing and no critical coverage/security issues.
- [ ] Local listings, citations, earned links and brand entities are accurate and consistent.
- [ ] Client approves all commercial, certification, contact, privacy and legal content before the real-domain cutover.

## Handoff to the content/data agent

The next agent must begin with the keyword map and approved-data register, then produce page copy, metadata, schema inputs and content briefs. It must flag missing evidence instead of filling gaps with assumptions. After content approval, a separate implementation pass should add the schema, metadata refinements, performance changes and measurement integrations described above.
