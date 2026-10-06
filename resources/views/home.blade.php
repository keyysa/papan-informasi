@extends('layouts.app')

@section('content')

<div class="container-fluid p-0">
    <div class="row g-0">

        <!-- ================= SIDEBAR ================= -->
        <div class="col-md-3 col-lg-2 p-0">

            <div class="bg-dark text-white min-vh-100 p-3">

                <!-- NAMA SEKOLAH -->
                <h5 class="fw-bold mb-4">
                    SDN Kedung Dalem 1
                </h5>

                <!-- MENU -->
                <div class="mb-3 text-secondary">
                    MENU
                </div>


                <!-- DASHBOARD -->
                <a href="{{ route('home') }}"
                   class="d-block text-white text-decoration-none p-2 rounded mb-2">
                    🏠 Dashboard
                </a>


                <!-- ================= WEBSITE ================= -->
                <div class="mb-3 mt-4 text-secondary">
                    WEBSITE
                </div>


                <!-- INFORMASI -->
                <a href="{{ route('informasi.index') }}"
                   class="d-block text-white text-decoration-none p-2 rounded mb-2">
                    📢 Informasi
                </a>


                <!-- SLIDER -->
                <a href="{{ route('slider.index') }}"
                   class="d-block text-white text-decoration-none p-2 rounded mb-2">
                    🖼️ Gambar Slider
                </a>


                <!-- CARD BERANDA -->
                <a href="{{ route('card.index') }}"
                   class="d-block text-white text-decoration-none p-2 rounded mb-2">
                    🗂️ Card Beranda
                </a>


                <!-- SAMBUTAN -->
                <a href="{{ route('sambutan.index') }}"
                   class="d-block text-white text-decoration-none p-2 rounded mb-2">
                    👤 Sambutan
                </a>


                <!-- MENU YANG AKAN DIBUAT -->
                <div class="mt-4 mb-2 text-secondary">
                    WEBSITE LAINNYA
                </div>


                <!-- PROGRAM -->
                <div class="text-white-50 p-2">
                    📚 Program
                </div>


                <!-- KEGIATAN -->
                <div class="text-white-50 p-2">
                    🎯 Kegiatan
                </div>


                <!-- ABOUT -->
                <div class="text-white-50 p-2">
                    ℹ️ About
                </div>


                <!-- VIDEO -->
                <div class="text-white-50 p-2">
                    🎬 Video
                </div>


                <!-- KATEGORI BERITA -->
                <div class="text-white-50 p-2">
                    📰 Kategori Berita
                </div>


                <!-- BERITA -->
                <div class="text-white-50 p-2">
                    📝 Berita
                </div>


                <!-- EVENT -->
                <div class="text-white-50 p-2">
                    📅 Event
                </div>


                <!-- FOOTER -->
                <div class="text-white-50 p-2">
                    📄 Footer
                </div>


                <hr class="border-secondary mt-4">


                <!-- LOGOUT -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit"
                            class="btn btn-link text-white text-decoration-none p-2">
                        🚪 Logout
                    </button>
                </form>

            </div>

        </div>
        <!-- ================= END SIDEBAR ================= -->


        <!-- ================= KONTEN DASHBOARD ================= -->
        <div class="col-md-9 col-lg-10">

            <div class="p-4">

                <!-- JUDUL -->
                <h2 class="fw-bold">
                    Dashboard Admin
                </h2>

                <p class="text-muted">
                    Selamat datang di dashboard admin SDN Kedung Dalem 1.
                </p>


                <!-- ================= CARD MENU ================= -->
                <div class="row mt-4 g-4">


                    <!-- INFORMASI -->
                    <div class="col-md-6 col-xl-3">

                        <div class="card shadow-sm h-100">

                            <div class="card-body">

                                <h5 class="fw-bold">
                                    Informasi
                                </h5>

                                <p class="text-muted">
                                    Kelola informasi sekolah.
                                </p>

                                <a href="{{ route('informasi.index') }}"
                                   class="btn btn-primary">
                                    Kelola
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- SLIDER -->
                    <div class="col-md-6 col-xl-3">

                        <div class="card shadow-sm h-100">

                            <div class="card-body">

                                <h5 class="fw-bold">
                                    Slider
                                </h5>

                                <p class="text-muted">
                                    Kelola gambar slider.
                                </p>

                                <a href="{{ route('slider.index') }}"
                                   class="btn btn-primary">
                                    Kelola
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- CARD BERANDA -->
                    <div class="col-md-6 col-xl-3">

                        <div class="card shadow-sm h-100">

                            <div class="card-body">

                                <h5 class="fw-bold">
                                    Card Beranda
                                </h5>

                                <p class="text-muted">
                                    Kelola card halaman utama.
                                </p>

                                <a href="{{ route('card.index') }}"
                                   class="btn btn-primary">
                                    Kelola
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- SAMBUTAN -->
                    <div class="col-md-6 col-xl-3">

                        <div class="card shadow-sm h-100">

                            <div class="card-body">

                                <h5 class="fw-bold">
                                    Sambutan
                                </h5>

                                <p class="text-muted">
                                    Kelola sambutan sekolah.
                                </p>

                                <a href="{{ route('sambutan.index') }}"
                                   class="btn btn-primary">
                                    Kelola
                                </a>

                            </div>

                        </div>

                    </div>


                </div>
                <!-- ================= END CARD MENU ================= -->


            </div>

        </div>
        <!-- ================= END KONTEN DASHBOARD ================= -->

    </div>
</div>

@endsection