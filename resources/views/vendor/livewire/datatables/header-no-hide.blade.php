@unless($column['hidden'])
    <a href="#"
        wire:click.prefetch="sort('{{ $index }}')">
        <span class="text-dark">
            {{ str_replace('_', ' ', $column['label']) }}
        </span>
        <span>
            @if ($sort === $index)
                @if ($direction)
                    <x-feathericon-chevron-up wire:loading.remove class="text-success" />
                @else
                    <x-feathericon-chevron-down wire:loading.remove  class="text-danger" />
                @endif
            @endif
        </span>
    </a>
@endunless
