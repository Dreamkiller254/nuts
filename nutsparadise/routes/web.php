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
Route::view('/photography', 'design3.photography')->name('photography');

Route::get('/sitemap.xml', function () {
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

    return response()
        ->view('sitemap', ['urls' => array_map(fn (string $route) => route($route), $routes)])
        ->header('Content-Type', 'application/xml; charset=UTF-8');
})->name('sitemap');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
