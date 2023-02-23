<?php
    $dto = [
        'title' => 'Hello World',
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <example-component :param='@json($dto)'></example-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
