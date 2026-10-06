
@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="mb-4">
        <h3 class="fw-bold">Detail Program Sekolah</h3>
        <p class="text-muted">
            Informasi lengkap program SDN Kedung Dalem 1.
        </p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            @if ($program->gambar)
                <div class="mb-4">
                    <img
                        src="{{ asset('storage/' . $program->gambar) }}"
                        alt="{{ $program->judul }}"
                        class="img-fluid rounded"
                        style="max-height: 350px;"
                    >
                </div>
            @endif

            <h4 class="fw-bold">{{ $program->judul }}</h4>

            <p style="white-space: pre-line;">{{ $program->deskripsi }}</p>

            <p class="text-muted small">
                Dibuat: {{ $program->created_at->format('d-m-Y H:i') }}
            </p>

            <div class="d-flex gap-2">
                <a href="{{ route('program.edit', $program) }}"
                   class="btn btn-warning">
                    Edit Program
                </a>

                <a href="{{ route('program.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </div>
    </div>
</div>
@endsection