<div class="dropdown d-inline-flex mt-2 mb-2">
    <x-dashboard-button
        {{ $attributes->merge([
    'aria-expanded' => 'false',
    'aria-haspopup' => 'true',
    'data-toggle' => 'dropdown',
    'color' => $attributes->get('color'),
    'outline' => $attributes->get('outline'),
]) }}>
        @isset($title)
            {!! $title !!}
        @else
            <x-ri-arrow-down-s-fill />
        @endisset
    </x-dashboard-button>

    <div class="dropdown-menu shadow tx-13">
        {!! $slot !!}
    </div>
</div>
