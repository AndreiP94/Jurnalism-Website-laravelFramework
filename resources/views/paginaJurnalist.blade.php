<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adauga Articol</title>
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
            display: inline-block;
            margin-right: 10px;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <h1 style="margin: 0;">Articole Jurnalism</h1>
    <div>
        @if (session('author_name'))
            <span>Bun venit, jurnalistule {{ session('author_name') }}!</span>
        @endif
        <button onclick="window.location.href='/'">Delogare</button>



    </div>
</header>
<form action="{{ route('paginaJurnalist') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Titlu"><br>
    <input type="text" name="content" placeholder="Continut"><br>
    <input type="text" name="categorie" placeholder="Categorie"><br>
    <input type="text" name="prezentare" placeholder="Prezentare"><br>

    <input type="submit" value="Adauga articol">
</form>

<footer>
    <p>&copy; {{ date('Y') }}Toate drepturile rezervate.</p>
</footer>
</body>
</html>
