@extends('template')

@section('content')

<div class="container mt-4">
    <h3 class="mb-4">Data Pegawai</h3>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="tambah" class="btn btn-primary">+ Tambah Pegawai Baru</a>

        <form action="/cari" method="GET" class="d-flex" role="search">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari pegawai..." value="{{ request('cari') }}">
            <button type="submit" class="btn btn-outline-secondary">Cari</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        
        {{ $pegawai->links() }}
    </div>
</div>

@endsection
