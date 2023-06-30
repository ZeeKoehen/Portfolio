<?php
session_start();
$genderChoice = $_SESSION['knipInfo'];

echo(implode(",", $genderChoice));

$sabine = 'Sabine';
$kees = 'Kees';
$nicole = 'Nicole';
$iris = 'Iris';
$laura = 'Laura';

if (isset($_POST['submitDatum'])) {

    $datum   = $_POST['date'];

    array_push($_SESSION['knipInfo'], $datum);
    header('Location: time.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informatie</title>
</head>
<body>
<h1>Datum</h1>
<p>Kies hier welke dag u geknipt wilt worden.</p>
<form action="" method="post">
    <?php if ($_SESSION['knipInfo'][2] == $sabine) { ?>
    <input type="date" id="date" name="date" value="Datum" required>
    <label for="date">Kies een datum die valt op Maandag, Donderdag of Vrijdag.</label> <br>

    <?php } elseif ($_SESSION['knipInfo'][2] == $kees) { ?>
    <input type="date" id="date" name="date" value="Datum" required>
    <label for="date">Kies een datum die valt op Dinsdag, Woensdag, Vrijdag of Zaterdag.</label> <br>

    <?php } elseif ($_SESSION['knipInfo'][2] == $nicole) { ?>
    <input type="date" id="date" name="date" value="Datum" required>
    <label for="date">Kies een datum die valt op Dinsdag, Woensdag, Donderdag, Vrijdag of Zaterdag.</label> <br>

    <?php } elseif ($_SESSION['knipInfo'][2] == $iris) { ?>
    <input type="date" id="date" name="date" value="Datum" required>
    <label for="date">Kies een datum die valt op Maandag, Dinsdag, Woensdag of Donderdag</label> <br>

    <?php } elseif ($_SESSION['knipInfo'][2] == $laura) { ?>
    <input type="radio" id="date1" name="date" value="Maandag" required>
    <label for="date1">Kies een datum die valt op Maandag, Donderdag, Vrijdag of Zaterdag</label> <br>
    <?php } ?>
    <div>
        <br>
        <input type="submit" name="submitDatum" value="Volgende">
    </div>
</form>
</body>
<footer>
    <br>
    <a href="javascript:history.go(-1)">Ga terug</a>
</footer>
</html>