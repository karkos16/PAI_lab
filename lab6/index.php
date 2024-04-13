<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
    <style>
        fieldset {
            background-color: #eeeeee;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
        }

        input {
            margin: 5px;
        }
    </style>
</head>

<body>
    <h1>Nasz system</h1>

    <?php
    if (isset($_POST['wyloguj'])) {
        $_SESSION['zalogowany'] = 0;
    }
    ?>

    <a href="user.php">User.php</a>
    <form action="logowanie.php" method="post">
        <fieldset>
            <legend>Logowanie</legend>
            <div>
                <label for="login">Login:</label>
                <input type="text" name="login">
            </div>
            <div>
                <label for="haslo">Haslo:</label>
                <input type="password" name="haslo">
            </div>
            <div>
                <input type="submit" name="zaloguj" value="zaloguj">
            </div>
        </fieldset>
    </form>

    <form action="cookie.php" method="get">
        <fieldset>
            <legend>Ustawienie ciasteczka na określony czas w sekundach</legend>
            <div>
                <label for="cookie">czas</label>
                <input type="number" name="czas">
            </div>
            <input type="submit" name="cookie" value="utworzCookie">
        </fieldset>
    </form>

    <?php
    if (isset($_COOKIE['ciastko'])) {
        echo "<div>" . $_COOKIE['ciastko'] . "</div>";
    }
    ?>
</body>

</html>