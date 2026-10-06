@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="mb-4">
        <h2>Tambah Informasi</h2>
        <p class="text-muted">
            Tambahkan informasi baru untuk Papan Informasi SDN Kedung Dalem 1.
        </p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Informasi</label>
                    <input type="text"
                           class="form-control"
                           id="judul"
                           name="judul"
                           placeholder="Masukkan judul informasi"
                           required>
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Informasi</label>
                    <textarea class="form-control"
                              id="isi"
                              name="isi"
                              rows="5"
                              placeholder="Masukkan isi informasi"
                              required></textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date"
                           class="form-control"
                           id="tanggal"
                           name="tanggal"
                           required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file"
                           class="form-control"
                           id="gambar"
                           name="gambar"
                           accept="image/*">
                </div>

                <a href="{{ route('informasi.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan Informasi
                </button>

            </form>

        </div>
    </div>

</div>
@endsection
