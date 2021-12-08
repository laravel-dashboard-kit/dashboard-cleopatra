@php
$classes = "badge badge-{$attributes->get('color', 'light')}";

if ($attributes->get('pill')) {
    $classes .= " badge-pill";
}
@endphp

<span {{ $attributes->merge([
    'class' => $classes,
]) }}>
    {!! $slot !!}
</span>
