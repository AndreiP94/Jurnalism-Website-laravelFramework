<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articole Jurnalism</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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

        .container {
            width: 80%;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
        }

        .category {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .article {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
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
        h2 {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
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
{{--        <button onclick="window.location.href='/login'">Logare</button>--}}
        @if (session('author_name'))
            <span>Bun venit, cititorule {{ session('author_name') }}!</span>
        @endif
        <button onclick="window.location.href='/'">Delogare</button>


    </div>
</header>



    <div class="container">
        @foreach ($categorizedArticles as $categoryName => $articles)
            <div class="category-section">
                <h2>{{ $categoryName }}</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Titlu</th>
                        <th>Prezentare</th>
                        <th>Autor</th>
                        <th>Data</th>
                        <th>Conținut</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->prezentare }}</td>
                            <td>{{ $article->autor }}</td>
                            <td>{{ $article->data }}</td>
                            <td>{{ $article->content }}</td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>

<footer>
    <p>&copy; {{ date('Y') }}Toate drepturile rezervate.</p>
</footer>

</body>
</html>
