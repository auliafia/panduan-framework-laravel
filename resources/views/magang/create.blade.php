<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File Magang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .upload-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .upload-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .upload-container input[type="text"],
        .upload-container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .upload-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .upload-container button:hover {
            background-color: #45a049;
        }

        .alert-success {
            color: green;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="upload-container">
        <h2>Upload File Magang</h2>

        @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('magang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="file_magang">File Magang:</label>
            <input type="file" id="file_magang" name="file_magang" required>

            <button type="submit">Upload</button>
        </form>
    </div>

</body>

</html>
