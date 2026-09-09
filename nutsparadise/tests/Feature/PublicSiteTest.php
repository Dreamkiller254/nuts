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
