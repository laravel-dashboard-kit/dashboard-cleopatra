<x-dashboard-button {{ $attributes->merge([
    'type' => 'submit',
    'color' => 'indigo',
]) }}>
    @if (strlen($slot) > 0)
        {!! $slot !!}
    @else
        حفظ
    @endif
</x-dashboard-button>
