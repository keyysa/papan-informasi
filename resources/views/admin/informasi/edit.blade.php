@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="mb-4">
        <h2>Edit Informasi</h2>
        <p class="text-muted">
            Ubah informasi Papan Informasi SDN Kedung Dalem 1.
        </p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('informasi.update', $informasi->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Informasi</label>
                    <input type="text"
                           class="form-control"
                           id="judul"
                           name="judul"
                           value="{{ $informasi->judul }}"
                           required>
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Informasi</label>
                    <textarea class="form-control"
                              id="isi"
                              name="isi"
                              rows="5"
                              required>{{ $informasi->isi }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date"
                           class="form-control"
                           id="tanggal"
                           name="tanggal"
                           value="{{ $informasi->tanggal }}"
                           required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">
                        Ganti Gambar
                    </label>

                    <input type="file"
                           class="form-control"
                           id="gambar"
                           name="gambar"
                           accept="image/*">

                    @if ($informasi->gambar)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $informasi->gambar) }}"
                                 width="120"
                                 alt="Gambar informasi">
                        </div>
                    @endif
                </div>

                <a href="{{ route('informasi.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>

            </form>

        </div>
    </div>

</div>
@endsection