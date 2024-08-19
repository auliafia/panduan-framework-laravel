<!DOCTYPE html>
<html>

<head>
    <title>Detail Kamar</title>
</head>

<body>
    <h1>Detail Kamar</h1>
    <p>Nomor Kamar: {{ $kamar->nomor_kamar }}</p>
    <p>Password: {{ $kamar->password }}</p>
    <a href="{{ route('kamar.index') }}">Kembali</a>
</body>

</html>
