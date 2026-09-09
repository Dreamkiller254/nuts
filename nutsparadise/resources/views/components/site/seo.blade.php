@props([
    'title',
    'description',
    'robots' => 'index,follow',
    'image' => null,
    'imageAlt' => 'Illustrative macadamia photography for Nuts Paradise',
])
@php
    $canonical = url()->current();
    $socialImage = $image ? asset($image) : asset('assets/photos/macadamias.jpg');
@endphp
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="robots" content="{{ $robots }}">
<meta name="theme-color" content="#102b20">
<link rel="canonical" href="{{ $canonical }}">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_ZA">
<meta property="og:site_name" content="Nuts Paradise">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $socialImage }}">
<meta property="og:image:alt" content="{{ $imageAlt }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $socialImage }}">
<meta name="twitter:image:alt" content="{{ $imageAlt }}">
