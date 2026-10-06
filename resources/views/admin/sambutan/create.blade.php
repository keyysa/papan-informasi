@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="mb-4">
        <h3 class="fw-bold mb-1">
            Tambah Sambutan
        </h3>

        <p class="text-muted">
            Tambahkan sambutan yang akan ditampilkan di halaman utama.
        </p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('sambutan.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Judul Sambutan
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           placeholder="Contoh: Sambutan Kepala Sekolah"
                           value="{{ old('judul') }}">

                    @error('judul')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Isi Sambutan
                    </label>

                    <textarea name="isi"
                              class="form-control"
                              rows="7"
                              placeholder="Masukkan isi sambutan...">{{ old('isi') }}</textarea>

                    @error('isi')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Foto
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Format JPG, JPEG, atau PNG. Maksimal 2 MB.
                    </small>

                    @error('gambar')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex gap-2">

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('sambutan.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection