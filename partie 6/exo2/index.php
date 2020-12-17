<?php
var_dump($_GET);
var_dump(isset($_GET["lastname"]));
$lastname = "";
$firstname = "";
if (isset($_GET["lastname"]) && isset($_GET["lastname"])) {
    $lastname = $_GET["lastname"];
    $firstname = $_GET["firstname"];
}else{
    $lastname = "pas de nmaze";
    $firstname = "pasd e preoin";
}
if (isset($_GET["age"])){
    $age = $_GET["age"];
}else{
    $age = "le param nest pas present";
}
?>
<!doctype html>
<html lang="fr">
  <head>
    <title>exo2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <a type="button" class="btn btn-primary" href="index.php?lastname=Shima&firstname=Brian" id="button1">envoi des paramètres</a>
    <a type="button" class="btn btn-secondary" href="index.php" id="button2">retour a index</a>

    <p> <?= $lastname ?></p>
    <p> <?= $firstname ?></p>
    <p> <?= $age ?></p>
  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>