
<!doctype html>
<html lang="fr">

<head>
    <title>exo6</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<?php
if (isset($_POST["sexe"]) && isset($_POST["nom"]) && isset($_POST["prenom"])) {
    $sexe = $_POST["sexe"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
?>
<p>Bonjour, <?php echo $prenom ?>.
        Ton nom est <?php echo $nom ?>
        . et du est du sexe <?php echo $sexe ?></p>
<?php

} else {
    $sexe = "";
    $nom = "";
    $prenom = "";
?>
    
<form action="index.php" method="post" id="form">
    <p>Votre nom : <input type="text" name="nom" /></p>
    <p>Votre prenom : <input type="text" name="prenom" /></p>
    <p><select id="sexe" name="sexe">
            <option value="defaut">veuillez choisir</option>
            <option value="homme">homme</option>
            <option value="femme">femme</option>
        </select></p>
    <p><input type="submit" value="OK"></p>
</form>
<?php
}
?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>