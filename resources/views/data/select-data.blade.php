<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Data</title>
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background-color: #91a5e0;
            color: white;
            padding: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #91a5e0;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .footer {
            background-color: #91a5e0;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Authors List</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($select_data as $data)
                    <tr>
                        <td>{{ $data->author }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="footer">
            &copy; Authors Database
        </div>
    </div>
</body>

</html>
