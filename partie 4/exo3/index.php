<?php

function makeCocktailMonaco()

{
    $firstIngredients = "biere";
    $secondIngredients = "grenadine";

    if ($firstIngredients == "biere" && $secondIngredients == "grenadine") {
        return "voici le cocktail monaco";
    } elseif ($firstIngredients == "biere" && $secondIngredients == "limonade") {
        return "voici le cocktail panache";
    } elseif ($firstIngredients == "biere" && $secondIngredients == "citron") {
        return "voici le cocktail twist";
    } elseif ($firstIngredients == "biere" && $secondIngredients == "coca") {
        return "voici le cocktail mazout";
    } else {
        return "je peux pas faire ton cocktail";
    }
}
function makeCocktailTwist()

{
    $firstIngredients = "biere";
    $secondIngredients = "citron";

    if ($firstIngredients == "biere" && $secondIngredients == "grenadine") {
        return "voici le cocktail monaco";
    } elseif ($firstIngredients == "biere" && $secondIngredients == "limonade") {
        return "voici le cocktail panache";
    } elseif ($firstIngredients == "biere" && $secondIngredients == "citron") {
        return "voici le cocktail twist";
    } elseif ($firstIngredients == "biere" && $secondIngredients == "coca") {
        return "voici le cocktail mazout";
    } else {
        return "je peux pas faire ton cocktail";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <p><?= makeCocktailMonaco()  ?></p>
    <p><?= makeCocktailTwist()  ?></p>
</body>

</html>