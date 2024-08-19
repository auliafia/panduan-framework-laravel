<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($items as $item )
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <div>
        <p>Total items : {{ $pagination['total'] }}</p>
        <p>Items per page : {{ $pagination['per_page'] }}</p>
        <p>Current page : {{ $pagination['current_page'] }}</p>
        <p>Last page : {{ $pagination['last_page'] }}</p>

        <p>
            @if ($pagination['prev_page_url'])
                <a href="{{ $pagination['prev_page_url'] }}">Previous</a>    
            @endif
            @if ($pagination['next_page_url'])
                <a href="{{ $pagination['next_page_url'] }}">Next</a>    
            @endif
        </p>
    </div>
</body>
</html>