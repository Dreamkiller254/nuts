<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'design3')->name('home');
Route::view('/photography', 'design3.photography')->name('photography');

$sitePages = [
    'about' => [
        'eyebrow' => 'Origin',
        'heading' => 'A better story starts close to the soil.',
        'summary' => 'A future home for the people, places and practices behind every Nuts Paradise ingredient.',
    ],
    'products' => [
        'eyebrow' => 'Products',
        'heading' => 'A considered range, made useful.',
        'summary' => 'A clear product catalogue for buyers who care about flavour, format and what happens before delivery.',
    ],
    'capabilities' => [
        'eyebrow' => 'Capabilities',
        'heading' => 'From raw potential to ready-to-use.',
        'summary' => 'The future place to understand processing, formats, lead times and the details that make a partnership work.',
    ],
    'quality' => [
        'eyebrow' => 'Quality',
        'heading' => 'Know what you are buying.',
        'summary' => 'A traceable path for specifications, testing, authenticity and the evidence behind every promise.',
    ],
    'contact' => [
        'eyebrow' => 'Contact',
        'heading' => 'Let’s make something good happen.',
        'summary' => 'A focused conversation for buyers, partners and people who want to know more about the journey from source to table.',
    ],
];

foreach ($sitePages as $slug => $page) {
    Route::view('/'.$slug, 'site.page', $page)->name($slug);
}

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
