<div {{ $attributes->merge([
    'class' => "flex justify-${x} items-${y}",
    // 'dir' => dashboard_rtl('rtl', 'ltr')
]) }}>
    {!! $slot !!}
</div>
