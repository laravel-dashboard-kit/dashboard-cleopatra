<th {{ $attributes->except('class')->merge([]) }}
    @class([
        'px-4 py-2 font-normal ' . dashboard_rtl('border-r', 'border-l'),
        dashboard_rtl('border-l-0', 'border-r-0') => isset($last) && $last,
    ])>
    {!! $slot !!}
</th>
