<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <p>Парсинг сайта: <b><?=$url?></b></p>
    <table class="table">
        <thead class="thead-dark">
            <th>Тег</th>
            <th>Количество повторов</th>
        </thead>
        <tbody>
        @foreach($result as $key => $res)
            <tr>
                <td><?=$key?></td>
                <td><?=$res?></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
