<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        p {
            font-size: 16px;
            color: #333;
        }

        .back-button {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-align: center;
            border-radius: 4px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Detail Karyawan</h2>
        <p><strong>Nama:</strong> {{ $karyawan->nama }}</p>
        <p><strong>Jabatan:</strong> {{ $karyawan->jabatan }}</p>
        <p><strong>Gaji:</strong> {{ $karyawan->gaji }}</p>
        <p><strong>Tanggal Ditambahkan:</strong> {{ $karyawan->created_at }}</p>
        <a href="{{ route('karyawan.index') }}" class="back-button">Kembali ke Daftar Karyawan</a>
    </div>
</body>

</html>
