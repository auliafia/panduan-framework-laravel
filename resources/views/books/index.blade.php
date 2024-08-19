<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
</head>
<body>
    <h1>Books List</h1>
    <a href="/books/create">Create New Book</a>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} by {{ $book->author }} ({{ $book->year }})</li>
        @endforeach
    </ul>
</body>
</html>
