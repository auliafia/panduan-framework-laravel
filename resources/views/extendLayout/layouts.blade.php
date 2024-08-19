<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Instagram</a></li>
            </ul>
        </nav>
    </header>

    <div class="konten">
        @yield('konten')
    </div>

    <footer>
        <p>&copy; {{ date('2024') }} All rights reserved</p>
    </footer>
</body>
</html>