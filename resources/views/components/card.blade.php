@props(['color' => 'blue', 'bgColor' => 'light'])


<div {{ $attributes->merge(['data-tile' => 'Hey! there'])->class("card card-text-$color card-bg-$bgColor") }}>
    <div {{ $header->attributes->class('card-header') }}>
        {{ $header }}
    </div>
    <div class="card-body">
        @if ($slot->isEmpty())
            <p class="text-muted">No content available.</p>
        @else
            {{ $slot }}
        @endif
    </div>
    <div class="card-footer">
        {{ $footer }}
    </div>
</div>
