<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
</head>
<body>
        @if (isset($data))
            <h2>Data:</h2>
            <ul>
                <li>Name: {{ $data['name'] }}</li>
                <li>Class: {{ $data['class'] }}</li>
            </ul>
        @else
            <p>No data available</p>
        @endif
</body>
</html>