@php
    $classes = "flex justify-{$attributes->get('x', 'between')} items-{$attributes->get('y', 'center')}";
@endphp

<div {{ $attributes->merge([
    'class' => $classes,
    'dir' => dashboard_rtl('rtl', 'ltr')
]) }}>
    {!! $slot !!}
</div>
