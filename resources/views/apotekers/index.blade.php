@extends('apotekers.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Apoteker</h1>

        <!-- Form Pencarian -->
        <form method="GET" action="{{ route('apotekers.index') }}" class="mb-4">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Apoteker"
                        value="{{ request('nama') }}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="lokasi" class="form-control" placeholder="Lokasi"
                        value="{{ request('lokasi') }}">
                </div>
                <div class="col-md-3">
                    <select name="status" class="form-control">
                        <option value="">-- Status --</option>
                        <option value="aktif" {{ request('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="non-aktif" {{ request('status') == 'non-aktif' ? 'selected' : '' }}>Non-Aktif
                        </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary w-100">Cari</button>
                </div>
            </div>
        </form>

        <!-- Tabel Data Apoteker -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($apotekers as $apoteker)
                    <tr>
                        <td>{{ $apoteker->nama }}</td>
                        <td>{{ $apoteker->lokasi }}</td>
                        <td>{{ $apoteker->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Tidak ada data apoteker.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
