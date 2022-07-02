<div {{ $attributes->except('class') }}
    @class([
        'alert text-white' .
        $attributes->get('color', 'bg-red-400') .
        ' ' .
        ($attributes->get('color') == 'success' ? 'bg-green-200' : '') .
        ' ' .
        ($attributes->get('dismissible') ? 'alert-dismissible ' : ' ') .
        $attributes->get('class'),
    ])
    role="alert">
    <x-dashboard-flex x="between">
        <x-dashboard-flex>
            @if ($attributes->get('icon'))
                @svg($attributes->get('icon'), dashboard_rtl('ml-1', 'mr-1'))
            @endif
            <div>{!! $slot !!}</div>
        </x-dashboard-flex>

        @if ($attributes->get('dismissible'))
            <button type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">
                    <x-tabler-x />
                </span>
            </button>
        @endif
    </x-dashboard-flex>
</div>
