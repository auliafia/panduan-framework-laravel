@extends('buah.app')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Tambah Buah</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('buah.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Buah</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis Buah</label>
                    <input type="text" class="form-control" id="jenis" name="jenis">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
@endsection
