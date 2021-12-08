<button type="button"
    class="btn btn-outline-{{ $attributes->get('color') }} btn-rounded waves-effect waves-light">
    @if ($attributes->get('icon-before'))
        @svg($attributes->get('icon-before'))
    @endif

    {!! $slot !!}

    @if ($attributes->get('icon-after'))
        @svg($attributes->get('icon-after'))
    @endif
</button>
