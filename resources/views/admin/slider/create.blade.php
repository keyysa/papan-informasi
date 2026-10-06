@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="mb-4">
        <h3 class="fw-bold">
            Tambah Slider
        </h3>

        <p class="text-muted">
            Tambahkan gambar untuk slider halaman utama.
        </p>
    </div>


    <div class="card shadow-sm">

        <div class="card-body">

            <form action="{{ route('slider.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- JUDUL -->
                <div class="mb-3">

                    <label class="form-label">
                        Judul Slider
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           placeholder="Contoh: Selamat Datang di SDN Kedung Dalem 1"
                           value="{{ old('judul') }}">

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
                              rows="4"
                              placeholder="Masukkan deskripsi slider">{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- GAMBAR -->
                <div class="mb-3">

                    <label class="form-label">
                        Gambar Slider
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">

                    <div class="form-text">
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
                        Simpan Slider
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection