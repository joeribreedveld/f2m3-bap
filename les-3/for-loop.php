<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $pokemons = ["Pikachu", "Charmander", "Bulbasaur", "Squirtle", "Charizard"];

    $images = ["https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png", "https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png", "https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png", "https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png", "https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png"];

    $lengte = count($pokemons);

    for ($i = 0; $i < $lengte; $i++) {
        echo "<h1>" . $pokemons[$i] . "</h1>";
        echo "<img src =" . $images[$i].">";
    }

    ?>

</body>
</html>