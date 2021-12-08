<div x-data>
    <x-admin-form-input inset
        placeholder="Search {{ $column['label'] }}"
        x-ref="input"
        wire:change="doTextFilter('{{ $index }}', $event.target.value)"
        x-on:change="$refs.input.value = ''" />
    <div class="mt-1">
        @foreach ($this->activeTextFilters[$index] ?? [] as $key => $value)
            <x-admin-button-rounded wire:click="removeTextFilter('{{ $index }}', '{{ $key }}')"
                size="sm"
                color="danger"
                icon-after="feathericon-x">
                {{ $this->getDisplayValue($index, $value) }}
            </x-admin-button-rounded>
        @endforeach
    </div>
</div>
