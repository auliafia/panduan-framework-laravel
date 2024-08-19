<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
</head>
<body>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <H2>Form</H2>
    <form action="{{ route('email.send') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="emailto">Email To:</label>
        <input type="email" id="emailto" name="emailto" required> 
        <br/>
        
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        <br/>

        <label for="email">Email Body:</label>
        <textarea id="email" name="email" required></textarea>
        <br/>

        <label for="attachment">Attachment:</label>
        <input type="file" id="attachment" name="attachment">
        
        <button type="submit">Send Email</button>
    </form>
</body>
</html>