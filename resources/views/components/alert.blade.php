<div class="alert alert-{{ $attributes->get('color', 'danger') }} {{ $attributes->get('dismissible') ? 'alert-dismissible' : '' }}"
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
