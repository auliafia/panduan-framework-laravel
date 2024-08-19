<!DOCTYPE html>
<html>

<head>
    <title>Hasil Guru dan Mata Pelajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Hasil Guru dan Mata Pelajaran</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Guru</th>
                    <th>Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $teacher)
                    <tr>
                        <td>{{ $teacher->name }}</td>
                        <td>
                            @foreach ($teacher->subjects as $subject)
                                {{ $subject->name }}@if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('teacher_subject.index') }}" class="btn btn-info mt-3">Kembali</a>
    </div>
</body>

</html>
