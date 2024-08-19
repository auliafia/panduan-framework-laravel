<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }

        .btn-custom {
            background-color: #007BFF;
            color: white;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            color: white;
        }
    </style>
    <script>
        function deleteSiswa(id) {
            if (confirm('Anda yakin ingin menghapus siswa ini?')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }

        function deleteAllFromSession() {
            if (confirm('Anda yakin ingin menghapus semua data siswa?')) {
                document.getElementById('delete-all-form').submit();
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Data Siswa</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('siswas.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <button type="submit" class="btn btn-custom">Tambah Siswa</button>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->id }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>
                            <button class="btn btn-danger" onclick="deleteSiswa({{ $siswa->id }})">Hapus</button>
                            <form id="delete-form-{{ $siswa->id }}"
                                action="{{ route('siswas.destroy', $siswa->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button class="btn btn-warning" onclick="deleteAllFromSession()">Hapus Semua dari Sesi</button>
        <form id="delete-all-form" action="{{ route('siswas.deleteSession') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>

</html>
