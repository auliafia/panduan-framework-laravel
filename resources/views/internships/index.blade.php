@extends('internships.app')

@section('content')
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-primary">Daftar Dokumen Magang</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('internships.create') }}" class="btn btn-success">Tambah Dokumen</a>
        </div>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Dokumen</th>
                <th>Dokumen</th>
                <th>Diunggah Pada</th>
            </tr>
        </thead>
        <tbody>
            @forelse($internships as $internship)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $internship->name }}</td>
                    <td>
                        @if ($internship->document)
                            <a href="{{ asset($internship->document) }}" class="btn btn-info btn-sm" target="_blank">Lihat
                                Dokumen</a>
                        @else
                            <span class="text-muted">Tidak Ada Dokumen</span>
                        @endif
                    </td>
                    <td>{{ $internship->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada berkas magang yang tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
