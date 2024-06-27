<?php
session_start();
require("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_review_id"])) {
    $review_id = $_POST["delete_review_id"];
    $delete_sql = "DELETE FROM recenzje WHERE id = $review_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<p>Komentarz został usunięty.</p>";
    } else {
        echo "<p>Błąd przy usuwaniu komentarza: " . $conn->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="stylewarhammer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Admin.js"></script>
    <link rel="icon" type="image/x-icon" href="Sigmarite_Icon.ico">
    <style>
    body {
            background-image: url('TłoAdmin.png'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center; 
            background-attachment: fixed; 
            margin: 0;
            padding: 0;
            color: #333; 
        }
   </style>
</head>
<body>
    <div class="navbar">
       <div class="logo">
        <img src="logo.png" width="200" height="43" >
        </div>
        <a href="Strona Główna Warhammer.php">Strona Główna</a>
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

    <select id="opcjeAdmina" name="opcjeAdmina" onchange="przekieruj()">
        <option value="adminPanel.php">Dodaj nową Kategorie</option>
        <option value="evantForm.php">Dodaj nowe Wydarzenie</option>
        <option value="deleteEventForm.php">Usuń/edytuj Wydarzenie</option>
        <option value="commentForm.php">Komentarze</option>
    </select>

    <div class="com-container">
    <?php
    $sql = "SELECT a.id AS idArtykulu, a.tytul, r.id AS idRecenzji, r.nick, r.tresc AS trescRecenzji, r.data 
            FROM artykuly a 
            LEFT JOIN recenzje r ON a.id = r.idArtykulu 
            ORDER BY a.id, r.data";
    $result = $conn->query($sql);
    $currentArticleId = 0;

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($currentArticleId != $row["idArtykulu"]) {
                if ($currentArticleId != 0) {
                    echo "</div></div>"; 
                }
                $currentArticleId = $row["idArtykulu"];
                echo "<div class='artykul'>";
                echo "<h2>{$row['tytul']}</h2>";
                echo "<div class='recenzjeBlok'><h3>Recenzje</h3>";
            }
            if ($row['idRecenzji']) {
                echo "<div class='recenzja'>";
                echo "<p><strong>{$row['nick']}</strong> - {$row['trescRecenzji']} <small>({$row['data']})</small></p>";
                echo "<form method='post' action=''>
                            <input type='hidden' name='delete_review_id' value='{$row['idRecenzji']}'>
                            <button class='btn' type='submit'><i class='fa fa-trash'></i></button>
                        </form>";
                echo "</div>";
            }
        }
        echo "</div></div>";
    } else {
        echo "<p>Brak artykułów.</p>";
    }
    $conn->close();
    ?>
</div>
</body>
</html>