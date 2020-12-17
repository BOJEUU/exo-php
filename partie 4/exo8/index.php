<?php
function calcul($number1, $number2, $number3 ="paysan")
{
    return $number1 + $number2 + $number3;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo8</title>
</head>

<body>
    <p><?= calcul(1,1,1)  ?></p>

</body>

</html>