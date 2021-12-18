<head>
    @include('dashboard-abstract::include.head')

    <link rel="shortcut icon"
        href="{{ asset('assets/dashboard/cleopatra/img/fav.png') }}"
        type="image/x-icon">
    <link rel="stylesheet"
        href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/dashboard/cleopatra/css/style.css') }}">
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

    @stack('head')
    @stack('head-js')
</head>
