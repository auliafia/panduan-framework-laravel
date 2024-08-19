<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Validasi</title>
</head>
<body>
    <form method="POST" action="{{ route('processUpload') }}" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose File: </label>
        <input type="file" name="file" id="file">
        <button type="submit">Upload</button>
    </form>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
</body>
</html>
