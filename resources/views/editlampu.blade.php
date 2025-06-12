@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Edit Data Lampu</h4>
        </div>
        <div class="card-body">
            <a href="/lampu" class="btn btn-secondary mb-3">← Kembali</a>

            @foreach ($lampu as $p)
            <form action="/lampu/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->ID }}">

                <div class="mb-3">
                    <label for="merk" class="form-label">Merk Lampu</label>
                    <input type="text" id="merk" name="merk" class="form-control" required value="{{ $p->merklampu }}">
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" id="harga" name="harga" class="form-control" required value="{{ $p->hargalampu }}">
                </div>

                <div class="mb-3">
                    <label for="tersedia" class="form-label">Ketersediaan</label>
                    <select id="tersedia" name="tersedia" class="form-select" required>
                        <option value="1" {{ $p->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ $p->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="berat" class="form-label">Berat (gram)</label>
                    <input type="number" id="berat" name="berat" class="form-control" step="0.01" required value="{{ $p->berat }}">
                </div>

                <button type="submit" class="btn btn-success">💾 Simpan Data</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
