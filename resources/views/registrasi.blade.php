<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi Siswa</title>
</head>
<body>
    <h3>FORMULIR REGISTRASI</h3>
    <form action="registrasi/hasil" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

        Nama:
        <input type="text" name="nama"> 
        <br>
        <br>
        Pangkalan:
        <input type="text" name="pangkalan"> <br>
        <input type="submit" value="simpan">
    </form>
</body>
</html>