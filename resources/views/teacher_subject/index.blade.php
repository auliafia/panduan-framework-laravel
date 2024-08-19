<!DOCTYPE html>
<html>

<head>
    <title>Input Guru dan Mata Pelajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Guru dan Mata Pelajaran</h2>

        <!-- Form untuk menambah guru -->
        <form action="{{ route('teacher_subject.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="teacher_name">Nama Guru</label>
                <input type="text" class="form-control" id="teacher_name" name="name" required>
            </div>
            <div class="form-group">
                <label for="subjects">Pilih Mata Pelajaran</label>
                <select multiple class="form-control" id="subjects" name="subject_ids[]">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <a href="{{ route('teacher_subject.create_subject') }}" class="btn btn-secondary mt-4">Tambah Mata Pelajaran</a>

        <a href="{{ route('teacher_subject.results') }}" class="btn btn-info mt-3">Lihat Hasil</a>
    </div>
</body>

</html>