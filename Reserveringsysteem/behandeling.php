<?php
session_start();
$genderChoice = $_SESSION['knipInfo'];

echo(implode(",", $genderChoice));

$woman = 'Woman';
$man = 'Man';
$kids = 'Kids';

if (isset($_POST['knipType'])) {

    $knipType   = $_POST['type'];

    array_push($_SESSION['knipInfo'], $knipType);
    header('Location: kapperKeuze.php');
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
<h1>Behandeling</h1>
<p>Kies hier hoe u geknipt wilt worden.</p>
<form action="" method="post">
    <?php if ($_SESSION['knipInfo'][0] == $woman) { ?>
    <input type="radio" id="wHair1" name="type" value="Knippen & Drogen dame €38,35" required>
    <label for="wHair1">Knippen & Drogen dame €38,35</label> <br>
    <input type="radio" id="wHair2" name="type" value="Knippen & Drogen lang haar €38,35" required>
    <label for="wHair2">Knippen & Drogen lang haar €38,35</label> <br>
    <input type="radio" id="wHair3" name="type" value="Studenten tarief dame €32,90" required>
    <label for="wHair3">Studenten tarief dame €32,90</label> <br>
    <input type="radio" id="wHair4" name="type" value="Wassen, Knippen & Föhnen/watergolf €60,30" required>
    <label for="wHair4">Wassen, Knippen & Föhnen/watergolf €60,30</label> <br>
    <input type="radio" id="wHair5" name="type" value="Beach Wave- knippen €97,50" required>
    <label for="wHair5">Beach Wave- knippen €97,50</label> <br>

    <?php } elseif ($_SESSION['knipInfo'][0] == $man) { ?>
    <input type="radio" id="mHair1" name="type" value="Knippen heer €38,35" required>
    <label for="mHair1">Knippen heer €38,35</label> <br>
    <input type="radio" id="mHair2" name="type" value="Knippen heer & Baard modelleren €46,35" required>
    <label for="mHair2">Knippen heer & Baard modelleren €46,35</label> <br>
    <input type="radio" id="mHair3" name="type" value="Service knippen €21,65" required>
    <label for="mHair3">Service knippen €21,65</label> <br>
    <input type="radio" id="mHair4" name="type" value="Studenten tarief heer €32,90" required>
    <label for="mHair4">Studenten tarief heer €32,90</label> <br>
    <input type="radio" id="mHair5" name="type" value="Tondeuse coupe €23,45" required>
    <label for="mHair5">Tondeuse coupe €23,45</label> <br>

    <?php } elseif ($_SESSION['knipInfo'][0] == $kids) { ?>
    <input type="radio" id="kHair1" name="type" value="Knippen Kind 1 t/m 11 €22,60" required>
    <label for="kHair1">Knippen Kind 1 t/m 11 €22,60</label> <br>
    <input type="radio" id="kHair2" name="type" value="Knippen Kind 12 t/m 14 €30,40" required>
    <label for="kHair2">Knippen Kind 12 t/m 14 €30,40</label> <br>
    <?php } ?>
    <div>
        <br>
        <input type="submit" name="knipType" value="Volgende">
    </div>
</form>
</body>
<footer>
    <br>
    <a href="javascript:history.go(-1)">Ga terug</a>
</footer>
</html>