<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('assets/dashboard/cleopatra/js/scripts.js') }}"></script>

@include('dashboard-abstract::include.footer')

@stack('script')
@stack('scripts')
<script>
    CKEDITOR.replace( 'editor1' );
</script>
@stack('footer')
