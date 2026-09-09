@props([
    'title',
    'description',
    'robots' => 'index,follow',
    'image' => null,
    'imageAlt' => 'Nuts Paradise macadamia and cashew products for global buyers',
])
@php
    $routeName = request()->route()?->getName();
    $pages = config('seo.pages', []);
    $pageConfig = $routeName ? ($pages[$routeName] ?? []) : [];
    $baseUrl = rtrim((string) config('app.url'), '/');
    $routePath = $routeName && $pageConfig ? route($routeName, [], false) : request()->getPathInfo();
    $canonical = $routePath === '/' ? $baseUrl.'/' : $baseUrl.'/'.ltrim($routePath, '/');
    $resolvedTitle = $pageConfig['title'] ?? $title;
    $resolvedDescription = $pageConfig['description'] ?? $description;
    $routeIndexable = (bool) ($pageConfig['indexable'] ?? true);
    $isProduction = app()->environment('production');

    if (! $isProduction) {
        $effectiveRobots = 'noindex,nofollow';
    } elseif (! $routeIndexable) {
        $effectiveRobots = 'noindex,follow';
    } elseif ($robots === 'index,follow') {
        $effectiveRobots = 'index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1';
    } else {
        $effectiveRobots = $robots;
    }

    $socialImagePath = $image ? '/'.ltrim($image, '/') : '/assets/photos/macadamias.jpg';
    $socialImage = $baseUrl.$socialImagePath;
    $schemaGraph = [];

    if ($isProduction && $routeIndexable && $routeName && $pageConfig) {
        $organization = config('seo.organization');
        $organizationId = $baseUrl.'/#organization';
        $websiteId = $baseUrl.'/#website';
        $webpageId = $canonical.'#webpage';
        $logoUrl = $baseUrl.'/'.ltrim($organization['logo'], '/');

        $locations = collect($organization['locations'])->map(function (array $location): array {
            $address = [
                '@type' => 'PostalAddress',
                'streetAddress' => $location['street_address'],
                'addressLocality' => $location['locality'],
                'addressCountry' => $location['country'],
            ];

            if (! empty($location['postal_code'])) {
                $address['postalCode'] = $location['postal_code'];
            }

            return [
                '@type' => 'Place',
                'name' => $location['name'],
                'address' => $address,
            ];
        })->values()->all();

        $schemaGraph[] = [
            '@type' => 'Organization',
            '@id' => $organizationId,
            'name' => $organization['name'],
            'url' => $baseUrl.'/',
            'description' => $organization['description'],
            'logo' => [
                '@type' => 'ImageObject',
                '@id' => $baseUrl.'/#logo',
                'url' => $logoUrl,
                'contentUrl' => $logoUrl,
                'caption' => 'Nuts Paradise',
            ],
            'image' => ['@id' => $baseUrl.'/#logo'],
            'email' => $organization['email'],
            'telephone' => $organization['telephone'],
            'contactPoint' => [[
                '@type' => 'ContactPoint',
                'telephone' => $organization['telephone'],
                'email' => $organization['email'],
                'contactType' => 'sales',
                'availableLanguage' => ['English'],
            ]],
            'location' => $locations,
            'knowsAbout' => $organization['knows_about'],
        ];

        $schemaGraph[] = [
            '@type' => 'WebSite',
            '@id' => $websiteId,
            'url' => $baseUrl.'/',
            'name' => 'Nuts Paradise',
            'description' => 'South African macadamia and cashew processing for professional international buyers.',
            'publisher' => ['@id' => $organizationId],
            'inLanguage' => 'en-ZA',
        ];

        $breadcrumbId = $canonical.'#breadcrumb';
        $breadcrumbRoutes = ['home'];
        if (! empty($pageConfig['parent'])) {
            $breadcrumbRoutes[] = $pageConfig['parent'];
        }
        if ($routeName !== 'home') {
            $breadcrumbRoutes[] = $routeName;
        }

        if ($routeName !== 'home') {
            $breadcrumbItems = [];
            foreach ($breadcrumbRoutes as $position => $breadcrumbRoute) {
                $breadcrumbPage = $pages[$breadcrumbRoute] ?? [];
                $breadcrumbPath = route($breadcrumbRoute, [], false);
                $breadcrumbUrl = $breadcrumbPath === '/' ? $baseUrl.'/' : $baseUrl.'/'.ltrim($breadcrumbPath, '/');
                $breadcrumbItems[] = [
                    '@type' => 'ListItem',
                    'position' => $position + 1,
                    'name' => $breadcrumbPage['label'] ?? 'Nuts Paradise',
                    'item' => $breadcrumbUrl,
                ];
            }

            $schemaGraph[] = [
                '@type' => 'BreadcrumbList',
                '@id' => $breadcrumbId,
                'itemListElement' => $breadcrumbItems,
            ];
        }

        $webpage = [
            '@type' => $pageConfig['type'] ?? 'WebPage',
            '@id' => $webpageId,
            'url' => $canonical,
            'name' => $resolvedTitle,
            'description' => $resolvedDescription,
            'isPartOf' => ['@id' => $websiteId],
            'about' => ['@id' => $organizationId],
            'inLanguage' => 'en-ZA',
            'primaryImageOfPage' => [
                '@type' => 'ImageObject',
                'url' => $socialImage,
                'contentUrl' => $socialImage,
                'caption' => $imageAlt,
            ],
        ];

        if ($routeName !== 'home') {
            $webpage['breadcrumb'] = ['@id' => $breadcrumbId];
        }

        if ($routeName === 'products.index') {
            $webpage['mainEntity'] = [
                '@type' => 'ItemList',
                'itemListElement' => [
                    [
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'South African Macadamias',
                        'url' => $baseUrl.route('products.macadamias', [], false),
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 2,
                        'name' => 'Cashews',
                        'url' => $baseUrl.route('products.cashews', [], false),
                    ],
                ],
            ];
        }

        $schemaGraph[] = $webpage;
        $structuredData = [
            '@context' => 'https://schema.org',
            '@graph' => $schemaGraph,
        ];
    }
@endphp
<title>{{ $resolvedTitle }}</title>
<meta name="description" content="{{ $resolvedDescription }}">
<meta name="robots" content="{{ $effectiveRobots }}">
<meta name="theme-color" content="#102b20">
<link rel="canonical" href="{{ $canonical }}">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_ZA">
<meta property="og:site_name" content="Nuts Paradise">
<meta property="og:title" content="{{ $resolvedTitle }}">
<meta property="og:description" content="{{ $resolvedDescription }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $socialImage }}">
<meta property="og:image:alt" content="{{ $imageAlt }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $resolvedTitle }}">
<meta name="twitter:description" content="{{ $resolvedDescription }}">
<meta name="twitter:image" content="{{ $socialImage }}">
<meta name="twitter:image:alt" content="{{ $imageAlt }}">
@if(isset($structuredData))
<script type="application/ld+json">{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}</script>
@endif
