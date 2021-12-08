<script src="{{ asset('assets/dashboard/cleopatra/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script type="text/javascript"
src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/datatables.min.js">
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript"
src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript"
src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
<script src="{{ url('assets/dashboard/cleopatra/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ url('assets/dashboard/cleopatra/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ url('assets/dashboard/cleopatra/js/chart.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script src="{{ asset('assets/dashboard/cleopatra/js/stisla.js') }}"></script>
<script src="{{ asset('assets/dashboard/cleopatra/js/scripts.js') }}"></script>
@if (Request::is('admin/make_payment'))
    <script src="{{ asset('assets/dashboard/cleopatra/js/payment.js') }}"></script>
    <script type="text/javascript"
        src="https://js.stripe.com/v2/"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id={{ App\Models\PaymentSetting::first()->paypal_sendbox }}&currency={{ App\Models\GeneralSetting::first()->currency }}"
        data-namespace="paypal_sdk"></script>
@endif
@if (Request::is('admin/driver_make_payment'))
    <script src="{{ asset('assets/dashboard/cleopatra/js/driver_payment.js') }}"></script>
    <script type="text/javascript"
        src="https://js.stripe.com/v2/"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id={{ App\Models\PaymentSetting::first()->paypal_sendbox }}&currency={{ App\Models\GeneralSetting::first()->currency }}"
        data-namespace="paypal_sdk"></script>
@endif
@if (Request::is('admin/delivery_zone_area/*') || Request::is('vendor/deliveryZoneArea/*'))
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ App\Models\GeneralSetting::first()->map_key }}&callback=initMap&libraries=places&v=weekly"
        defer></script>
    <script src="{{ asset('assets/dashboard/cleopatra/js/delivery_person_map.js') }}"></script>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{ asset('assets/dashboard/cleopatra/js/cleave.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/cleopatra/js/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.2.0/js/bootstrap-colorpicker.min.js">
</script>
<script src="{{ asset('assets/dashboard/cleopatra/js/cleave-phone.us.js') }}"></script>
<script src="{{ asset('assets/dashboard/cleopatra/js/forms-advanced-forms.js') }}"></script>
<script src="{{ asset('assets/dashboard/cleopatra/js/custom.js') }}"></script>

<script type="text/javascript">
    window.onload = function() {
        $(".main-sidebar").niceScroll();
    }
</script>

@include('dashboard-abstract::include.footer')

@stack('script')
@stack('scripts')
@stack('footer')
