@php
$class = 'btn ' . 'btn-' . $attributes->get('size', 'normal') . ' btn-' . $attributes->get('expand', 'normal');

if ($attributes->get('disabled')) {
    $class .= ' btn-disabled btn-dark';
} else {
    $class .= ' btn-';

    if ($attributes->get('outline')) {
        $class .= 'outline-';
    }

    $class .= $attributes->get('color', 'primary');
}

if ($attributes->get('display')) {
    $class .= ' btn-' . $attributes->get('display');
}
@endphp

@if ($attributes->get('disabled'))
    <button {{ $attributes->merge([
    'type' => 'button',
    'class' => $class,
]) }}>
        {!! $slot ?? __('Disabled') !!}
    </button>
@elseif ($attributes->get('href'))
    <a {{ $attributes->merge([
    'href' => '#',
    'class' => $class,
]) }}>
        {!! $slot ?? 'Click' !!}
    </a>
@else
    <button {{ $attributes->merge([
    'type' => 'button',
    'class' => $class,
]) }}>
        {!! $slot ?? __('Click') !!}
    </button>
@endif
