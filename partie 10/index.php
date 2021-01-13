<?php
require_once "controller_index.php"
?>
<!doctype html>
<html lang="fr">

<head>
    <title>Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="style.css">

<body id="bg">
    <h1 class="text-center">Formulaire d'identité</h1>
    <div class="row justify-content-center">

        <div class="col-6 shadow p-3 mb-5 w-50 bg-white rounded opacity">
            <form novalidate class="d-flex flex-column align-content-center" action="index.php" method="post">
                <label for="name">Votre nom</label>
                <input type="text" name="name" id="name" placeholder="ex: Patrick" value="<?= isset($_POST["name"]) ? htmlspecialchars($_POST["name"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["name"]) ? $errorMessages['name'] : "" ?></p>
                <label for="firstname">Votre prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="ex: Jean" required value="<?= isset($_POST["firstname"]) ? htmlspecialchars($_POST["firstname"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["firstname"]) ? $errorMessages['firstname'] : "" ?></p>
                <label for="birth">Votre date de naissance</label>
                <input type="date" name="birth" id="birth" value="<?= isset($_POST["birth"]) ? htmlspecialchars($_POST["birth"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["birth"]) ? $errorMessages['birth'] : "" ?></p>
                <label for="country">Votre pays de naissance</label>
                <input type="text" name="country" id="country" placeholder="pays de naissance" required value="<?= isset($_POST["country"]) ? htmlspecialchars($_POST["country"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["country"]) ? $errorMessages['country'] : "" ?></p>
                <label for="nationality">Votre Nationalité</label>
                <input type="text" name="nationality" id="nationality" placeholder="nationalité" required value="<?= isset($_POST["country"]) ? htmlspecialchars($_POST["country"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["nationality"]) ? $errorMessages['nationality'] : "" ?></p>
                <label for="address">Votre adresse</label>
                <input type="text" name="address" id="address" placeholder="adresse" required value="<?= isset($_POST["address"]) ? htmlspecialchars($_POST["address"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["address"]) ? $errorMessages['address'] : "" ?></p>
                <label for="email">Votre email</label>
                <input type="email" name="mail" id="email" placeholder="email" value="<?= isset($_POST["mail"]) ? htmlspecialchars($_POST["mail"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["mail"]) ? $errorMessages['mail'] : "" ?></p>
                <label for="phoneNumber">Votre telephone</label>
                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="numéro de téléphone" required value="<?= isset($_POST["phoneNumber"]) ? htmlspecialchars($_POST["phoneNumber"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["phoneNumber"]) ? $errorMessages['phoneNumber'] : "" ?></p>
                <label for="study">Vos Diplomes</label>
                <select name="study" id="study" required >
                    <option selected disabled>choisissez</option>
                    <?php 
                     foreach($studyArray as $key => $value){ ?>
                        <option value="<?= $key ?>"<?= isset($_POST["study"]) && $_POST["study"] == $key ? "selected" : "" ?>><?= $value ?></option>
                     <?php } ?>
                </select>
                <p class="text-danger"><?= isset($errorMessages["study"]) ? $errorMessages['study'] : "" ?></p>
                <label for="emploi">Votre numéro pole emploi</label>
                <input type="number" name="emploi" id="emploi" placeholder="ex: 58518135" required value="<?= isset($_POST["emploi"]) ? htmlspecialchars($_POST["emploi"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["emploi"]) ? $errorMessages['emploi'] : "" ?></p>
                <label for="badge">Votre nombre de badge</label>
                <input type="number" name="badge" id="badge" placeholder="ex: 5" required value="<?= isset($_POST["badge"]) ? htmlspecialchars($_POST["badge"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["badge"]) ? $errorMessages['badge'] : "" ?></p>
                <label for="cademy">Votre lien codecademy</label>
                <input type="url" name="cademy" id="cademy" required value="<?= isset($_POST["cademy"]) ? htmlspecialchars($_POST["cademy"])  : "" ?>" />
                <p class="text-danger"><?= isset($errorMessages["cademy"]) ? $errorMessages['cademy'] : "" ?></p>
                <label for="super">Votre super heros</label>
                <textarea type="text" name="super" id="super" required ><?= isset($_POST["super"]) ? htmlspecialchars($_POST["super"])  : "" ?></textarea>
                <p class="text-danger"><?= isset($errorMessages["super"]) ? $errorMessages['super'] : "" ?></p>
                <label for="hack">Votre lifeHack</label>
                <textarea type="text" name="hack" id="hack" required ><?= isset($_POST["hack"]) ? htmlspecialchars($_POST["hack"])  : "" ?></textarea>
                <p class="text-danger"><?= isset($errorMessages["hack"]) ? $errorMessages['hack'] : "" ?></p>
                <label for="xp">Votre experience en programation/informatique</label>
                <textarea type="text" name="xp" id="xp" required><?= isset($_POST["xp"]) ? htmlspecialchars($_POST["xp"])  : "" ?></textarea>
                <p class="text-danger"><?= isset($errorMessages["xp"]) ? $errorMessages["xp"] : "" ?></p>
                <div class="d-flex flex-column">
                    <button name="submit" type="submit" class="btn btn-primary mt-1 align-self-center">validé</button>
                    <a href="show.php" class="align-self-center mt-1"><button type="button" class="btn btn-primary  ">Afficher résultats</button></a>
                </div>
            </form>
        </div>
    </div>
    <div>
    
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>