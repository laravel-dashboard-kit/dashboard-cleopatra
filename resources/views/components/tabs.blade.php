@props(['tabs' => []])

@php
$tabs = array_combine(
    array_map(function ($tab) {
        return Str::slug($tab);
    }, $tabs),
    $tabs,
);
@endphp

<x-dashboard-card x-cloak x-data="{
    activeTab: '{{ array_key_first($tabs) }}'
}">
    <x-slot name="header">
        <x-dashboard-flex x="start"
            class="gap-2">
            @foreach ($tabs as $id => $tab)
                <x-dashboard-button
                    x-bind:class="{
                    'btn btn-gray': activeTab != '{{ $id }}',
                    'btn-shadow': activeTab == '{{ $id }}'
                }"
                    @click="activeTab = '{{ $id }}'">
                    {{ $tab }}
                </x-dashboard-button>
            @endforeach
        </x-dashboard-flex>
    </x-slot>

    {!! $slot !!}
</x-dashboard-card>
