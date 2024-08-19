<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taks</title>
</head>

<body>
    <h3>To do list hari ini:</h3>
    <ul>
        @foreach ($taks as $tugas)
            <li>{{ $tugas['title'] }} @if($tugas['completed'])(Success)@endif</li>
        @endforeach
    </ul>
</body>

</html>