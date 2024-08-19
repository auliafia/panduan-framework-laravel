<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Hewan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #0073e6;
        }

        .alert {
            background-color: #ffcccc;
            color: #b30000;
            padding: 10px;
            border: 1px solid #b30000;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #0073e6;
            color: white;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0073e6;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn:hover {
            background-color: #005bb5;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Daftar Hewan</h1>

        @if ($hiddenAnimals->isNotEmpty())
            <div class="alert">
                <strong>Peringatan:</strong> Ada {{ $hiddenAnimals->count() }} hewan yang berusia antara
                {{ $minAge }} - {{ $maxAge }} tahun dan tidak ditampilkan.
            </div>
        @endif

        <a href="{{ route('animals.create') }}" class="btn">Tambah Hewan Baru</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                @forelse($animals as $animal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $animal->name }}</td>
                        <td>{{ $animal->age }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Tidak ada hewan yang ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
