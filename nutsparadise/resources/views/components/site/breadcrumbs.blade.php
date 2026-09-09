@php
    $routeName = request()->route()?->getName();
    $labels = [
        'about' => 'About Us',
        'products.index' => 'Products',
        'products.macadamias' => 'Macadamias',
        'products.cashews' => 'Cashews',
        'processing' => 'Processing',
        'quality' => 'Quality & Certification',
        'traceability' => 'Traceability',
        'buyers' => 'Buyers',
        'export-markets' => 'Export Markets',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms of Use',
    ];
@endphp

@if($routeName && isset($labels[$routeName]))
    <nav class="site-breadcrumbs" aria-label="Breadcrumb">
        <div class="np-container">
            <ol>
                <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                @if(str_starts_with($routeName, 'products.') && $routeName !== 'products.index')
                    <li><a href="{{ route('products.index') }}" wire:navigate>Products</a></li>
                @endif
                <li aria-current="page">{{ $labels[$routeName] }}</li>
            </ol>
        </div>
    </nav>
@endif
