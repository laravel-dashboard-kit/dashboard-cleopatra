@extends('dashboard-cleopatra::app')

@section('body')

    <body>
        @include('dashboard-cleopatra::partials.loader')

        <div class="for-loader">
            <div id="app">
                @include('dashboard-cleopatra::areas.full.main-header')

                @include('dashboard-cleopatra::areas.full.main-sidebar')

                @include('dashboard-cleopatra::areas.full.content')

                @yield('modals')
            </div>
        </div>

        @include('dashboard-cleopatra::partials.footer')
    </body>
@endsection
