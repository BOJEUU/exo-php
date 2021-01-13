<?php
$month = "";
$year = "";
$tableDays = [1 => "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$tableMonth = array(
    1 => "Janvier",
    2 => "Février",
    3 => "Mars",
    4 => "Avril",
    5 => "Mai",
    6 => "Juin",
    7 => "Juillet",
    8 => "Août",
    9 => "Septembre",
    10 => "Octobre",
    11 => "Novembre",
    12 => "Décembre",
);
if (isset($_POST["month"])) {
    $month = $_POST["month"];
}
if (isset($_POST["year"])) {
    $year = $_POST["year"];
}
if (isset($_POST["month"]) && isset($_POST["year"])) {
    $datetime1 = new DateTime();
    $datetime1->setDate($year, $month, $datetime1->format("d"));
    $dateTimeDay = new DateTime();
    $dateTimeDay->setDate($year, $month, $datetime1->format("d"));
    $dateTimeDay->modify("first day of this month");
}
?>
<!doctype html>
<html lang="fr">

<head>
    <title>tp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class=" d-flex justify-content-center m-3">
        <form method="post" action="index.php">
            <select name="month">
                <option selected disabled>choisir mois</option>
                <?php foreach ($tableMonth as $key => $value) { ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php } ?>
            </select>
            <select name="year">
                <option selected disabled>choisir année</option>
                <?php for ($annee = 1980; $annee <= 2077; $annee++) { ?>
                    <option><?= $annee ?></option>
                <?php } ?>
            </select>
            <div class="d-flex justify-content-center">
                <p><input type="submit" value="envoyer"></p>
            </div>
        </form>
        </div>
        <div class="d-flex justify-content-center">
            <?php if (isset($_POST["month"]) && isset($_POST["year"])) { ?>
                <p>tu as choisis la date <?= $datetime1->format("d/m/Y") ?></p>
            <?php } ?>
        </div>
    
    <div class="m-1">
        <?php
        if (isset($_POST["month"]) && isset($_POST["year"])) { ?>
            <div class="container">
                <div class="row m-0 p-0 text-center">
                    <?php
                    foreach ($tableDays as $key => $value) {
                    ?>
                        <div class="col-sm">
                            <?= $value ?>

                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="row seven-cols m-0">
                    <?php
                    $dayInMonth = cal_days_in_month(CAL_GREGORIAN, $_POST["month"], $_POST["year"]);
                    $dateActualDay = 1;
                    for ($i = 1; $i <= 42; $i++) {
                        if ($i >= $dateTimeDay->format("N") && $dateActualDay <= $dayInMonth) {


                    ?>
                            <div class="card cardd col-md-1 bg-info">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $dateActualDay ?></h5>
                                </div>
                            </div>
                        <?php
                            $dateActualDay++;
                        } else {
                        ?>
                            <div class="card cardd col-md-1">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
                </div>


            </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>