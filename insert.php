<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
</head>
<body>
    Name: <input type="text" id="name"><br>
    Email: <input type="email" id="email"><br>
    <button onclick="insertData()">Submit</button>

    <script>
        function insertData() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'insert1.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('name=' + name + '&email=' + email);

            xhr.onload = function() {
                if (xhr.status == 200) {
                    alert(xhr.responseText);
                } else {
                    alert('Error: ' + xhr.status);
                }
            };
        }
    </script>
</body>
</html>
