<td {{ $attributes->except('class')->merge([]) }}
    @class([
        'border px-4 py-2 ' . dashboard_rtl("border-l-0", "border-l-0"),
        dashboard_rtl('border-l-0', 'border-r-0') => isset($last) && $last
    ])>
    {!! $slot !!}
</td>
