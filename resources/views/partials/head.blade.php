<head>
    @include('dashboard-abstract::include.head')

    {{-- <link rel="icon" href="{{ url('images/upload/'.$favicon) }}" type="image/png"> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>

    <script src="https://cdn.rawgit.com/leafo/sticky-kit/v1.1.2/jquery.sticky-kit.min.js"></script>

    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

    <link rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet"
        type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/datatables.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css"
        rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet"
        type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.css">

    <link href="https://jvectormap.com/css/jquery-jvectormap-2.0.3.css"
        rel="stylesheet">

    {{-- @php
        $color = App\Models\GeneralSetting::find(1)->site_color;
    @endphp --}}
    <style>
        :root {
            /* --site_color: <?php //echo $color;
?>;
            --hover_color: <?php //echo $color . 'c7';
?>; */
            --site_color: #e1e166;
            --hover_color: #e1e166c7;
        }

    </style>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.2.0/css/bootstrap-colorpicker.css">

    <link rel="stylesheet"
        href="{{ asset('assets/dashboard/cleopatra/css/components.css') }}">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="{{ asset('assets/dashboard/cleopatra/css/owl.carousel.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('assets/dashboard/cleopatra/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('assets/dashboard/cleopatra/css/iziToast.min.css') }}">

    <link rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/dashboard/cleopatra/css/slick.css') }}" />

    <link rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/dashboard/cleopatra/css/slick-theme.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('assets/dashboard/cleopatra/css/style.css') }}">

    <link rel="stylesheet"
        href="{{ asset('assets/dashboard/cleopatra/css/custom.css') }}">

    @if (session('direction') == 'rtl')
        <link rel="stylesheet"
            href="{{ asset('assets/dashboard/cleopatra/css/rtl_direction.css') }}"
            type="text/css">
    @endif
    <script src="{{ asset('assets/dashboard/cleopatra/js/iziToast.min.js') }}"></script>
    {{-- <link href="{{ asset('assets/dashboard/cleopatra/assets/dashboard/cleopatra/css-rtl/animate.css') }}" --}}

    @stack('head')
    @stack('head-js')
</head>
