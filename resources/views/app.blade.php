<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    @include('dashboard-abstract::include.head')

    <link rel="shortcut icon"
        href="{{ asset(config('dashboard-ui.logo.favicon')) }}"
        type="image/x-icon">
    <link rel="stylesheet"
        href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet"
        type="text/css"
        href="{{ asset('dashboard/cleopatra/css/style.css') }}">

    <style>
        select {
            background-position: {{ dashboard_rtl('left', 'right') }} 0.5rem center;
        }

    </style>

    @stack('style')
    @stack('head')
    @stack('head-js')
</head>

@stack('body')

</html>
