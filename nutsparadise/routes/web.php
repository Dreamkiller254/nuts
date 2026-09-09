<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

$sitePages = [
    '/about' => ['name' => 'about', 'eyebrow' => 'About Nuts Paradise', 'heading' => 'A South African Processing and Export Partner', 'summary' => 'Nuts Paradise processes macadamia and cashew products in South Africa for international buyers seeking dependable product preparation, quality management and export-focused support.', 'title' => 'About Nuts Paradise | South African Nut Processor & Exporter', 'description' => 'Learn about Nuts Paradise, a South African processor and exporter of macadamia and cashew products with operations in Mbombela and Johannesburg.'],
    '/products' => ['name' => 'products.index', 'eyebrow' => 'Products', 'heading' => 'Macadamia and Cashew Products', 'summary' => 'A focused product portfolio for international importers, distributors, manufacturers, retailers and ingredient buyers.', 'title' => 'Macadamia and Cashew Products | Nuts Paradise', 'description' => 'Explore macadamia and cashew products processed in South Africa by Nuts Paradise for international professional buyers.'],
    '/products/macadamias' => ['name' => 'products.macadamias', 'eyebrow' => 'Macadamias', 'heading' => 'South African-Processed Macadamias', 'summary' => 'Macadamia products prepared around approved buyer specifications, volume, destination and timing requirements.', 'title' => 'South African Macadamia Processing | Nuts Paradise', 'description' => 'Discuss South African-processed macadamia requirements with Nuts Paradise for international food, ingredient, distribution and retail markets.'],
    '/products/cashews' => ['name' => 'products.cashews', 'eyebrow' => 'Cashews', 'heading' => 'Cashews Prepared for Professional Supply', 'summary' => 'Cashew products prepared around agreed requirements for international food, ingredient, distribution and retail buyers.', 'title' => 'Cashew Processing & Export Supply | Nuts Paradise', 'description' => 'Discuss cashew product requirements with Nuts Paradise for professional international supply and export preparation.'],
    '/processing' => ['name' => 'processing', 'eyebrow' => 'Processing', 'heading' => 'Processing in South Africa', 'summary' => 'Our Riverside Park operation in Mbombela connects product preparation, quality management and export readiness with processing capacity of up to 1,000 MT per month.', 'title' => 'Macadamia & Cashew Processing in Mbombela | Nuts Paradise', 'description' => 'Nuts Paradise processes macadamias and cashews at its Riverside Park facility in Mbombela, South Africa, with capacity of up to 1,000 MT per month.'],
    '/quality-certification' => ['name' => 'quality', 'eyebrow' => 'Quality & Certification', 'heading' => 'Food Safety and Quality Management', 'summary' => 'FSSC 22000 certified processing for both macadamias and cashews, supported by controlled handling, processing oversight and buyer-focused documentation.', 'title' => 'FSSC 22000 Certified Nut Processing | Nuts Paradise', 'description' => 'Nuts Paradise is FSSC 22000 certified for both macadamia and cashew processing in South Africa.'],
    '/traceability' => ['name' => 'traceability', 'eyebrow' => 'Traceability', 'heading' => 'Traceability That Supports Professional Supply', 'summary' => 'A clear processing and export-preparation journey designed to support professional buyer requirements and documentation conversations.', 'title' => 'Traceability | Nuts Paradise', 'description' => 'Learn how Nuts Paradise supports traceability and professional supply-chain coordination for macadamia and cashew buyers.'],
    '/buyers' => ['name' => 'buyers', 'eyebrow' => 'Buyers', 'heading' => 'Supply for International Buyers', 'summary' => 'Built for importers, distributors, food manufacturers, retail and private-label teams, and ingredient buyers who need a processor/export partner.', 'title' => 'Macadamia & Cashew Supply for International Buyers | Nuts Paradise', 'description' => 'Nuts Paradise serves professional international buyers seeking South African-processed macadamia and cashew products.'],
    '/export-markets' => ['name' => 'export-markets', 'eyebrow' => 'Export Markets', 'heading' => 'Export-Ready South African Processing', 'summary' => 'Product, quality and commercial requirements aligned around the buyer brief without making unsupported destination or logistics claims.', 'title' => 'Export-Ready Macadamia & Cashew Processing | Nuts Paradise', 'description' => 'Nuts Paradise supports international buyers with South African-processed macadamia and cashew products prepared for export requirements.'],
    '/contact' => ['name' => 'contact', 'eyebrow' => 'Contact', 'heading' => 'Start With Your Requirements', 'summary' => 'Tell us the product, estimated volume, destination market and timing. The full enquiry workflow will be connected after the public front end is approved.', 'title' => 'Contact Nuts Paradise | Macadamia & Cashew Enquiries', 'description' => 'Contact Nuts Paradise to discuss South African macadamia and cashew processing, product requirements and export opportunities.'],
    '/privacy-policy' => ['name' => 'privacy', 'eyebrow' => 'Privacy', 'heading' => 'Privacy Policy', 'summary' => 'A clear public destination for the final client-approved privacy and enquiry-data disclosure.', 'title' => 'Privacy Policy | Nuts Paradise', 'description' => 'Privacy information for the Nuts Paradise website and buyer enquiry experience.'],
    '/terms-of-use' => ['name' => 'terms', 'eyebrow' => 'Terms', 'heading' => 'Terms of Use', 'summary' => 'A clear public destination for the final client-approved website terms.', 'title' => 'Terms of Use | Nuts Paradise', 'description' => 'Terms governing use of the Nuts Paradise website.'],
];

foreach ($sitePages as $uri => $page) {
    Route::view($uri, 'pages.placeholder', $page)->name($page['name']);
}

Route::redirect('/quality', '/quality-certification', 301);
Route::view('/photography', 'design3.photography')->name('photography');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
