<!DOCTYPE html>
<html>

<head>
    <title>Book Titles</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }

        .table-hover tbody tr:hover {
            background-color:#b8c9d9;
        }

        .table thead th {
            background-color: #1d466f;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">List of Book Titles</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($columns as $index => $title)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $title }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
