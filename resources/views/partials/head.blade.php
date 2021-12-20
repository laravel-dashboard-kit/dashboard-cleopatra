<head>
    @include('dashboard-abstract::include.head')

    <link rel="shortcut icon"
        href="{{ asset(config('dashboard-ui.logo.favicon')) }}"
        type="image/x-icon">
    <link rel="stylesheet"
        href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/dashboard/cleopatra/css/style.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>

    @stack('head')
    @stack('head-js')
</head>
