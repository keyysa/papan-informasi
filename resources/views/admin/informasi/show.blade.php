@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="mb-4">
        <h2>Detail Informasi</h2>
        <p class="text-muted">
            Detail informasi Papan Informasi SDN Kedung Dalem 1.
        </p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <h3>{{ $informasi->judul }}</h3>

            <p class="text-muted">
                Tanggal: {{ $informasi->tanggal }}
            </p>

            @if ($informasi->gambar)
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $informasi->gambar) }}"
                         class="img-fluid"
                         style="max-width: 500px;"
                         alt="Gambar informasi">
                </div>
            @endif

            <p>
                {{ $informasi->isi }}
            </p>

            <a href="{{ route('informasi.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

            <a href="{{ route('informasi.edit', $informasi->id) }}"
               class="btn btn-warning">
                Edit
            </a>

        </div>
    </div>

</div>
@endsection