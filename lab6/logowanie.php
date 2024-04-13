<?php
    session_start();
    require("funkcje.php");
    if(isset($_POST['zaloguj'])) {
        $_POST['login'] = test_input($_POST['login']);
        $_POST['haslo'] = test_input($_POST['haslo']);
        if($_POST['login'] == $osoba1->login && $_POST['haslo'] == $osoba1->haslo) {
            $_SESSION['zalogowanyImie'] = $osoba1->imieNazwisko;
            $_SESSION['zalogowany'] = 1;
            header("Location: user.php");
        } else if($_POST['login'] == $osoba2->login && $_POST['haslo'] == $osoba2->haslo) {
            $_SESSION['zalogowanyImie'] = $osoba2->imieNazwisko;
            $_SESSION['zalogowany'] = 1;
            header("Location: user.php");
        } else {
            header("Location: index.php");
        }
    }
?>