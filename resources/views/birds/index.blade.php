<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Birds List</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('birds.create') }}" class="btn btn-primary mb-4">Add New Bird</a>

        <form class="mb-4" method="GET" action="{{ route('birds.index') }}">
            <div class="form-row">
                <div class="col">
                    <input type="number" name="skip" class="form-control" placeholder="Skip" min="0">
                </div>
                <div class="col">
                    <input type="number" name="take" class="form-control" placeholder="Take" min="1">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success">Apply</button>
                </div>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Species</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($birds as $bird)
                    <tr>
                        <td>{{ $bird->id }}</td>
                        <td>{{ $bird->name }}</td>
                        <td>{{ $bird->species }}</td>
                        <td>{{ $bird->age }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
