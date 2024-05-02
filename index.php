<?php

require_once __DIR__ . '/Model/Movie.php';

$il_gladiatore = new Movie('Il Gladiatore', 'Ridley Scott', ['Russell Crowe', 'joaquin_phoenix', 'Connie Nielsen'], 5.00);

var_dump($il_gladiatore)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4 ">
        <h1>Movies</h1>
        <h3><?php $il_gladiatore->getInfoPrice() ?> </h3>
    </div>
</body>

</html>