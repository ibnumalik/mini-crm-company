<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CRM</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        @include('app.sidebar')

        <b-navbar toggleable="lg">
            <b-container>
                <b-navbar-brand href="{{url('/')}}">
                    CRM
                </b-navbar-brand>

                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <b-collapse id="nav-collapse" is-nav>
                    <b-navbar-nav class="ml-auto">
                        @guest
                            <b-nav-item href="{{ route('login') }}">{{ __('Login') }}</b-nav-item>
                        @else

                        <b-nav-item-dropdown text="{{ Auth::user()->name }}">
                            <b-dropdown-item href="{{ route('home') }}">
                                Dashboard
                            </b-dropdown-item>
                            <b-dropdown-item href="{{ route('companies.index') }}">
                                Companies
                            </b-dropdown-item>
                            <b-dropdown-item href="{{ route('employees.index') }}">
                                Employees
                            </b-dropdown-item>
                            <b-dropdown-divider></b-dropdown-divider>
                            <b-dropdown-item v-on:click="logout">Logout</b-dropdown-item>
                            <form
                                ref="logoutForm"
                                class="d-none"
                                action="{{route('logout')}}"
                                method="post"
                            >
                                @csrf
                            </form>
                        </b-nav-item-dropdown>
                        @endguest
                    </b-navbar-nav>
                </b-collapse>

            </b-container>
        </b-navbar>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
