<a
    {{ $attributes->merge([
        'class' => 'flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out',
        'href' => $attributes->get('href', 'javascript:void(0);'),
    ]) }}>

    {!! $slot !!}
</a>

@unless($hideHr)
    <hr>
@endunless
