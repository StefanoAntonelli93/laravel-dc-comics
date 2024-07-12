<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-boolando</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Laravel Template</h1>
    <img src="{{ Vite::asset('resources/img/logo.jpg') }}" alt="pic">
</body>

</html>