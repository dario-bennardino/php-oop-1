<?php

require_once __DIR__ . '/Model/Movie.php';

$il_gladiatore = new Movie('Il Gladiatore', 'Ridley Scott', ['Russell Crowe', 'Joaquin Phoenix', 'Connie Nielsen'], 9.10, 'italiano', 5.00, ['Azione', 'Drammatico']);

$transformers = new Movie('Transformers', 'Michael Bay', ['Megan Fox', 'Shia LeBeouf', 'Rachel Taylor', 'Josh Duhamel'], 8.20, 'italiano', 6.00, ['Azione', 'Fantascienza']);

$movies = [$il_gladiatore, $transformers];

// var_dump($il_gladiatore);
// var_dump($transformers);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <div class="container my-4 ">
        <h1 class="text-center text-white">Movies</h1>

        <div class="row row-cols-3 my-5 ">
            <!-- <div class="movie">
                <h6><?php echo $il_gladiatore->getFullInfo() ?></h6>
            </div>
            <div class="movie">
                <h6><?php echo $transformers->getFullInfo() ?></h6>
            </div> -->
            <!-- <h6><?php echo $il_gladiatore->getInfoPrice() ?> </h6> -->

            <?php foreach ($movies as $movie) : ?>
                <div class="card m-4 ">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->nome ?> </h5>
                        <p class="card-text">Regista: <?php echo $movie->regista ?></p>
                        <p class="card-text">Cast: <?php echo $movie->getFullCast() ?></p>
                        <p class="card-text">Voto: <?php echo $movie->voto ?></p>
                        <p class="card-text">Lingua: <?php echo $movie->lingua ?></p>
                        <p class="card-text">Prezzo: <?php echo $movie->price ?></p>
                        <p class="card-text">Genere: <?php echo $movie->getFullGenre() ?></p>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>

</html>