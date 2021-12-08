@extends('dashboard-cleopatra::app')

@section('body')

    <body class="bg-gray-100">
        @include('dashboard-cleopatra::partials.loader')

        @include('dashboard-cleopatra::areas.horizontal.main-header')

        <div class="h-screen flex flex-row flex-wrap">
            @include('dashboard-cleopatra::areas.horizontal.content')

            @yield('modals')
        </div>

        @include('dashboard-cleopatra::partials.footer')
    </body>
@endsection
