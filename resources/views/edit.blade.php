@extends('template')

@section('content')

<div class="container mt-4">
    <h3 class="mb-4">Edit Data Pegawai</h3>

    <a href="/pegawai" class="btn btn-secondary mb-3">← Kembali</a>

    @foreach ($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $p->pegawai_nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" class="form-control" name="umur" value="{{ $p->pegawai_umur }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3" required>{{ $p->pegawai_alamat }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>
    @endforeach
</div>

@endsection
