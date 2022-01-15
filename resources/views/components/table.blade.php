<x-dashboard-card :inset="true">
    {{-- Table header --}}
    @if ($attributes->get('title') || $attributes->get('subtitle') || isset($cardHeader))
        <x-slot name="header">
            @if ($attributes->get('title'))
                {{ $attributes->get('title') }}
            @endif

            @if ($attributes->get('subtitle'))
                {{ $attributes->get('subtitle') }}
            @endif

            @isset($cardHeader)
                {!! $cardHeader !!}
            @endisset
        </x-slot>
    @endif

    {{-- table body --}}
    <table {{ $attributes->merge([
        'class' => 'table-auto w-full',
    ]) }}>
        {!! $slot !!}
    </table>

    {{-- table footer --}}
    @isset($cardFooter)
        <x-slot name="footer">
            {!! $cardFooter !!}
        </x-slot>
    @endisset
</x-dashboard-card>
