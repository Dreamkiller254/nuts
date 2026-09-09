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

    public function test_sitemap_is_xml_and_contains_core_routes(): void
    {
        $response = $this->get(route('sitemap'));

        $response
            ->assertOk()
            ->assertHeader('Content-Type', 'application/xml; charset=UTF-8')
            ->assertSee(route('home'), false)
            ->assertSee(route('products.index'), false)
            ->assertSee(route('contact'), false);
    }

    public function test_removed_photography_page_returns_not_found(): void
    {
        $this->get('/photography')
            ->assertNotFound()
            ->assertSee('<meta name="robots" content="noindex,follow">', false);
    }

    public function test_unknown_public_route_uses_branded_404(): void
    {
        $this->get('/this-page-does-not-exist')
            ->assertNotFound()
            ->assertSee('404 / Page not found', false)
            ->assertSee('<meta name="robots" content="noindex,follow">', false);
    }

    public function test_quality_legacy_route_redirects_to_canonical_page(): void
    {
        $this->get('/quality')
            ->assertRedirect('/quality-certification');
    }
}
