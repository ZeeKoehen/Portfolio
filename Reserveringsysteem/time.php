<?php
session_start();
$genderChoice = $_SESSION['knipInfo'];

echo(implode(",", $genderChoice));

if (isset($_POST['submitDatum'])) {

    $time   = $_POST['knipTijd'];

    array_push($_SESSION['knipInfo'], $time);
    header('Location: LaatsteInfo.php');
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
<h1>Tijd</h1>
<p>Kies hier hoe laat u geknipt wilt worden.</p>
<form action="" method="post">
    <input type="time" id="knipTijd" name="knipTijd" min="08:30" max="17:00" required>
    <label for="knipTijd">Kies een tijd tussen 8:30 en 17:00</label>
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
