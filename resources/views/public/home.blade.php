@extends('layouts.public')

@section('content')

<!-- SLIDER -->
@if($sliders->count() > 0)

<div id="sliderSekolah"
     class="carousel slide"
     data-bs-ride="carousel">

    <div class="carousel-inner">

        @foreach($sliders as $key => $slider)

            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">

                <img src="{{ asset('storage/' . $slider->gambar) }}"
                     class="d-block w-100"
                     style="height: 500px; object-fit: cover;"
                     alt="{{ $slider->judul }}">

                <div class="carousel-caption d-none d-md-block">

                    <h2 class="fw-bold">
                        {{ $slider->judul }}
                    </h2>

                    @if($slider->deskripsi)
                        <p>
                            {{ $slider->deskripsi }}
                        </p>
                    @endif

                </div>

            </div>

        @endforeach

    </div>

    <!-- Tombol sebelumnya -->
    <button class="carousel-control-prev"
            type="button"
            data-bs-target="#sliderSekolah"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

        <span class="visually-hidden">
            Sebelumnya
        </span>

    </button>

    <!-- Tombol berikutnya -->
    <button class="carousel-control-next"
            type="button"
            data-bs-target="#sliderSekolah"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

        <span class="visually-hidden">
            Berikutnya
        </span>

    </button>

</div>

@endif


<!-- 3 CARD UTAMA -->

<div class="container py-5">

    <div class="row g-4">

        @forelse($cards as $card)

            <div class="col-md-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body text-center p-4">

                        <h4 class="fw-bold mb-3">
                            {{ $card->judul }}
                        </h4>

                        <p class="text-muted mb-0">
                            {{ $card->isi }}
                        </p>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12 text-center">
                <p class="text-muted">
                    Belum ada card.
                </p>
            </div>

        @endforelse

    </div>

</div>
<!-- SAMBUTAN KEPALA SEKOLAH -->

@if($sambutan)

<div class="container py-5">

    <div class="text-center mb-4">

        <h2 class="fw-bold">
            {{ $sambutan->judul }}
        </h2>

        <p class="text-muted">
            Sambutan dari Kepala Sekolah
        </p>

    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-body p-4 p-md-5">

            <div class="row align-items-center">

               <div class="col-md-5 text-center mb-4 mb-md-0">

    @if($sambutan->gambar)
        <img src="{{ asset('storage/' . $sambutan->gambar) }}"
             class="img-fluid rounded"
             style="width: 100%; height: 600px; object-fit: cover;"
             alt="{{ $sambutan->judul }}">
    @endif

</div>
                <div class="col-md-7">

                    <p class="text-muted"
                       style="line-height: 1.8;">
                        {{ $sambutan->isi }}
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endif
<!-- INFORMASI TERBARU -->
<div class="container py-5">

    <div class="text-center mb-4">

        <h2>Informasi Terbaru</h2>

        <p class="text-muted">
            Informasi dan pengumuman terbaru
            dari SDN Kedung Dalem 1
        </p>

    </div>


    <div class="row">

        @forelse($informasis as $informasi)

            <div class="col-md-4 mb-4">

                <div class="card h-100 shadow-sm">

                    @if($informasi->gambar)

                        <img src="{{ asset('storage/' . $informasi->gambar) }}"
                             class="card-img-top"
                             style="height: 200px; object-fit: cover;">

                    @endif

                    <div class="card-body">

                        <h5 class="card-title">
                            {{ $informasi->judul }}
                        </h5>

                        <p class="text-muted small">
                            {{ $informasi->tanggal }}
                        </p>

                        <p class="card-text">
                            {{ Str::limit($informasi->isi, 100) }}
                        </p>

                        <a href="{{ route('public.show', $informasi->id) }}"
                           class="btn btn-primary">
                            Lihat Selengkapnya
                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12 text-center">

                <p class="text-muted">
                    Belum ada informasi terbaru.
                </p>

            </div>

        @endforelse

    </div>

</div>


<!-- INFORMASI TAMBAHAN -->
<div class="container pb-5">

    <div class="row">

        <div class="col-md-4 mb-3">

            <div class="card h-100 shadow-sm">

                <div class="card-body text-center">

                    <h5>Informasi Sekolah</h5>

                    <p class="text-muted">
                        Melihat berbagai informasi dan pengumuman
                        terbaru dari sekolah.
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-4 mb-3">

            <div class="card h-100 shadow-sm">

                <div class="card-body text-center">

                    <h5>Mudah Diakses</h5>

                    <p class="text-muted">
                        Informasi dapat dilihat oleh masyarakat
                        melalui website tanpa harus datang langsung.
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-4 mb-3">

            <div class="card h-100 shadow-sm">

                <div class="card-body text-center">

                    <h5>Informasi Terbaru</h5>

                    <p class="text-muted">
                        Pengumuman sekolah dapat diperbarui
                        oleh admin melalui dashboard.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection