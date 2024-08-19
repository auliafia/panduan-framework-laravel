<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    @if (session('success'))
        <div>
            {{ session('success') }}
            <br>
            File Path: <a href="{{ url(session('filePath')) }}" target="_blank">{{ url(session('filePath')) }}</a>
        </div>
    @endif

    @if (session('error'))
        <div>
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('unggahFile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
