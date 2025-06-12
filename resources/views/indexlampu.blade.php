@extends('template')

@section('content')

<div class="container mt-4">
    <h3 class="mb-4">Data Lampu</h3>

    {{-- FORM CARI --}}
    <form action="/lampu/cari" method="GET" class="row g-2 mb-3">
        <div class="col-md-4">
            <input type="text" name="cari" class="form-control" placeholder="Cari merk lampu..." value="{{ request('cari') }}">
        </div>
        <div class="col-md-auto">
            <button type="submit" class="btn btn-secondary">Cari</button>
        </div>
    </form>

    <a href="/tambah/lampu" class="btn btn-primary mb-3">+ Tambah Lampu Baru</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Berat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lampu as $p)
                <tr>
                    <td>{{ $p->merklampu }}</td>
                    <td>Rp{{ number_format($p->hargalampu, 0, ',', '.') }}</td>
                    <td>{{ $p->tersedia == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $p->berat }} gram</td>
                    <td>
                        <a href="/lampu/edit/{{ $p->ID }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/lampu/hapus/{{ $p->ID }}" class="btn btn-sm btn-danger"
                           onclick="return confirm('Yakin ingin menghapus lampu ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- Tambahkan pagination --}}
        {{ $lampu->links() }}
    </div>
</div>

@endsection
