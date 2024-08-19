<!DOCTYPE html>
<html>

<head>
    <title>Edit Kamar</title>
</head>

<body>
    <h1>Edit Kamar</h1>
    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('kamar.index') }}">Kembali</a>
</body>

</html>
