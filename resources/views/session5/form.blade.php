<!DOCTYPE html>
<html>

<head>
    <title>Add to Session</title>
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        .container h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .container form {
            display: flex;
            flex-direction: column;
        }

        .container input[type="text"] {
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .container input[type="text"]:focus {
            border-color: #0072ff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 114, 255, 0.2);
        }

        .container input[type="submit"] {
            padding: 15px;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #fff;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
            margin-top: 20px;
        }

        .container input[type="submit"]:hover {
            background: linear-gradient(to right, #0072ff, #00c6ff);
        }

        .alert {
            display: none;
            margin-top: 20px;
            padding: 15px;
            background-color: #4caf50;
            color: white;
            border-radius: 4px;
        }

        .alert.success {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Add Value to Session</h1>
        @if (session('message'))
            <div class="alert success">
                {{ session('message') }}
            </div>
        @endif
        <form action="/add-to-session" method="POST">
            @csrf
            <input type="text" name="value" placeholder="Enter a value" required>
            <input type="submit" value="Add">
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.querySelector('.alert.success');
            if (alert) {
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 3000);
            }
        });
    </script>
</body>

</html>
