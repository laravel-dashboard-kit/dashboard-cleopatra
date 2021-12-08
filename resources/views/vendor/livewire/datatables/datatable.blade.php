<div>
    @if ($beforeTableSlot)
        <div class="mt-8">
            @include($beforeTableSlot)
        </div>
    @endif
    <x-admin-card>
        @if ($this->searchableColumns()->count())
            <div class="col-4">
                <x-admin-form-input wire:model.debounce.500ms="search"
                    mask="{{ __('Search in') . ' ' . $this->searchableColumns()->map->label->join(', ') }}"
                    name="search"
                    icon-before="feathericon-search">
                    Search
                    <x-slot name="after">
                        <a href="#"
                            wire:click="$set('search', null)">
                            @svg('feathericon-x')
                        </a>
                    </x-slot>
                </x-admin-form-input>
            </div>
        @endif

        <h1 wire:loading>Loading ...</h1>

        @if ($exportable)
            <div x-data="{ init() {
            window.livewire.on('startDownload', link => window.open(link,'_blank'))
        } }"
                x-init="init">
                <button wire:click="export"
                    class="flex items-center space-x-2 px-3 border border-green-400 rounded-md bg-white text-green-500 text-xs leading-4 font-medium uppercase tracking-wider hover:bg-green-200 focus:outline-none"><span>{{ __('Export') }}</span>
                    <x-icons.excel class="m-2" />
                </button>
            </div>
        @endif

        @if ($hideable === 'select')
            @include('datatables::hide-column-multiselect')
        @endif

        @if ($hideable === 'buttons')
            <div class="p-2 grid grid-cols-8 gap-2">
                @foreach ($this->columns as $index => $column)
                    <button wire:click.prefetch="toggle('{{ $index }}')"
                        class="px-3 py-2 rounded text-white text-xs focus:outline-none
            {{ $column['hidden'] ? 'bg-blue-100 hover:bg-blue-300 text-blue-600' : 'bg-blue-500 hover:bg-blue-800' }}">
                        {{ $column['label'] }}
                    </button>
                @endforeach
            </div>
        @endif

        @include('datatables::partials.table')
    </x-admin-card>

    @if ($afterTableSlot)
        <div class="mt-8">
            @include($afterTableSlot)
        </div>
    @endif
</div>
