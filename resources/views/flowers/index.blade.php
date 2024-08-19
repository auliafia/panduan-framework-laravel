<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Flowers</h1>

        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol untuk menambahkan bunga baru -->
        <a href="{{ route('flowers.create') }}" class="btn btn-primary mb-3">Add New Flower</a>

        <!-- Tabel daftar bunga -->
        @if ($flowers->isEmpty())
            <div class="alert alert-info">No flowers found.</div>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($flowers as $flower)
                        <tr>
                            <td>{{ $flower->id }}</td>
                            <td>{{ $flower->name }}</td>
                            <td>{{ $flower->color }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>

</html>