<?php
/** @var mysqli $db */
//connect with database
require_once("config.php");

session_start();
$genderChoice = $_SESSION['knipInfo'];

echo(implode(",", $genderChoice));

//set base values for all variables
$name = '';
$email = '';
$type = $_SESSION['knipInfo'][1];
$barber = $_SESSION['knipInfo'][2];
$date = $_SESSION['knipInfo'][3];
$time = $_SESSION['knipInfo'][4];

////if the submit button gets hit the gender becomes whatever gender was chosen
//if (isset($_POST['submit'])) {
//    $gender = $_POST['gender'];
//}
////if the submit (other) button gets hit the gender becomes whatever the gender was
//if (isset($_POST['other'])) {
//    $gender = $_POST['gender'];
//}

//if the submit (other) button gets hit all the variables get filled with whatever was chosen in the form
if (isset($_POST['other'])) {
    $name   = mysqli_escape_string($db, $_POST['name']);
    $email  = mysqli_escape_string($db, $_POST['email']);
    $type   = mysqli_escape_string($db, $_POST['type']);
    $barber = mysqli_escape_string($db, $_POST['barber']);
    $date   = mysqli_escape_string($db, $_POST['date']);
    $time   = mysqli_escape_string($db, $_POST['time']);

    //connect with the errors page
    require_once("Errors.php");

    //if there are no errors continue otherwise display where the empty input was missing
    if (empty($errors)) {
        //after everything is filled this part of the code will insert the data in to the database
        $sql = "INSERT INTO reservations (id, name, email, type, barber, date, time)
                VALUES ('', '$name', '$email', '$type', '$barber', '$date', '$time')";

        //make the result variable the query function
        $result = mysqli_query($db, $sql);

        //if result worked go to conformatie.php
        if ($result) {
            session_destroy();
            header('Location: Conformatie.php');
            exit;
        }
    }
    //close connection with database
    mysqli_close($db);
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
<p>Vul uw naam en e-mail in en kijk of de ingevulde informatie klopt.</p>
<form action="" method="post">
    <label for="name">Naam</label>
    <input type="text" id="name" name="name" value="<?= $name ?>">
    <span><?php echo isset($errors['name']) ? $errors['name'] : '' ?></span> <br>
    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" value="<?= $email ?>">
    <span><?php echo isset($errors['email']) ? $errors['email'] : '' ?></span> <br>
    <label for="type">Behandeling</label>
    <input type="text" id="type" name="type" value="<?= $type ?>"> <br>
    <label for="barber">Kapper/Kapster</label>
    <input type="text" id="barber" name="barber" value="<?= $barber ?>"> <br>
    <label for="date">Datum</label>
    <input type="date" name="date" id="date" value="<?= $date ?>">
    <span><?php echo isset($errors['date']) ? $errors['date'] : '' ?></span> <br>
    <label for="time">Tijd</label>
    <input type="time" name="time" id="time" value="<?= $time ?>">
    <span><?php echo isset($errors['time']) ? $errors['time'] : '' ?></span> <br>

    <div>
        <br>
        <input type="submit" name="other" value="Afspraak vaststellen">
    </div>
</form>
</body>
<footer>
    <br>
    <p>Klopt de informatie niet, ga hier terug.</p>
    <a href="javascript:history.go(-6)">Ga terug</a>
</footer>
</html>
