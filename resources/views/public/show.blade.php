@extends('layouts.public')

@section('content')
<div class="container py-5">

    <div class="card shadow-sm">

        @if ($informasi->gambar)
            <img src="{{ asset('storage/' . $informasi->gambar) }}"
                 class="card-img-top"
                 style="max-height: 400px; object-fit: cover;"
                 alt="Gambar informasi">
        @endif

        <div class="card-body">

            <h2 class="card-title">
                {{ $informasi->judul }}
            </h2>

            <p class="text-muted">
                {{ $informasi->tanggal }}
            </p>

            <hr>

            <p class="card-text">
                {{ $informasi->isi }}
            </p>

            <a href="{{ route('public.index') }}"
               class="btn btn-secondary">
                ← Kembali
            </a>

        </div>

    </div>

</div>
@endsection