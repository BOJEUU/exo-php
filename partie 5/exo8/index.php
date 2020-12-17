
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo8</title>
</head>

<body> 
<?php
    $month = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
    $number = 0;
    for ($number = 0; $number <= 11; $number++) {
        echo "<br>";
        echo $month[$number];   
    }
    ?>
</body>

</html>