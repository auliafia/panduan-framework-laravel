<!DOCTYPE html>
<html>

<head>
    <title>Tambah Program Studi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Program Studi</h2>
        <form action="{{ route('programstudi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_program" class="form-label">Nama Program Studi</label>
                <input type="text" class="form-control" id="nama_program" name="nama_program" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>

</html>
