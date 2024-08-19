@extends('sayur.app')

@section('content')
    <div class="container">
        <h2>Daftar Sayur</h2>
        <form method="GET" action="{{ route('sayur.index') }}" class="mb-4">
            <div class="row">
                <div class="col-md-9">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Sayur"
                        value="{{ request('nama') }}">
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>

            @if ($sayur->isEmpty())
                <div class="alert alert-warning">Tidak ada data yang ditemukan.</div>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Tanggal Panen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sayur as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->tanggal_panen }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
    </div>
@endsection
