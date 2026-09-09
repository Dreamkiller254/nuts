@php
    $routeName = request()->route()?->getName();
    $pages = config('seo.pages', []);
    $page = $routeName ? ($pages[$routeName] ?? []) : [];
    $parentRoute = $page['parent'] ?? null;
    $parent = $parentRoute ? ($pages[$parentRoute] ?? []) : [];
@endphp

@if($routeName && $routeName !== 'home' && $page)
    <nav class="site-breadcrumbs" aria-label="Breadcrumb">
        <div class="np-container">
            <ol>
                <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                @if($parentRoute && $parent)
                    <li><a href="{{ route($parentRoute) }}" wire:navigate>{{ $parent['label'] }}</a></li>
                @endif
                <li aria-current="page">{{ $page['label'] }}</li>
            </ol>
        </div>
    </nav>
@endif
