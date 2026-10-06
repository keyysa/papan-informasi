@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                Gambar Slider
            </h3>

            <p class="text-muted mb-0">
                Kelola gambar slider halaman utama.
            </p>
        </div>

        <a href="{{ route('slider.create') }}"
           class="btn btn-primary">
            + Tambah Slider
        </a>

    </div>


    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <div class="card shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($sliders as $slider)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>

                                    <img src="{{ asset('storage/' . $slider->gambar) }}"
                                         width="150"
                                         height="80"
                                         style="object-fit: cover;"
                                         class="rounded">

                                </td>

                                <td>
                                    {{ $slider->judul }}
                                </td>

                                <td>
                                    {{ Str::limit($slider->deskripsi, 50) }}
                                </td>

                                <td>

                                    <a href="{{ route('slider.edit', $slider->id) }}"
                                       class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    <form action="{{ route('slider.destroy', $slider->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus slider ini?')">
                                            Hapus
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5"
                                    class="text-center text-muted py-4">

                                    Belum ada gambar slider.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection