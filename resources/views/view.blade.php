<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redirect Name</title>
</head>

<body>

    <h3>Redirect Named Views</h3>
    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

</body>

</html>
