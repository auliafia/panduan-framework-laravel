<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mata Pelajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Mata Pelajaran</h2>

        <form action="{{ route('teacher_subject.store_subject') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="subject_name">Nama Mata Pelajaran</label>
                <input type="text" class="form-control" id="subject_name" name="subject_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <a href="{{ route('teacher_subject.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>

</html>
