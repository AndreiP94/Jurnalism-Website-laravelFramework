<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logare</title>
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
            flex-direction: column;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
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

        button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form action="{{ route('login') }}" method="post">
    @csrf
    <h2>Logare</h2>
    <input type="text" name="username" placeholder="Nume utilizator"><br>
    <input type="password" name="password" placeholder="Parola"><br>
    <input type="submit" value="Logare">
</form>

<button onclick="window.location.href='/'">Înapoi la Pagina Principală</button>
<h3>Daca nu aveti cont , va rog sa va inregistrati!</h3>
<button onclick="window.location.href='/register'">inregistrare</button>
</body>
</html>
