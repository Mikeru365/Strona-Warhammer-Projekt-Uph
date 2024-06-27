<?php
session_start();
require("db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Moje Recenzje</title>
    <link rel="stylesheet" href="stylewarhammer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="Sigmarite_Icon.ico">
</head>

<body>

    <div class="navbar">
        <div class="logo">
            <img src="logo.png" width="200" height="43">
        </div>
        <a href="Strona Główna Warhammer.php">Strona Główne</a>
            <a href="Poczatek.php">Początek początków</a>
            <a href="Malowanie.php">Malowanie</a>
            <a href="Frakcje.php">Frakcje</a>
            <a href="Lore.php">Black Library/Lore</a>
            <a href="Wydarzenia.php">Wydarzenia</a>
            <?php if(isset($_SESSION["login"])): ?>
            <a href="myReviews.php">Moje recenzje</a>
            <?php if($_SESSION["rola"] == "admin"): ?>
            <a href="adminPanel.php">Panel Admina</a>
            <?php endif; ?>
            <a href="logout.php">Wyloguj</a>
        <?php else: ?>
            <a href="login.php" class="przyciskLogowania">Zaloguj się</a>
        <?php endif; ?>
    </div>

    <h2>Twoje recenzje:</h2>
    <?php
    $login = $_SESSION["login"];
    $sql = "SELECT r.tresc AS recenzja_tresc, a.tresc AS artykul_tresc, r.data, a.id AS idArtykulu, a.tytul FROM recenzje r, artykuly a WHERE a.id = r.idArtykulu AND r.nick = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='recenzja'>";
            echo "<p class='data'>Data: " . $row["data"] . "</p>";
            echo "<p class='artykul'>Artykuł: <a href='detailsArticle.php?id=" . $row["idArtykulu"] . "'>" . $row["tytul"] . "</a></p>";
            if (isset($row["recenzja_tresc"])) {
                echo "<p class='tresc'>Recenzja: " . $row["recenzja_tresc"] . "</p>";
            } else {
                echo "<p class='tresc'>Brak recenzji.</p>";
            }
            echo "</div>";
        }
    } else {
        echo "Brak recenzji.";
    }
    ?>
 
</body>
</html>