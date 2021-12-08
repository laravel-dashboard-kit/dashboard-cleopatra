<x-dashboard-button {{ $attributes->merge([
    'class' => 'dropdown-item',
    'color' => 'light'
]) }}>
    {!! $slot !!}
</x-dashboard-button>
