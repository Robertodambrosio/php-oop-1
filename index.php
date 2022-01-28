<!-- Viene definita una classe ‘Movie’
    all'interno della classe sono dichiarate delle variabili d'istanza
    all'interno della classe è definito un costruttore
    all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

require_once __DIR__ . "/classes/Movies.php";

$movies = [
    new Movies("Interstellar", "Christopher Nolan", "Matt Damon - Casey Affleck - Wes Bentley", 2, 2014),
    new Movies("Inception", "Christopher Nolan", "Leonardo DiCaprio - Tom Hardy - Cilian Murphy", 2, 2010),
    new Movies("Fight Club", "David Fincher", "Brad Pitt - Meat Loaf - Edward Norton", 2, 1999),
    new Movies("Salvate il soldato Ryan", "Steven Spielberg", "Matt Damon - Tom Hanks - Vin Diesel", 2, 1998),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <h1>Roberto's Favourite Movies </h1>
    <?php foreach ($movies as $movie) { ?>
        <div>
            <h3><?php echo $movie->TitoloYear() ?></h3>
            <ul>
                <li>Regista: <?php echo $movie->director ?></li>
                <li>Cast: <?php echo $movie->cast ?></li>
                <li>Durata: <?php echo $movie->duration ?></li>
                <li>Anno di uscita: <?php echo $movie->release_year ?></li>
            </ul>
        </div>
    <?php } ?>
</body>

</html>