<?php
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $sql = "SELECT * FROM pracownicy";
    $result = $link->query($sql);

    echo "<html><body>";
    echo "<h2>Lista pracowników:</h2>";
    foreach ($result as $v) {
        echo $v["ID_PRAC"] . " " . $v["NAZWISKO"] . "<br/>";
    }
    echo "<a href='form06_post.php'>Dodaj pracownika</a>";
    echo "</body></html>";

    $result->free();
    $link->close();
?>
