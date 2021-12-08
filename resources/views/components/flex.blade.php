@php
    $classes = "d-flex justify-content-{$attributes->get('x', 'between')} align-items-{$attributes->get('y', 'center')}";
@endphp

<div {{ $attributes->merge([
    'class' => $classes,
]) }}>
    {!! $slot !!}
</div>
