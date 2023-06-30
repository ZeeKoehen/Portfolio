<?php
session_start();
$genderChoice = $_SESSION['knipInfo'];

echo(implode(",", $genderChoice));

if (isset($_POST['submitKapper'])) {

    $kapper   = $_POST['kapper'];

    array_push($_SESSION['knipInfo'], $kapper);
    header('Location: datum.php');
}

?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kapper</title>
    </head>
    <h1>Door wie wilt u geknipt worden?</h1>
    <body>
    <p>Selecteer één van de onderstaande opties.</p>

    <form action="" method="post">
        <input type="radio" id="Kapper1" name="kapper" value="Sabine" required>
        <label for="Sabine">Sabine</label> <br>
        <input type="radio" id="Kapper2" name="kapper" value="Kees" required>
        <label for="Kees">Kees</label> <br>
        <input type="radio" id="Kapper3" name="kapper" value="Nicole" required>
        <label for="Nicole">Nicole</label> <br>
        <input type="radio" id="Kapper4" name="kapper" value="Iris" required>
        <label for="Iris">Iris</label> <br>
        <input type="radio" id="Kapper5" name="kapper" value="Laura" required>
        <label for="Laura">Laura</label>
        <div>
            <br>
            <input type="submit" name="submitKapper" value="Volgende">
        </div>
    </form>
    </body>
    <footer>
        <br>
        <a href="javascript:history.go(-1)">Ga terug</a>
    </footer>
    </html>