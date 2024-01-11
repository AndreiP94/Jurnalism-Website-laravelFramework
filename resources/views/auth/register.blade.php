<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Înregistrare</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            width: 300px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form action="{{ route('register') }}" method="post">
    @csrf
    <h2>Înregistrare</h2>
    <input type="text" name="first_name" placeholder="Nume"><br>
    <input type="text" name="last_name" placeholder="Prenume"><br>
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Parola"><br>
    <input type="submit" value="Înregistrare">
</form>
</body>
</html>
