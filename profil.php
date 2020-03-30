<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <body>
    <p>Vítej <?php $_SESSION["user"] ?></p>

    <b>Jméno:</b>
    <?php echo $_SESSION["user"]?>
    <br>
    <b>Mail:</b>
    <?php echo $_SESSION["mail"]?>
    <br>
    <a href="smazat.php">Zrušit účet</a>
    <br>
    <a href="odhlasit.php">Odhlásit</a>



</body>
</html>