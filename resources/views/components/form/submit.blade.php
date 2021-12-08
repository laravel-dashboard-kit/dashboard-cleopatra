<x-dashboard-button
    {{ $attributes->merge([
    'type' => 'submit',
    'color' => 'primary'
]) }}>
    @if (strlen($slot) > 0)
        {!! $slot !!}
    @else
        Submit
    @endif
</x-dashboard-button>
