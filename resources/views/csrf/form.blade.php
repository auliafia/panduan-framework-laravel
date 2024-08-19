<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>CSRF Form Example</h3>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('form.submit') }}" method="POST">
        @csrf <!-- Ini adalah bagian penting untuk mencegah serangan CSRF -->

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
