<thead>
    <tr>
        @foreach ($this->columns as $index => $column)
            <td>
                @if ($column['hidden'])
                    @if ($hideable === 'inline')
                        {{-- nothing --}}
                    @endif
                @elseif($column['type'] === 'checkbox')
                    <span>SELECT ALL</span>
                    <span>
                        <input type="checkbox"
                            wire:click="toggleSelectAll"
                            @if (count($selected) === $this->results->total()) checked @endif
                            class="form-checkbox" />
                    </span>
                @else
                    @isset($column['filterable'])
                        <div wire:key="{{ $index }}">
                            @if (is_iterable($column['filterable']))
                                @include('datatables::filters.select', ['index' => $index, 'name' =>
                                $column['label'], 'options' => $column['filterable']])
                            @else
                                @include('datatables::filters.' . ($column['filterView'] ??
                                $column['type']), ['index' => $index, 'name' => $column['label']])
                            @endif
                        </div>
                    @endisset
                @endif
            </td>
        @endforeach
    </tr>
</thead>
