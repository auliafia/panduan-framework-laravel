<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Jadwal Mahasiswa</h1>
        <form action="{{ route('jadwal_mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div class="mb-3">
                <label for="dosen_id" class="form-label">Dosen</label>
                <select class="form-control" id="dosen_id" name="dosen_id" required>
                    @foreach ($dosens as $dosen)
                        <option value="{{ $dosen->id }}" data-jam="{{ $dosen->jam_mengajar }}">
                            {{ $dosen->nama_dosen }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="mata_kuliah_id" class="form-label">Mata Kuliah</label>
                <select class="form-control" id="mata_kuliah_id" name="mata_kuliah_id" required>
                    @foreach ($mataKuliahs as $matkul)
                        <option value="{{ $matkul->id }}">{{ $matkul->nama_matkul }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jam_belajar" class="form-label">Jam Belajar</label>
                <input type="text" class="form-control" id="jam_belajar" name="jam_belajar" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dosenSelect = document.getElementById('dosen_id');
            var jamBelajarInput = document.getElementById('jam_belajar');

            dosenSelect.addEventListener('change', function() {
                var selectedOption = dosenSelect.options[dosenSelect.selectedIndex];
                var jamMengajar = selectedOption.getAttribute('data-jam');
                jamBelajarInput.value = jamMengajar;
            });
        });
    </script>
</body>

</html>
