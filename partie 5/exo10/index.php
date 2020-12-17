<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo10</title>
</head>
<body>
<?php 
    $month = array(
        14 => "Calvados",
        27 => "Eure",
        50 => "Manche",
        61 => "Orne",
        76 => "Seine-Maritime",
    );
    var_dump($month);
    foreach($month as $cle => $valeur){
        echo "<p>";
        echo "le département".' '. $valeur.' '."a pour chiffre".' '.x$cle;
    } 
 
    ?>
</body>
</html>