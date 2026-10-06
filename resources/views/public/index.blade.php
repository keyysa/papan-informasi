@extends('layouts.public')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1>Papan Informasi</h1>
        <p class="text-muted">
            Informasi terbaru SDN Kedung Dalem 1
        </p>
    </div>

    <div class="row">

        @forelse ($informasis as $informasi)

            <div class="col-md-4 mb-4">

                <div class="card h-100 shadow-sm">

                    @if ($informasi->gambar)
                        <img src="{{ asset('storage/' . $informasi->gambar) }}"
                             class="card-img-top"
                             style="height: 200px; object-fit: cover;"
                             alt="Gambar informasi">
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
                    Belum ada informasi sekolah.
                </p>
            </div>

        @endforelse

    </div>

</div>
@endsection