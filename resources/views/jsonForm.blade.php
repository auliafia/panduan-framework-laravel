<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSOn Input Form</title>
</head>


<body>
    <h3>JSON Input Form</h3>
    <form id="jsonForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br>

        <button type="button" onclick="submitForm()">Submit</button>
    </form>

    <script>
        function submitForm() {
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value
            };

            fetch('/json-input', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Tambahkan CSRF token untuk keamanan
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => response.text())
                .then(data => {
                    document.body.innerHTML += `<pre>${data}</pre>`;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>

</html>
