
@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="mb-4">
        <h3 class="fw-bold mb-1">Tambah Program</h3>
        <p class="text-muted">Tambahkan program sekolah yang baru.</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Data belum berhasil disimpan.</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('program.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Program</label>
                    <input
                        type="text"
                        name="judul"
                        id="judul"
                        class="form-control"
                        value="{{ old('judul') }}"
                        placeholder="Contoh: Program Literasi Sekolah"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Program</label>
                    <textarea
                        name="deskripsi"
                        id="deskripsi"
                        class="form-control"
                        rows="5"
                        placeholder="Jelaskan program sekolah..."
                        required
                    >{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="gambar" class="form-label">Gambar Program</label>
                    <input
                        type="file"
                        name="gambar"
                        id="gambar"
                        class="form-control"
                        accept=".jpg,.jpeg,.png"
                    >
                    <small class="text-muted">
                        Format JPG, JPEG, atau PNG. Maksimal 2 MB.
                        Gambar boleh dikosongkan.
                    </small>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        Simpan Program
                    </button>

                    <a href="{{ route('program.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection