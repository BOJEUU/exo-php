<?php
function yes($number1, $number2)
{
    if ($number1 > $number2) {
        return "le premier nombre est plus grand";
    } elseif ($number1 == $number2) {
        return " les 2 sont égaux";
    } else {
        return "le deuxieme nombre est plus grand";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>

<body>
    <p><?= yes(1,0.5)  ?></p>
</body>

</html>