<div class="bootstrap-table bootstrap5">
    <table class="table table-bordered table-hover table-borderless">
        @unless($this->hideHeader)
            @include('datatables::partials.table-header')
            @include('datatables::partials.table-header-extra')
        @endunless

        <tbody>
            @forelse($this->results as $result)
                <tr
                    class="{{ isset($result->checkbox_attribute) && in_array($result->checkbox_attribute, $selected) ? 'bg-orange-100' : ($loop->even ? 'bg-gray-100' : 'bg-gray-50') }}">
                @foreach ($this->columns as $column)
                    <td>
                        @if ($column['hidden'])
                            @if ($hideable === 'inline')
                                {{-- nothing --}}
                            @endif
                        @elseif($column['type'] === 'checkbox')
                            @include('datatables::checkbox', ['value' => $result->checkbox_attribute])
                        @else
                            <span class="@if ($column['align']==='right'
                        ) text-right @elseif($column['align'] === 'center') text-center @else text-left @endif">
                                {!! $result->{$column['name']} !!}
                            </span>
                        @endif
                    </td>
                @endforeach
            @empty
                <tr>
                    <td colspan="{{count($this->columns)}}">
                        <x-admin-alert icon='feathericon-x'>
                            Can't find records with your entry
                        </x-admin-alert>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@include('datatables::partials.table-pagination')
</div>
