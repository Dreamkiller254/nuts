<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/products', 'pages.products.index')->name('products.index');
Route::view('/products/macadamias', 'pages.products.macadamias')->name('products.macadamias');
Route::view('/products/cashews', 'pages.products.cashews')->name('products.cashews');
Route::view('/processing', 'pages.processing')->name('processing');
Route::view('/quality-certification', 'pages.quality-certification')->name('quality');
Route::view('/traceability', 'pages.traceability')->name('traceability');
Route::view('/buyers', 'pages.buyers')->name('buyers');
Route::view('/export-markets', 'pages.export-markets')->name('export-markets');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy');
Route::view('/terms-of-use', 'pages.terms-of-use')->name('terms');
Route::redirect('/quality', '/quality-certification', 301);

Route::get('/sitemap.xml', function () {
    $baseUrl = rtrim((string) config('app.url'), '/');
    $pages = config('seo.pages', []);
    $entries = [];

    if (is_array($pages)) {
        foreach ($pages as $routeName => $page) {
            if (! is_string($routeName) || ! is_array($page) || ! ($page['indexable'] ?? false)) {
                continue;
            }

            $path = route($routeName, [], false);
            $lastmod = $page['lastmod'] ?? null;

            $entries[] = [
                'loc' => $path === '/' ? $baseUrl.'/' : $baseUrl.'/'.ltrim($path, '/'),
                'lastmod' => is_string($lastmod) ? $lastmod : null,
            ];
        }
    }

    return response()
        ->view('sitemap', ['entries' => $entries])
        ->header('Content-Type', 'application/xml; charset=UTF-8')
        ->header('Cache-Control', 'public, max-age=3600');
})->name('sitemap');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
