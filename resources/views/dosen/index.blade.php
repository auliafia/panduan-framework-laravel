<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jadwal Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Jadwal Dosen dan Mahasiswa</h1>
        <div class="mb-3">
            <a href="{{ route('jadwal_mahasiswa.create') }}" class="btn btn-primary">Tambah Jadwal Mahasiswa</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Dosen</th>
                    <th>Mata Kuliah</th>
                    <th>Jam Mengajar Dosen</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jam Belajar Mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->nama_dosen }}</td>
                        <td>{{ $item->nama_matkul }}</td>
                        <td>{{ $item->jam_mengajar }}</td>
                        <td>{{ $item->nama_mahasiswa ?? 'Belum Ada' }}</td>
                        <td>{{ $item->jam_belajar ?? 'Belum Ada' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('dosen.create') }}" class="btn btn-secondary mt-3">Tambah Jadwal Mengajar</a>
    </div>
</body>

</html>


