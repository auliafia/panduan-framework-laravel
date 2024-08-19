<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>
</head>
<body>
    <h3>Formulir Siswa XII PPLG 1</h3>
    <form action="{{ route('proses-formulir') }}" method="post">
        @csrf
        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" required><br><br>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" required><br><br>

        <label for="no">No :</label>
        <input type="text" name="no" required><br><br>

        <button type="submit">Kirim</button>
    </form>
    
</body>
</html>