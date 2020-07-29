<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    User view ini menggunakan id = {{ $id }}
    <form action="/admin" method="post">
        @csrf
        <input type="text" name="age" id="age">
        <input type="submit" value="cek">
    </form>
</body>
</html>
