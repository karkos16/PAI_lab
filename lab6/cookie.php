<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <a href="index.php">Index.php</a>
    <?php
    require_once ("funkcje.php");
    setcookie("ciastko", "wartosc ciasteczka", time() + $_GET["czas"], "/");
    ?>
</body>

</html>