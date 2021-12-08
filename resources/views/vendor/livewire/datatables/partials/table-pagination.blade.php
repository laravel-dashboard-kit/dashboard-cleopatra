@if (!$this->hidePagination && count($this->results) > 0)
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <span class="pagination-info">
                {{ __('Results') }} {{ $this->results->firstItem() }} -
                {{ $this->results->lastItem() }} {{ __('of') }}
                {{ $this->results->total() }}
            </span>

            <select name="perPage"
                wire:model="perPage">
                @foreach (config('livewire-datatables.per_page_options', [10, 25, 50, 100]) as $per_page_option)
                    <option value="{{ $per_page_option }}">{{ $per_page_option }}</option>
                @endforeach
                <option value="99999999">{{ __('All') }}</option>
            </select>
        </div>

        <ul class="pagination">
            {{-- <div class="lg:hidden">
                <span class="space-x-2">{{ $this->results->links('datatables::tailwind-simple-pagination') }}</span>
            </div> --}}

            {{-- <div class="hidden lg:flex justify-center"> --}}
            {{ $this->results->links('datatables::tailwind-pagination') }}
            {{-- </div> --}}
        </ul>
    </div>
@endif
