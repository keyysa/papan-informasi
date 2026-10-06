<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SDN Kedung Dalem 1</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

<div id="app">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-danger shadow-sm">
        <div class="container">

            <!-- Logo / Nama Sekolah -->
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                SDN Kedung Dalem 1
            </a>

            <!-- Tombol Mobile -->
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Menu Kiri -->
                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.index') }}">
                            Papan Informasi
                        </a>
                    </li>

                </ul>


                <!-- Menu Kanan -->
                <ul class="navbar-nav ms-auto">

                    @guest

                        <!-- Login Admin -->
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    Login Admin
                                </a>
                            </li>
                        @endif

                    @else

                

                        <!-- Nama Admin -->
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown"
                               class="nav-link dropdown-toggle"
                               href="#"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">

                                {{ Auth::user()->name }}

                            </a>

                            <div class="dropdown-menu dropdown-menu-end"
                                 aria-labelledby="navbarDropdown">

                                <a class="dropdown-item"
                                   href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">

                                    Logout

                                </a>

                                <form id="logout-form"
                                      action="{{ route('logout') }}"
                                      method="POST"
                                      class="d-none">

                                    @csrf

                                </form>

                            </div>

                        </li>

                    @endguest

                </ul>

            </div>
        </div>
    </nav>


    <!-- Content -->
    <main class="py-0">
        @yield('content')
    </main>

</div>

</body>
</html>
