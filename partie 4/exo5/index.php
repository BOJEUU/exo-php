<?php
function yes($var1,$var2)
{
    return "$var1 $var2";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>

<body>
    <p><?= yes(1,"est le nombre de la variable 1")  ?></p>
</body>

</html>