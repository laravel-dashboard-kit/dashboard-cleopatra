<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('assets/dashboard/cleopatra/js/scripts.js') }}"></script>

@include('dashboard-abstract::include.footer')

@stack('script')
@stack('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@stack('footer')
