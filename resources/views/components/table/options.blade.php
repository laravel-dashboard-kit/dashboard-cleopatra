<x-dashboard-table-body-col style="white-space: nowrap; width: 1%">
    <x-dashboard-dropdown outline color="dark">
        <x-slot name="title">
            <x-tabler-dots-vertical />
        </x-slot>

        {!! $slot !!}
    </x-dashboard-dropdown>
</x-dashboard-table-body-col>
