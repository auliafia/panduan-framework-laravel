<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanaman dengan HAVING</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Tanaman dengan HAVING</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Tanaman</th>
                <th>Rata-rata Umur</th>
                <th>Jumlah Tanaman</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tanaman as $item)
                <tr>
                    <td>{{ $item->nama_tanaman }}</td>
                    <td>{{ number_format($item->avg_umur, 2) }} tahun</td>
                    <td>{{ $item->jumlah_tanaman }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('tanaman.index') }}" class="button">Kembali ke Daftar Tanaman</a>
</body>

</html>
