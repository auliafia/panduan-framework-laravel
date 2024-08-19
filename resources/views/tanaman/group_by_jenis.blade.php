<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tanaman Berdasarkan Jenis</title>
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
    </style>
</head>

<body>
    <h1>Daftar Tanaman Berdasarkan Jenis</h1>

    <table>
        <thead>
            <tr>
                <th>Jenis Tanaman</th>
                <th>Total Tanaman</th>
                <th>Rata-rata Umur (tahun)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tanamanGrouped as $item)
                <tr>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ $item->total }}</td>
                    <td>{{ number_format($item->rata_umur, 2) }} tahun</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('tanaman.index') }}" class="button">Kembali ke Daftar Tanaman</a>
</body>

</html>
