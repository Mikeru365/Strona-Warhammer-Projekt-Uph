<?php
require("db.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ulubione dzbanki</title>
    <link rel="stylesheet" href="stylewarhammer.css">
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

    <h1>Ulubione dzbanki</h1>
    <table>
        <thead>
            <tr>
                <th>Nazwa</th>
                <th>Obrazek</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $idUzytkownika = $_SESSION["id"];
            $sql = "SELECT d.id, d.tytul, d.obrazek FROM artykuly d, ulubione u WHERE u.idArtykulu = d.id AND u.idUzytkownika = $idUzytkownika";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['tytul']}</td>";
                    echo "<td><img src='obrazki/{$row['obrazek']}' width='100px' height='100px'></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Brak ulubionych dzbanków.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>