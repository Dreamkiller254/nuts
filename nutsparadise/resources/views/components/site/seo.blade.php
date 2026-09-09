@props(['title', 'description', 'robots' => 'index,follow'])
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="robots" content="{{ $robots }}">
<link rel="canonical" href="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Nuts Paradise">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('assets/photos/macadamias.jpg') }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ asset('assets/photos/macadamias.jpg') }}">
