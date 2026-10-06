@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                Sambutan
            </h3>

            <p class="text-muted mb-0">
                Kelola sambutan yang ditampilkan di halaman utama.
            </p>
        </div>

        <a href="{{ route('sambutan.create') }}"
           class="btn btn-primary">
            + Tambah Sambutan
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
                            <th>Isi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($sambutans as $sambutan)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    @if($sambutan->gambar)

                                        <img src="{{ asset('storage/' . $sambutan->gambar) }}"
                                             width="80"
                                             height="80"
                                             style="object-fit: cover;"
                                             class="rounded">

                                    @else

                                        <span class="text-muted">
                                            Tidak ada gambar
                                        </span>

                                    @endif
                                </td>

                                <td>
                                    <strong>
                                        {{ $sambutan->judul }}
                                    </strong>
                                </td>

                                <td>
                                    {{ Str::limit($sambutan->isi, 80) }}
                                </td>

                                <td>

                                    <a href="{{ route('sambutan.edit', $sambutan->id) }}"
                                       class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    <form action="{{ route('sambutan.destroy', $sambutan->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus sambutan ini?')">
                                            Hapus
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5"
                                    class="text-center text-muted py-4">

                                    Belum ada sambutan.

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