
@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">Program Sekolah</h3>
            <p class="text-muted mb-0">Kelola program SDN Kedung Dalem 1.</p>
        </div>

        <a href="{{ route('program.create') }}" class="btn btn-primary">
            + Tambah Program
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Judul Program</th>
                            <th>Deskripsi</th>
                            <th width="220">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($programs as $program)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if ($program->gambar)
                                        <img
                                            src="{{ asset('storage/' . $program->gambar) }}"
                                            alt="{{ $program->judul }}"
                                            width="90"
                                            height="65"
                                            style="object-fit: cover;"
                                        >
                                    @else
                                        <span class="text-muted">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td>{{ $program->judul }}</td>
                                <td>
                                    {{ \Illuminate\Support\Str::limit($program->deskripsi, 80) }}
                                </td>
                                <td>
                                    <a href="{{ route('program.show', $program) }}"
                                       class="btn btn-info btn-sm text-white">
                                        Detail
                                    </a>

                                    <a href="{{ route('program.edit', $program) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('program.destroy', $program) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus program ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">
                                    Belum ada data program sekolah.
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