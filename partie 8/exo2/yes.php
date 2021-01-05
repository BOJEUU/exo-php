<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage</title>
</head>
<body>
<?php 
echo $_SESSION["lastname"]." ".$_SESSION["firstname"]." ".$_SESSION["age"];
     
?>
    
</body>
</html>