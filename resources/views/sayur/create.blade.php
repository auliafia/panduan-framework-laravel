@extends('sayur.app')

@section('content')
    <div class="container">
        <h2>Tambah Sayur</h2>
        <form action="{{ route('sayur.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Sayur</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_panen" class="form-label">Tanggal Panen</label>
                <input type="date" class="form-control" id="tanggal_panen" name="tanggal_panen" required>
            </div>
            <button type="submit" class="btn btn-success">Tambah Sayur</button>
        </form>
    </div>
@endsection
