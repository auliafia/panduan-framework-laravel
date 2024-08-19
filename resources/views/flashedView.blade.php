<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tujuan</title>
</head>
<body>
    <h3>Hai ini halaman tujuan</h3>

    @if (isset($pesan))
    <p>{{ $pesan }}</p> 
    @endif
    
</body>
</html>