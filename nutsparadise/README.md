# Nuts Paradise

Nuts Paradise is the new Laravel application for the next iteration of the site. The
parent document root contains the existing static concepts and has deliberately been
left alone; the root `.htaccess` now hands web requests to this application's
`public/` directory.

## Build contract for every model

This project is being built by multiple models over time. Preserve these decisions in
every future change:

- Keep the public site and the authenticated/admin surfaces as separate shells. The
  public shell is where the brand, origin story, product catalogue, quality and
  contact journey will live. The authenticated shell and Filament panel are for
  operational workflows.
- Treat navigation as a persistent application shell. Internal links should use
  Livewire's `wire:navigate` (and `wire:navigate.hover` where prefetching is useful)
  so the browser swaps the page body without a full document reload. Keep the header,
  navigation and any expensive, stateful UI inside `@persist` regions when they are
  introduced.
- Use `wire:current`, `wire:loading` and accessible focus states to make the fast
  transition visible and understandable. Respect reduced-motion preferences.
- Do not put `wire:navigate` on external links, downloads, mail links or links that
  intentionally leave the application. Use normal links for those destinations.
- Use named route helpers (`route(...)`) rather than hard-coded internal URLs. This
  protects the navigation shell when routes, prefixes or deployment paths change.
- Do not bypass Livewire's asset or request endpoints. Keep `@vite`, Flux, Livewire
  and Filament assets working from the Laravel `public/` directory.
- Every new page should be tested both as a direct request and as a Livewire
  navigation visit. Preserve page titles, canonical/SEO metadata and keyboard
  accessibility during navigation.

The starter kit already demonstrates this pattern in the authenticated sidebar,
settings pages and auth links. The public home is now the migrated Concept 03
experience (`resources/views/design3.blade.php`), with the original cinematic
green/lime system, real supplied photography and a one-page anchor flow. Keep that
visual language intact when adding Livewire components; use `wire:navigate` for new
page-level transitions and ordinary hash links for movement within this long-form
home page.

## Product/brand information architecture

The client selected the direction represented by `3.html` as the visual reference for
the next build: rooted in Africa, cinematic, warm and origin-led. The existing
`3.html` and the other static concept files are references only and must not be
rewritten or moved unless explicitly requested.

The home page follows a story flow inspired by the clear flow on
[Certified Origins' About page](https://certifiedorigins.com/about/), while keeping
all Nuts Paradise claims evidence-based:

1. Origin and people — where the ingredients come from and who makes the work
   possible.
2. Quality and authenticity — standards, testing and traceability that can be
   documented.
3. Capability and processing — the products, formats, processing and fulfilment
   options that are actually available.
4. Global logistics — markets served, lead times and export support once verified.
5. Responsible sourcing and community — only publish certifications, impact numbers
   and partner claims after the client supplies proof.
6. Innovation and resources — recipes, insights, downloads and useful buyer tools.
7. Contact / request a quote — a clear conversion path for wholesale and partners.

Concept 03 currently expresses that sequence as: cinematic origin hero, evidence
strip, company story, macadamia/cashew collection, processing steps, global logistics,
quality standard and buyer enquiry dialog. The images are copied into the new app's
`public/assets/photos` directory so the Laravel route does not depend on the parent
static site at runtime.

Do not invent certifications, locations, production volumes, customers or contact
details while filling these sections in.

## Stack

- Laravel 13.31
- Livewire 4.4 with the Laravel Livewire starter kit and Flux UI
- Laravel Fortify 1.39 for authentication and two-factor/passkey-ready account flows
- Filament 5.8 with the `/admin` panel provider
- Vite Plus, Tailwind CSS 4 and SQLite for the initial skeleton
- PHP 8.3+ (the server currently provides PHP 8.4)

The approved brand asset is `public/logo.png` (copied from the root `logo.png` supplied
by the client). `public/favicon.png` intentionally uses the same source asset so the
logo remains consistent across the home page, auth pages and browser tab.

## Local development

From this directory:

```bash
composer install
cp .env.example .env # only when setting up a fresh clone
php artisan key:generate # only when APP_KEY is empty
php artisan migrate
npm install
npm run build
php artisan serve
```

The admin panel is available at `/admin`. Create an authenticated user before
building protected Filament resources. For production, the web server's document
root must be `nutsparadise/public`, never the application root.

Before handing work to the next model, run:

```bash
php artisan route:list
php artisan view:cache
npm run build
```

Then check a direct page load, an internal `wire:navigate` transition, the login
flow and `/admin` in a browser.

## Deployment boundary

Only the parent `.htaccess` is used to route the existing domain into this new app.
The parent static HTML, CSS, JavaScript and image files remain untouched. Application
runtime writes belong in `storage/`, `bootstrap/cache/` and the SQLite database; do
not make the parent document root writable as a shortcut.
