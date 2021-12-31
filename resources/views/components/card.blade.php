@php
$classes = 'card';
$card_body_classes = 'card-body';

$classes .= ' overflow-' . $attributes->get('overflow', 'hidden');

if ($attributes->get('align')) {
    $classes .= ' text-' . $attributes->get('align');
}

if ($attributes->get('bg-color')) {
    $card_body_classes .= ' bg-' . $attributes->get('bg-color');

    if (in_array($attributes->get('bg-color'), ['danger'])) {
        $card_body_classes .= ' text-white';
    }
}

if (isset($footer)) {
    $card_body_classes .= ' pb-0';
}
@endphp

<div class="card"
    dir="{{ dashboard_rtl('rtl', 'ltr') }}"
    {{ $attributes }}>
    @isset($header)
        <div @class([
            "card-header
                            bg-" . $attributes->get('header-bg'),
            // "text-white" => in_array($attributes->get('header-bg', 'gray-200'), ['primary'])
        ])>
            {!! $header !!}
        </div>
    @endisset

    <div class="p-5">
        {!! $slot !!}
    </div>

    @isset($footer)
        <div class="card-footer bg-{{ $attributes->get('footer-bg') }}">
            {!! $footer !!}
        </div>
    @endisset
</div>

{{-- <div {{ $attributes->merge([
    'class' => $classes,
]) }}>
    @if ($attributes->get('image'))
        <img alt="image"
            src="{{ $attributes->get('image') }}"
            class="IE-H-100">
    @endif


    <div class="{{ $card_body_classes }}">
        @if ($attributes->get('title'))
            <h5 class="card-title">{{ $attributes->get('title') }}</h5>
        @endif
        @if ($attributes->get('subtitle'))
            <p class="card-text">{{ $attributes->get('subtitle') }}</p>
        @endif

        <div @class([ "mt-3"=> $attributes->get('subtitle') || $attributes->get('title')
            ])>

        </div>
    </div>
</div> --}}
