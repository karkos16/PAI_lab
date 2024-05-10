<?php
session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<?php
if (isset($_SESSION['error_msg'])) {
    echo "<p style='color:red'>" . $_SESSION['error_msg'] . "</p>";
    unset($_SESSION['error_msg']); // Clear error message after displaying
}
?>

<form action="form06_redirect.php" method="POST">
id_prac <input type="text" name="id_prac">
nazwisko <input type="text" name="nazwisko">
<input type="submit" value="Wstaw">
<input type="reset" value="Wyczyść">
</form>
<a href="form06_get.php">Lista pracowników</a>

</body>
</html>
