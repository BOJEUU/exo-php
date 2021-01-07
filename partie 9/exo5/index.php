<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>
<body>
    <?php
$datetime1 = new DateTime('2021-05-01');
$datetime2 = new DateTime('2016-05-16');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%a days');?>
</body>
</html>