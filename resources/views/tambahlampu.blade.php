@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Data Lampu</h4>
        </div>
        <div class="card-body">
            <a href="/lampu" class="btn btn-secondary mb-3">← Kembali</a>

            <form action="/lampu/store" method="post">
                {{ csrf_field() }}

                <div class="mb-3">
                    <label for="merk" class="form-label">Merk Lampu</label>
                    <input type="text" id="merk" name="merk" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" id="harga" name="harga" class="form-control" required>
                </div>

                <div class="mb-3">
                <label for="tersedia" class="form-label">Ketersediaan</label>
                <select id="tersedia" name="tersedia" class="form-select" required>
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>

                <div class="mb-3">
                <label for="berat" class="form-label">Berat (gram)</label>
                <input type="number" id="berat" name="berat" class="form-control" step="0.01" required>
            </div>

                <button type="submit" class="btn btn-success">💾 Simpan Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
