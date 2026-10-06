<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SDN Kedung Dalem 1</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

    <!-- NAVBAR PUBLIC -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm">

        <div class="container">

            <!-- LOGO + NAMA SEKOLAH -->
            <a class="navbar-brand d-flex align-items-center"
               href="{{ route('public.home') }}">

                <div class="bg-white rounded-circle me-2 d-flex align-items-center justify-content-center"
                     style="width: 45px; height: 45px;">

                    <span class="text-primary fw-bold">
                        SD
                    </span>

                </div>

                <div>
                    <div class="fw-bold">
                        SDN Kedung Dalem 1
                    </div>

                    <small>
                        Website Sekolah
                    </small>
                </div>

            </a>


            <!-- TOMBOL MOBILE -->
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarPublic">

                <span class="navbar-toggler-icon"></span>

            </button>


            <!-- MENU -->
            <div class="collapse navbar-collapse"
                 id="navbarPublic">

               <ul class="navbar-nav ms-auto">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('public.home') }}">
            Beranda
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            Tentang Kami
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            Program
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('public.index') }}">
            Berita
        </a>
    </li>

    <li class="nav-item ms-lg-2">
        <a class="nav-link" href="{{ route('login') }}">
            Login Admin
        </a>
    </li>

</ul>
                </ul>

            </div>

        </div>

    </nav>


    <!-- ISI HALAMAN -->
    <main>

        @yield('content')

    </main>


</body>

</html>
