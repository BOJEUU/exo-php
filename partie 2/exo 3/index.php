<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>

<body>
    <?php
    $age = 20;
    $gender = "homme";
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
    ?>

</body>

</html>