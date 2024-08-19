<!DOCTYPE html>
<html>

<head>
    <title>Create Book</title>
</head>

<body>
    <h1>Create New Book</h1>
    <form action="/books" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>
        <br>
        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required>
        <br>
        <button type="submit">Create</button>
    </form>
</body>

</html>