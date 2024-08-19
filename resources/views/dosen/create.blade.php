<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Mengajar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Jadwal Mengajar</h1>
        <form action="{{ route('dosen.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_dosen" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" required>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" required>
            </div>
            <div class="mb-3">
                <label for="mata_kuliah_id" class="form-label">Mata Kuliah</label>
                <select class="form-control" id="mata_kuliah_id" name="mata_kuliah_id" required>
                    @foreach ($mataKuliahs as $matkul)
                        <option value="{{ $matkul->id }}">{{ $matkul->nama_matkul }}</option>
                    @endforeach
                </select>
                <a href="{{ route('mata_kuliah.create') }}" class="btn btn-outline-primary mt-2">Tambah Mata Kuliah
                    Baru</a>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div class="mb-3">
                <label for="jam_mengajar" class="form-label">Jam Mengajar</label>
                <input type="text" class="form-control" id="jam_mengajar" name="jam_mengajar" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>
