<?php

require_once __DIR__ . '/Model/Movie.php';

$il_gladiatore = new Movie('Il Gladiatore', 'Ridley Scott', ['Russell Crowe', 'Joaquin Phoenix', 'Connie Nielsen'], 9.10, 'italiano', 5.00);

$transformers = new Movie('Transformers', 'Michael Bay', ['Megan Fox', 'Shia LeBeouf', 'Rachel Taylor', 'Josh Duhamel'], 8.20, 'italiano', 6.00);

var_dump($il_gladiatore);
var_dump($transformers);
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
        <h1 class="text-center">Movies</h1>

        <div class="row row-cols-3 my-5 ">
            <!-- <h4><?php echo $il_gladiatore->getInfoPrice() ?> </h4>
            <h6><?php echo $il_gladiatore->getFullInfo() ?></h6> -->

            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
        </div>

    </div>
</body>

</html>