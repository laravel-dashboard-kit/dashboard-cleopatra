<th {{ $attributes->merge(['class' => 'px-4 py-2 font-normal ' . (isset($last) ? '' : dashboard_rtl('border-l', 'border-r'))]) }}>
    {!! $slot !!}
</th>
