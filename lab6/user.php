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

        img {
            width: 200px;
            height: 200px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <a href="index.php">Index.php</a>
    <?php
    require_once ("funkcje.php");
    if (isset($_SESSION["zalogowany"]) && $_SESSION["zalogowany"] == 1) {
        echo "<div>" . $_SESSION["zalogowanyImie"] . "</div>";
    } else {
        header("Location: index.php");
    }
    ?>

    <form action="index.php" method="post">
        <fieldset>
            <legend>Wyloguj</legend>
            <input type="submit" name="wyloguj" value="wyloguj">
        </fieldset>
    </form>

    <form action="user.php" method="post" , enctype="multipart/form-data">
        <fieldset>
            <legend>Dodaj zdjecie</legend>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="upload_img">
        </fieldset>
    </form>

    <?php
    $currentDir = getcwd();
    $uploadDirectory = "/zdjecia/";
    $fileName = "obrazek.jpg";
    $uploadPath = $currentDir . $uploadDirectory . $fileName;
    if (isset($_POST["upload_img"])) {
        $fileSize = $_FILES["fileToUpload"]["size"];
        $fileTmpName = $_FILES["fileToUpload"]["tmp_name"];
        $fileType = $_FILES["fileToUpload"]["type"];
        if ($fileSize != 0 && ($fileType == "image/png" || $fileType == "image/jpeg")) {
            if (move_uploaded_file($fileTmpName, $uploadPath)) {
            } else {
                echo "<div>Upload failed</div>";
            }
        } else {
            echo "<div>Upload failed</div>";
        }
    }
    if (file_exists($uploadPath)) {
        echo "<img src='" . $uploadDirectory . $fileName . "' alt='Obrazek'>";
    } else {
        echo "<div>Obrazek</div>";
    }
    ?>



</body>

</html>