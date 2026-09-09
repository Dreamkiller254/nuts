<x-layouts.site>
    <section class="site-hero">
        <p class="site-kicker">From rooted places to remarkable tables</p>
        <h1>Good things start at the source.</h1>
        <p class="site-lede">Nuts Paradise is being built as a fast, transparent home for origin, quality and the people behind every ingredient.</p>
        <div class="site-hero-actions">
            <a class="site-button site-button-primary" href="{{ route('products') }}" wire:navigate>Explore the range <span aria-hidden="true">→</span></a>
            <a class="site-button site-button-quiet" href="{{ route('about') }}" wire:navigate>Our origin</a>
        </div>
    </section>

    <section class="site-grid" aria-label="What comes next">
        <a class="site-card" href="{{ route('about') }}" wire:navigate>
            <span class="site-card-index">01</span>
            <h2>Origin, with receipts.</h2>
            <p>Stories, places and partners presented with the evidence to back them up.</p>
        </a>
        <a class="site-card" href="{{ route('quality') }}" wire:navigate>
            <span class="site-card-index">02</span>
            <h2>Quality you can follow.</h2>
            <p>A clear path from source to specification, pack and delivery.</p>
        </a>
        <a class="site-card" href="{{ route('contact') }}" wire:navigate>
            <span class="site-card-index">03</span>
            <h2>Built for good conversations.</h2>
            <p>A simple route for buyers, partners and curious people to reach the team.</p>
        </a>
    </section>
</x-layouts.site>
