<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicSiteTest extends TestCase
{
    public function test_public_pages_render_successfully(): void
    {
        $routes = [
            'home',
            'about',
            'products.index',
            'products.macadamias',
            'products.cashews',
            'processing',
            'quality',
            'traceability',
            'buyers',
            'export-markets',
            'contact',
            'privacy',
            'terms',
        ];

        foreach ($routes as $route) {
            $this->get(route($route))
                ->assertOk()
                ->assertSee('Nuts Paradise', false);
        }
    }

    public function test_non_production_public_pages_are_noindex(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('<meta name="robots" content="noindex,nofollow">', false);
    }

    public function test_production_pages_emit_canonical_metadata_and_verified_schema(): void
    {
        $this->app->detectEnvironment(fn (): string => 'production');
        config(['app.url' => 'https://nutsparadise.co.za']);

        $response = $this->get('/about');

        $response
            ->assertOk()
            ->assertSee('<link rel="canonical" href="https://nutsparadise.co.za/about">', false)
            ->assertSee('South African Nut Processor &amp; Exporter | Nuts Paradise', false)
            ->assertSee('application/ld+json', false)
            ->assertSee('"@type":"Organization"', false)
            ->assertSee('"@type":"WebSite"', false)
            ->assertSee('"@type":"AboutPage"', false)
            ->assertSee('"@type":"BreadcrumbList"', false)
            ->assertSee('info@nutsparadise.co.za', false)
            ->assertSee('+27 76 020 4666', false)
            ->assertDontSee('"@type":"Product"', false)
            ->assertDontSee('"@type":"Review"', false);
    }

    public function test_product_collection_schema_links_to_real_product_pages_without_fake_offer_schema(): void
    {
        $this->app->detectEnvironment(fn (): string => 'production');
        config(['app.url' => 'https://nutsparadise.co.za']);

        $this->get('/products')
            ->assertOk()
            ->assertSee('"@type":"CollectionPage"', false)
            ->assertSee('"@type":"ItemList"', false)
            ->assertSee('https://nutsparadise.co.za/products/macadamias', false)
            ->assertSee('https://nutsparadise.co.za/products/cashews', false)
            ->assertDontSee('"@type":"Offer"', false)
            ->assertDontSee('"@type":"Product"', false);
    }

    public function test_legal_utility_pages_are_accessible_but_noindex_in_production(): void
    {
        $this->app->detectEnvironment(fn (): string => 'production');
        config(['app.url' => 'https://nutsparadise.co.za']);

        $this->get('/privacy-policy')
            ->assertOk()
            ->assertSee('<meta name="robots" content="noindex,follow">', false)
            ->assertDontSee('application/ld+json', false);

        $this->get('/terms-of-use')
            ->assertOk()
            ->assertSee('<meta name="robots" content="noindex,follow">', false)
            ->assertDontSee('application/ld+json', false);
    }

    public function test_sitemap_contains_only_canonical_indexable_routes_and_lastmod(): void
    {
        config(['app.url' => 'https://nutsparadise.co.za']);

        $response = $this->get('/sitemap.xml');

        $response
            ->assertOk()
            ->assertHeader('Content-Type', 'application/xml; charset=UTF-8')
            ->assertSee('<loc>https://nutsparadise.co.za/</loc>', false)
            ->assertSee('<loc>https://nutsparadise.co.za/products</loc>', false)
            ->assertSee('<loc>https://nutsparadise.co.za/contact</loc>', false)
            ->assertSee('<lastmod>2026-09-09</lastmod>', false)
            ->assertDontSee('<loc>https://nutsparadise.co.za/privacy-policy</loc>', false)
            ->assertDontSee('<loc>https://nutsparadise.co.za/terms-of-use</loc>', false);
    }

    public function test_whatsapp_and_simple_cookie_controls_render_on_public_pages(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('data-whatsapp-chat', false)
            ->assertSee('data-whatsapp-number="27760204666"', false)
            ->assertSee('action="https://wa.me/27760204666"', false)
            ->assertSee('data-cookie-banner', false)
            ->assertSee('We use essential storage and optional external media.', false)
            ->assertSee('data-cookie-accept', false)
            ->assertSee('>Accept</button>', false)
            ->assertSee('data-cookie-reject', false)
            ->assertSee('>Reject</button>', false)
            ->assertDontSee('Manage choices', false)
            ->assertDontSee('Choose what you allow', false);
    }

    public function test_google_map_is_blocked_until_external_media_consent(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertSee('data-cookie-media="external"', false)
            ->assertSee('src="about:blank"', false)
            ->assertSee('data-cookie-src="https://www.google.com/maps/embed', false)
            ->assertSee('data-cookie-allow-media', false)
            ->assertSee('Google Maps loads only with optional media consent.', false);
    }

    public function test_privacy_policy_explains_cookie_and_whatsapp_controls(): void
    {
        $this->get('/privacy-policy')
            ->assertOk()
            ->assertSee('Cookies, browser storage and consent', false)
            ->assertSee('Optional external media is disabled by default.', false)
            ->assertSee('floating WhatsApp form', false)
            ->assertSee('data-cookie-settings', false);
    }

    public function test_removed_photography_page_returns_not_found(): void
    {
        $this->get('/photography')
            ->assertNotFound()
            ->assertSee('404 / Page not found', false)
            ->assertSee('noindex,nofollow', false);
    }

    public function test_unknown_public_route_uses_branded_404(): void
    {
        $this->get('/this-page-does-not-exist')
            ->assertNotFound()
            ->assertSee('404 / Page not found', false)
            ->assertSee('noindex,nofollow', false);
    }

    public function test_quality_legacy_route_redirects_to_canonical_page(): void
    {
        $this->get('/quality')
            ->assertRedirect('/quality-certification');
    }
}
