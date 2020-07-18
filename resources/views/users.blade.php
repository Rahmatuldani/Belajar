<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Users = {{ $nama }}
    Id = {{ $id }}
    <a href="{{ route("admin.users", ['id' => 12]) }}">Link</a>
</body>
</html>
