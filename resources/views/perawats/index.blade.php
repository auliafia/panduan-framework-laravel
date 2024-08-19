<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Perawat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        .search-box {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-box input[type="text"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-box button {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            margin-left: 10px;
        }

        .search-box button:hover {
            background-color: #0056b3;
        }

        .results {
            margin-top: 20px;
        }

        .result-item {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .result-item:last-child {
            border-bottom: none;
        }

        .result-item h2 {
            margin: 0 0 10px;
            color: #007bff;
        }

        .result-item p {
            margin: 0;
            color: #555;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Daftar Perawat</h1>
        <form class="search-box" action="{{ route('perawats.index') }}" method="GET">
            <input type="text" name="query" placeholder="Cari berdasarkan nama atau spesialisasi"
                value="{{ request('query') }}">
            <button type="submit"><i class="fas fa-search"></i> Cari</button>
        </form>

        <div class="results">
            @if ($perawats->isEmpty())
                <p>Tidak ada perawat yang ditemukan.</p>
            @else
                @foreach ($perawats as $perawat)
                    <div class="result-item">
                        <h2>{{ $perawat->nama }}</h2>
                        <p>Spesialisasi: {{ $perawat->spesialisasi }}</p>
                    </div>
                @endforeach
            @endif
        </div>

        <a href="{{ route('perawats.create') }}" class="back-link">Tambah Perawat Baru</a>
    </div>

</body>

</html>
