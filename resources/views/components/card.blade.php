<div class="card"
    {{ $attributes }}>
    @isset($header)
        <div @class(['card-header'])>
            {!! $header !!}
        </div>
    @endisset

    <div @class([
        'p-5' => !$inset,
    ])>
        {!! $slot !!}
    </div>

    @isset($footer)
        <div class="card-footer">
            {!! $footer !!}
        </div>
    @endisset
</div>
