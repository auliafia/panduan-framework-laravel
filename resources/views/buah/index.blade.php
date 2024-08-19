@extends('buah.app')

@section('content')
    <div class="card">
        <div class="card-header bg-success text-white">
            <h4>Daftar Buah</h4>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('buah.create') }}" class="btn btn-primary mb-3">Tambah Buah</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Buah</th>
                        <th>Jenis</th>
                        <th>Dibuat pada</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($buah as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada buah dengan keterangan kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
