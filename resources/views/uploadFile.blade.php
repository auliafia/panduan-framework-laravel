<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>

<body>
    <form method="POST" action="{{ route('uploadFile') }}" enctype="multipart/form-data">
        @csrf

        <label for="file">Choose File: </label>
        <input type="file" name="file" id="file">
        <button type="submit">Upload</button>
    </form>
</body>

</html>