<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Input Data</title>
</head>

<body>
    <h3>Input Form</h3>
    <form method="POST" action="/retrieve-input">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
