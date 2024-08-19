<!DOCTYPE html>
<html>

<head>
    <title>Paginated Users</title>
</head>

<body>
    <h1>Paginated Users</h1>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }} - {{ $user['email'] }}</li>
        @endforeach
    </ul>

    <!-- Links Paginasi -->
    {{ $users->links() }}
</body>

</html>
