<?php
function ageEtGenre($age, $gender){


    
    if ($age >= 18) {
        if ($gender == "homme") {
            echo "vous etes majeur et un homme! ";
        } else {
            echo "vous etes majeur et une femme ";
        }
    } else {
        if ($gender == "homme") {
            echo "vous etes mineur et un homme! ";
        } else {
            echo "vous etes mineur et une femme ";
        }
    }
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
<p><?= ageEtGenre(20,"homme")  ?></p>
</body>
</html>