<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Guru</h1>

        <a href="{{ url('/gurus/create') }}" class="btn btn-success mb-4">Tambah Guru</a>

        <form method="GET" action="{{ url('/gurus') }}" class="mb-4">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="nama" class="form-control" placeholder="Cari berdasarkan nama"
                        value="{{ request('nama') }}">
                </div>
                <div class="col-md-4">
                    <input type="text" name="mata_pelajaran" class="form-control"
                        placeholder="Cari berdasarkan mata pelajaran" value="{{ request('mata_pelajaran') }}">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary w-100">Cari</button>
                </div>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gurus as $guru)
                    <tr>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->mata_pelajaran }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
