<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>

<body>
    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
