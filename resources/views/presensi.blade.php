<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presensi</title>
</head>

<body>
    <form action="{{ url('presensi') }}">
        @csrf
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Class: </td>
                <td>
                    <textarea name="class"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Send">
                </td>
            </tr>
        </table>

    </form>

</body>

</html>