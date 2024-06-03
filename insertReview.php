<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("db.php");

    if (isset($_SESSION["login"])) {
        $login = $_SESSION["login"];
    } else {
        header("Location: login.php");
        exit;
    }

    $idArtykulu = $_POST["idArtykulu"];
    $tresc = $_POST["tresc"];

    $sql = "INSERT INTO recenzje (idArtykulu, nick, tresc) VALUES ('$idArtykulu', '$login', '$tresc')";

    if ($conn->query($sql) === TRUE) {
        header("Location: detailsArticle.php?id=$idArtykulu");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>