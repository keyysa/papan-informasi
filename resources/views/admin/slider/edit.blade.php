@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="mb-4">
        <h3 class="fw-bold">
            Edit Slider
        </h3>

        <p class="text-muted">
            Ubah informasi atau gambar slider.
        </p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('slider.update', $slider->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- JUDUL -->
                <div class="mb-3">
                    <label class="form-label">
                        Judul Slider
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul', $slider->judul) }}">

                    @error('judul')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- DESKRIPSI -->
                <div class="mb-3">
                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                              class="form-control"
                              rows="4">{{ old('deskripsi', $slider->deskripsi) }}</textarea>

                    @error('deskripsi')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- GAMBAR LAMA -->
                <div class="mb-3">
                    <label class="form-label">
                        Gambar Saat Ini
                    </label>

                    <br>

                    <img src="{{ asset('storage/' . $slider->gambar) }}"
                         width="300"
                         class="rounded shadow-sm">
                </div>

                <!-- GAMBAR BARU -->
                <div class="mb-3">
                    <label class="form-label">
                        Ganti Gambar
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">

                    <div class="form-text">
                        Kosongkan jika tidak ingin mengganti gambar.
                        Format JPG, JPEG, atau PNG. Maksimal 2 MB.
                    </div>

                    @error('gambar')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- TOMBOL -->
                <div class="mt-4">

                    <a href="{{ route('slider.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection