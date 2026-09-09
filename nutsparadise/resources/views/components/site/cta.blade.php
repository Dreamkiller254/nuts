@props([
    'eyebrow' => 'Buyer enquiries',
    'heading' => 'Start with your requirements.',
    'copy' => 'Tell us the product, estimated volume, destination market and timing. We will use that brief to start the right conversation.',
    'label' => 'Request a Quote',
])

<section class="content-cta">
    <div class="np-container content-cta-grid reveal">
        <div>
            <span class="np-label">{{ $eyebrow }}</span>
            <h2>{{ $heading }}</h2>
        </div>
        <div>
            <p class="np-body">{{ $copy }}</p>
            <a class="np-button lime" href="{{ route('contact') }}" wire:navigate>{{ $label }} <span aria-hidden="true">↗</span></a>
        </div>
    </div>
</section>
