@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="mb-4">
        <h3 class="fw-bold mb-1">
            Tambah Card
        </h3>

        <p class="text-muted">
            Tambahkan card untuk ditampilkan di halaman utama.
        </p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('card.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Judul Card
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           placeholder="Contoh: Informasi Sekolah"
                           value="{{ old('judul') }}">

                    @error('judul')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Isi Card
                    </label>

                    <textarea name="isi"
                              class="form-control"
                              rows="5"
                              placeholder="Masukkan isi card...">{{ old('isi') }}</textarea>

                    @error('isi')
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

                    <a href="{{ route('card.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection