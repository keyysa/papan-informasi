
@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="mb-4">
        <h3 class="fw-bold mb-1">Edit Program</h3>
        <p class="text-muted">Ubah informasi program sekolah.</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('program.update', $program) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Program</label>
                    <input
                        type="text"
                        name="judul"
                        id="judul"
                        class="form-control"
                        value="{{ old('judul', $program->judul) }}"
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
                        required
                    >{{ old('deskripsi', $program->deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar Saat Ini</label>

                    @if ($program->gambar)
                        <div class="mb-2">
                            <img
                                src="{{ asset('storage/' . $program->gambar) }}"
                                alt="{{ $program->judul }}"
                                width="180"
                                class="rounded"
                            >
                        </div>
                    @else
                        <p class="text-muted">Belum ada gambar.</p>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="gambar" class="form-label">
                        Ganti Gambar (Opsional)
                    </label>
                    <input
                        type="file"
                        name="gambar"
                        id="gambar"
                        class="form-control"
                        accept=".jpg,.jpeg,.png"
                    >
                    <small class="text-muted">
                        Format JPG, JPEG, atau PNG. Maksimal 2 MB.
                        Kosongkan jika tidak ingin mengganti gambar.
                    </small>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>

                <a href="{{ route('program.index') }}"
                   class="btn btn-secondary">
                    Batal
                </a>
            </form>

        </div>
    </div>
</div>
@endsection