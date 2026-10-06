@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="mb-4">
        <h3 class="fw-bold mb-1">
            Edit Sambutan
        </h3>

        <p class="text-muted">
            Ubah judul, isi, atau foto sambutan.
        </p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('sambutan.update', $sambutan->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">
                        Judul Sambutan
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul', $sambutan->judul) }}">

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
                              rows="7">{{ old('isi', $sambutan->isi) }}</textarea>

                    @error('isi')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Foto Saat Ini
                    </label>

                    @if($sambutan->gambar)

                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $sambutan->gambar) }}"
                                 width="150"
                                 height="150"
                                 style="object-fit: cover;"
                                 class="rounded">
                        </div>

                    @else

                        <p class="text-muted">
                            Belum ada foto.
                        </p>

                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Ganti Foto
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti foto.
                        Maksimal 2 MB.
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
                        Simpan Perubahan
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