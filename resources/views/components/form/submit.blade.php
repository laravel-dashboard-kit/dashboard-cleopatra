@php
$tmpId = json_encode([
    'titleText' => trans('messages.updating'),
    'icon' => 'info',
    'timeout' => 5000,
]);
@endphp

<x-dashboard-button {{ $attributes->merge([
    'type' => 'submit',
    'color' => 'indigo',
]) }}
    onclick="SwalAlert({{ $tmpId }})">
    @if (strlen($slot) > 0)
        {!! $slot !!}
    @else
        حفظ
    @endif
</x-dashboard-button>
