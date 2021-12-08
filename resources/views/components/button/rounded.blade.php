<button
    {{ $attributes->merge([
    'type' => 'button',
    'class' => 'btn btn-rounded waves-effect waves-light btn-' . $attributes->get('color') . ' btn-' . $attributes->get('size'),
]) }}>
    @if ($attributes->get('icon-before'))
        <span class="btn-label">
            @svg($attributes->get('icon-before'))
        </span>
    @endif

    {!! $slot !!}

    @if ($attributes->get('icon-after'))
        <span class="btn-label-right">
            @svg($attributes->get('icon-after'))
        </span>
    @endif
</button>
