
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fromulaire</title>
</head>
<body>
    <p>tu t'appelles <?php echo $_COOKIE["name"] ?> <?php echo $_COOKIE["firstname"] ?><br>
     tu est née le <?php echo $_COOKIE["birth"] ?> en <?php echo $_COOKIE["country"] ?> tu est donc de nationalité <?php echo $_COOKIE["nationality"] ?><br>
     tu habites au <?php echo $_COOKIE["address"] ?> ,ton adresse email est <?php echo $_COOKIE["mail"] ?> et ton numéro de téléphone est <?php echo $_COOKIE["phoneNumber"] ?><br>
     tu as un niveau d'études équivalent a: <?php echo $_COOKIE["study"] ?><br>
     ton numéro pole emploi est <?php echo $_COOKIE["emploi"] ?> et ton de badge et de <?php echo $_COOKIE["badge"] ?>, ton lien codecademy est <?php echo $_COOKIE["cademy"] ?><br>
     si tu étais une super héros tu serais <?php echo $_COOKIE["super"] ?><br>
     ton meilleur life hack est <?php echo $_COOKIE["hack"] ?><br>
     Ton expérience en informatique/programmation : <?php echo $_COOKIE["xp"] ?>
    </p>
</body>
</html>