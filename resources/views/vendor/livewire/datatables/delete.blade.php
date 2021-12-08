<x-admin-button color="danger"
    size="xs"
    wire:click="$emit('triggerDatatableDelete',{{ $value }})">
    <x-feathericon-trash-2 />
</x-admin-button>

@push('script')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            @this.on('triggerDatatableDelete', modelId => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    customClass: {
                        confirmButton: 'btn btn-success mt-2',
                        cancelButton: 'btn btn-danger ms-2 mt-2'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.value) {
                        @this.call('delete', modelId)
                        Swal.fire({
                            title: 'Deleted!',
                            icon: 'success',
                            confirmButtonColor: '#4a4fea',
                        })
                    }
                });
            });
        })
    </script>
@endpush
