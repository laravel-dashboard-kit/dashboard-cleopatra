<x-dashboard-button {{ $attributes->merge([
    'href' => '#',
    'color' => 'danger',
]) }}>
    @if (strlen($slot) > 0)
        {!! $slot !!}
    @else
        عودة
    @endif
</x-dashboard-button>
