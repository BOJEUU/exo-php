<?php
function yes($victor, $wenger, $age)
{
    return "bonjour $victor $wenger , tu as $age ans ";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>

<body>
    <p><?= yes("Wenger", "Victor",20)  ?></p>
</body>

</html>