@extends('internships.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-blue-600 mb-4">Tambah Dokumen Magang</h1>

        <form action="{{ route('internships.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama Dokumen</label>
                <input type="text" id="name" name="name"
                    class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
                    placeholder="Masukkan nama dokumen" required>
            </div>

            <div class="mb-4">
                <label for="document" class="block text-gray-700">Dokumen (video)</label>
                <input type="file" id="document" name="document"
                    class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded-lg hover:bg-blue-600">Upload
                    Dokumen</button>
                <a href="{{ route('internships.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Kembali ke Daftar</a>
            </div>
        </form>
    </div>
@endsection
