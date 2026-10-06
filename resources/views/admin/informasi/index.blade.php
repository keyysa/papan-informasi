@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Daftar Informasi</h2>
            <p class="text-muted mb-0">
                Kelola informasi Papan Informasi SDN Kedung Dalem 1.
            </p>
        </div>

        <a href="{{ route('informasi.create') }}" class="btn btn-primary">
    + Tambah Informasi
</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            @if ($informasis->count() > 0)

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">

                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($informasis as $informasi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $informasi->judul }}</td>

                                    <td>{{ $informasi->tanggal }}</td>

                                    <td>
                                        @if ($informasi->gambar)
                                            <img src="{{ asset('storage/' . $informasi->gambar) }}"
                                                 width="80"
                                                 alt="Gambar informasi">
                                        @else
                                            Tidak ada gambar
                                        @endif
                                    </td>

                                   <td>
    <a href="{{ route('informasi.show', $informasi->id) }}"
       class="btn btn-sm btn-info">
        Lihat
    </a>

    <a href="{{ route('informasi.edit', $informasi->id) }}"
       class="btn btn-sm btn-warning">
        Edit
    </a>

    <form action="{{ route('informasi.destroy', $informasi->id) }}"
          method="POST"
          class="d-inline">
        @csrf
        @method('DELETE')

        <button type="submit"
                class="btn btn-sm btn-danger"
                onclick="return confirm('Yakin ingin menghapus informasi ini?')">
            Hapus
        </button>
           </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
</div>

@else
    <div class="text-center py-5">
        <h5>Belum ada informasi</h5>
        <p class="text-muted">
            Data informasi sekolah belum ditambahkan.
        </p>
    </div>
@endif

</div>
</div>

</div>
@endsection