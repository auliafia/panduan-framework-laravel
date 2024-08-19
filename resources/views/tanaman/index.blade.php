<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tanaman</title>
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

        th a {
            color: #333;
            text-decoration: none;
        }

        th a:hover {
            text-decoration: underline;
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
    <h1>Daftar Tanaman</h1>

    @if ($tanaman->isEmpty())
        <p>Tidak ada tanaman yang memenuhi kriteria.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th><a
                            href="{{ route('tanaman.index', ['order_by' => 'nama_tanaman', 'direction' => $orderByField == 'nama_tanaman' && $orderDirection == 'asc' ? 'desc' : 'asc']) }}">Nama
                            Tanaman</a></th>
                    <th><a
                            href="{{ route('tanaman.index', ['order_by' => 'umur', 'direction' => $orderByField == 'umur' && $orderDirection == 'asc' ? 'desc' : 'asc']) }}">Umur</a>
                    </th>
                    <th><a
                            href="{{ route('tanaman.index', ['order_by' => 'jenis', 'direction' => $orderByField == 'jenis' && $orderDirection == 'asc' ? 'desc' : 'asc']) }}">Jenis</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tanaman as $item)
                    <tr>
                        <td>{{ $item->nama_tanaman }}</td>
                        <td>{{ $item->umur }} tahun</td>
                        <td>{{ $item->jenis }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('tanaman.create') }}" class="button">Tambah Tanaman</a>
</body>

</html>
