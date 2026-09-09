# Nuts Paradise SEO Master Plan — Closing Sprint

**Job name:** Nuts Paradise Search Dominance — Production SEO Master Plan  
**Status:** Wave A implementation in progress  
**Branch:** `mockone`  
**Execution owner:** ChatGPT  
**Primary domain:** `https://nutsparadise.co.za`  
**Scope:** Maximize technical SEO, search intent coverage, entity clarity, crawlability, search appearance, internal authority and conversion quality using only verified content already available in the repository.

---

## 1. Execution mode — how this will actually be done

This is **not** an eight-phase implementation project.

The closing SEO work will be executed in three practical waves:

### WAVE A — REPO SEO ONE-SHOT

ChatGPT will execute every SEO improvement that can be completed from the current repository and verified public information in **one aggressive implementation pass** on `mockone`.

This includes:

- search-intent mapping for every existing public route;
- title and meta-description refinement;
- canonical and indexability hardening;
- semantic heading review;
- JSON-LD entity/schema implementation;
- breadcrumb structured data;
- Organization/WebSite/WebPage graph;
- ContactPage, AboutPage and CollectionPage typing where appropriate;
- sitemap improvement;
- robots and crawler-control review;
- duplicate URL protection;
- internal-link architecture;
- image SEO and delivery review;
- Core Web Vitals/performance cleanup that can be done in code;
- accessibility/search-rendering checks;
- SEO regression tests;
- removal of obsolete SEO-unfriendly legacy code or metadata;
- production-domain consistency checks.

**No placeholders, dummy copy, “coming soon” sections, empty content hubs or speculative landing pages may be introduced.**

### WAVE B — PRODUCTION CUTOVER CHECK

Once the final build is deployed to `nutsparadise.co.za`, perform one launch verification pass:

- HTTPS and preferred-host redirects;
- production `APP_URL`;
- live canonicals;
- live Open Graph URLs;
- sitemap URLs;
- robots.txt;
- public crawlability;
- status-code crawl;
- Rich Results validation;
- Lighthouse/PageSpeed on the actual production network;
- Search Console/Bing verification and sitemap submission where account access is available.

This is separate from Wave A because live DNS, TLS, crawler access and real production response behavior cannot be validated purely from the repository.

### WAVE C — SEARCH GROWTH

After indexing begins, use real search data rather than guesses:

- Search Console queries and impressions;
- CTR opportunities;
- pages Google is choosing for queries;
- indexing/canonical issues;
- actual Core Web Vitals field data;
- earned links and brand mentions;
- competitor movements;
- buyer questions that emerge from real enquiries.

Authority building and ongoing content are not part of the closing code sprint because they depend on time, external websites and real market evidence.

**Bottom line:** the website SEO implementation itself is a one-shot. Search growth afterward is iterative by nature.

---

## 2. Hard evidence boundary

Use only facts already verified in the repository or explicitly supplied by the client.

Current usable entity facts include:

- Nuts Paradise;
- South African processor and exporter;
- macadamia and cashew products;
- processing facility at Riverside Park Industrial Zone, Rapid Street, Riverside Park, Mbombela, South Africa;
- processing capacity of up to 1,000 MT per month;
- FSSC 22000 certified macadamia and cashew processing;
- administrative office at 222 Smit Street, Braamfontein 2000, Johannesburg, South Africa;
- phone `+27 76 020 4666`;
- email `info@nutsparadise.co.za`;
- production domain `nutsparadise.co.za`;
- professional buyer audiences already stated on the site: importers, distributors, food manufacturers, retail/private-label teams and ingredient buyers.

Do **not** invent grades, kernel styles, sizes, product codes, packaging, shelf life, nutrition, minimum orders, prices, availability, export destinations, ports, shipping partners, Incoterms, lead times, customer names, reviews, awards, memberships, social profiles, traceability technology or certificate validity dates.

If a missing fact would be needed to support a page or schema type, omit that claim or schema instead of filling the gap.

---

## 3. Search-intent ownership

Each current commercial route must own a distinct search intent and reinforce adjacent pages rather than cannibalize them.

| Route | Primary intent |
|---|---|
| `/` | South African macadamia and cashew processor/exporter |
| `/about` | South African nut processor/export partner |
| `/products` | B2B macadamia and cashew supply portfolio |
| `/products/macadamias` | South African macadamia processing/supply |
| `/products/cashews` | cashew processing/export supply |
| `/processing` | macadamia and cashew processing in Mbombela |
| `/quality-certification` | FSSC 22000 certified nut processing |
| `/traceability` | nut processing traceability and documentation |
| `/buyers` | macadamia and cashew supply for international buyers |
| `/export-markets` | export-ready South African nut processing/supply |
| `/contact` | contact a South African macadamia/cashew processor |

Privacy and Terms are user-trust/legal utility pages, not commercial search landing pages.

---

## 4. Wave A acceptance gate

Wave A is complete only when:

- every commercial public route has one canonical URL, one H1 and unique search-focused metadata;
- canonical URLs are generated from the production `APP_URL`, not the current request hostname;
- non-production environments automatically emit `noindex,nofollow`;
- Privacy and Terms remain accessible but are not included in the commercial XML sitemap;
- auth/account routes emit `noindex,nofollow`;
- Organization, WebSite, WebPage and BreadcrumbList structured data accurately reflect visible verified information;
- AboutPage, ContactPage and CollectionPage types are used only where they genuinely fit;
- no Product, Offer, Review, AggregateRating, FAQPage, certification or award schema is fabricated;
- the product collection can reference the real Macadamia and Cashew landing pages without inventing offers;
- sitemap includes only canonical indexable 200 routes and truthful modification dates;
- robots.txt references the production sitemap and excludes private/account surfaces;
- current internal navigation and footer provide crawlable HTML links to all commercial pages;
- images retain descriptive alt text, dimensions and modern delivery already present in the build;
- public SEO regression tests cover canonical URLs, schema, sitemap and indexability;
- existing `composer ci:check` and frontend build stay green.

---

## 5. Wave B — real-domain launch gate

After deployment to `nutsparadise.co.za`:

- set `APP_ENV=production`;
- set `APP_DEBUG=false`;
- set `APP_URL=https://nutsparadise.co.za`;
- confirm all alternate host/protocol variants permanently redirect to the preferred HTTPS hostname;
- crawl the live domain externally;
- verify canonicals, Open Graph URLs, schema URLs, sitemap and robots all use the production domain;
- validate JSON-LD in Google's Rich Results Test and Schema.org validator;
- run PageSpeed/Lighthouse against the real server/network;
- verify Search Console and Bing Webmaster Tools where account access is available;
- submit `/sitemap.xml` after verification;
- inspect indexing and canonical selection after Google begins crawling.

---

## 6. Wave C — authority and search growth

Do not create an empty blog or mass-generated content library during the closing sprint.

Only expand content after real evidence or real search demand exists. Good future candidates include real buyer questions, actual product specification guidance, actual facility/process detail, actual quality documentation and real export-preparation guidance.

Prefer unique first-party operational knowledge over generic AI-generated nut articles.

Authority building should use legitimate agriculture, food-processing, export, trade and buyer publications, directories, memberships and partnerships. Do not buy link-network placements or automate irrelevant directory submissions.

---

## 7. AI Search / AI Overviews policy

There is no separate Google AI-SEO trick required. Optimize for the same fundamentals:

- crawlable HTML;
- useful visible content;
- unique first-party information;
- clear entity relationships;
- strong internal links;
- accurate schema that matches visible content;
- fast accessible pages;
- trustworthy external references and links earned over time.

Do not spend closing-sprint time on speculative `llms.txt`, hidden AI-only copy, content chunking hacks or fake question pages.

---

## 8. Final rule

**No SEO change is allowed to make the website less credible to a real procurement buyer.**

Search optimization must strengthen the same page a human buyer sees. If a tactic requires hidden text, invented claims, fake scale, fake markets, fake customers or filler content, do not implement it.
