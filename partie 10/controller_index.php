<?php
$regexName = '/^[a-zA-Z]+$/';
$regexBirth = '/^\d{4}(\-)(((0)[0-9])|((1)[0-2]))(\-)([0-2][0-9]|(3)[0-1])$/';
$regexPhoneNumber = "/^(0|\+33)[1-9]( *[0-9]{2}){4}$/";
$regexNumber = "/^[0-9]+$/";
$errorMessages = [];
$studyArray = [
    1 => "sans",
    2 => "bac",
    3 => "bac+2",
    4 => "bac+3",
    5 => "bac+5",
    6 => "bac + bojeu"
];
if (isset($_POST["name"])) {
    if (!preg_match($regexName, $_POST["name"])) {
        $errorMessages["name"] = "veuillez saisir un nom valide";
    }
    if (empty($_POST["name"])) {
        $errorMessages["name"] = "veuillez saisir votre nom";
    }
}
if (isset($_POST["firstname"])) {
    if (!preg_match($regexName, $_POST["firstname"])) {
        $errorMessages["firstname"] = "veuillez saisir un prénom valide";
    }
    if (empty($_POST["firstname"])) {
        $errorMessages["firstname"] = "veuillez saisir votre prénom";
    }
}
if (isset($_POST["birth"])) {
    if (!preg_match($regexBirth, $_POST["birth"])) {
        $errorMessages["birth"] = "veuillez saisir une date de naissance valide";
    }
    if (empty($_POST["birth"])) {
        $errorMessages["birth"] = "veuillez saisir votre date de naissance";
    }
}
if (isset($_POST["country"])) {
    if (!preg_match($regexName, $_POST["country"])) {
        $errorMessages["country"] = "veuillez saisir un pays valide";
    }
    if (empty($_POST["country"])) {
        $errorMessages["country"] = "veuillez saisir votre pays";
    }
}
if (isset($_POST["nationality"])) {
    if (!preg_match($regexName, $_POST["nationality"])) {
        $errorMessages["nationality"] = "veuillez saisir une nationalité valide";
    }
    if (empty($_POST["nationality"])) {
        $errorMessages["nationality"] = "veuillez saisir votre nationalité";
    }
}
if (isset($_POST["address"])) {
    if (empty($_POST["address"])) {
        $errorMessages["address"] = "veuillez saisir votre adresse";
    }
}
if (isset($_POST["mail"])) {
    if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        $errorMessages["mail"] = "veuillez saisir un email valide";
    }
    if (empty($_POST["mail"])) {
        $errorMessages["mail"] = "veuillez saisir votre email";
    }
}
if (isset($_POST["phoneNumber"])) {
    if (!preg_match($regexPhoneNumber, $_POST["phoneNumber"])) {
        $errorMessages["phoneNumber"] = "veuillez saisir un numéro de téléphone valide";
    }
    if (empty($_POST["phoneNumber"])) {
        $errorMessages["phoneNumber"] = "veuillez saisir votre numéro de téléphone";
    }
}



if (isset($_POST["submit"]) && !isset($_POST["study"])) {
    $errorMessages["study"] = "veuillez choisir votre niveau d'études";  
}

if (isset($_POST["study"])){
    if(!array_key_exists($_POST["study"] , $studyArray)){
        $errorMessages["study"] = "petit coquin";
    }
    
}





if (isset($_POST["emploi"])) {
    if (!preg_match($regexNumber, $_POST["emploi"])) {
        $errorMessages["emploi"] = "veuillez saisir un numéro valide";
    }
    if (empty($_POST["emploi"])) {
        $errorMessages["emploi"] = "veuillez saisir votre numéro pole emploi";
    }
}
if (isset($_POST["badge"])) {
    if (!preg_match($regexNumber, $_POST["badge"])) {
        $errorMessages["badge"] = "veuillez saisir un nombre de badge valide";
    }
    if (empty($_POST["badge"])) {
        $errorMessages["badge"] = "veuillez saisir votre nombre de badge";
    }
}
if (isset($_POST["cademy"])) {
    if (!filter_var($_POST["cademy"], FILTER_VALIDATE_URL)) {
        $errorMessages["cademy"] = "veuillez saisir un url valide";
    }
    if (empty($_POST["cademy"])) {
        $errorMessages["cademy"] = "veuillez saisir votre lien codecademy";
    }
}
if (isset($_POST["super"])) {
    if (!htmlspecialchars($_POST["super"])) {
        $errorMessages["super"] = "veuillez saisir un texte valide";
    }
    if (empty($_POST["super"])) {
        $errorMessages["super"] = "veuillez saisir votre texte";
    }
}
if (isset($_POST["hack"])) {
    if (!htmlspecialchars($_POST["hack"])) {
        $errorMessages["hack"] = "veuillez saisir un texte valide";
    }
    if (empty($_POST["hack"])) {
        $errorMessages["hack"] = "veuillez saisir votre texte";
    }
}
if (isset($_POST["xp"])) {
    if (!htmlspecialchars($_POST["xp"])) {
        $errorMessages["xp"] = "veuillez saisir un texte valide";
    }
    if (empty($_POST["xp"])) {
        $errorMessages["xp"] = "veuillez saisir votre texte";
    }
}
