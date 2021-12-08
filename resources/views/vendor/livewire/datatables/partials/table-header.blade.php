<thead class="table-light">
    <tr>
        @foreach ($this->columns as $index => $column)
            <th>
                @if ($hideable === 'inline')
                    @include('datatables::header-inline-hide', ['column' => $column, 'sort' => $sort])
                @elseif($column['type'] === 'checkbox')
                    <div class="px-3 py-1 rounded @if (count($selected)) bg-orange-400 @else bg-gray-200 @endif
                        text-white
                        text-center">
                        {{ count($selected) }}
                    </div>
                @else
                    @include('datatables::header-no-hide', ['column' => $column, 'sort' => $sort])
                @endif
            </th>
        @endforeach
    </tr>
</thead>
