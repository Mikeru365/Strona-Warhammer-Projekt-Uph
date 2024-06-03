<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="stylewarhammer.css">
    <script src="Admin.js"></script>
    <link rel="icon" type="image/x-icon" href="Sigmarite_Icon.ico">
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
            <a href="logout.php">Wyloguj</a>
        <?php else: ?>
            <a href="login.php" class="przyciskLogowania">Zaloguj się</a>
        <?php endif; ?>
    </div>

    <select id="opcjeAdmina" name="opcjeAdmina" onchange="przekieruj()">
        <option value="adminPanel.php">Dodaj nową Kategorie</option>
        <option value="evantForm.php">Dodaj nowe Wydarzenie</option>
        <option value="commentForm.php">Komentarze</option>
    </select>

    <form action="insertCategorie.php" method="post" enctype="multipart/form-data">
    <label for="nazwa">Nazwa:</label><br>
    <input type="text" id="nazwa" name="nazwa"><br><br>

    <label for="opis">Opis:</label><br>
    <textarea id="opis" name="opis"></textarea><br><br>
    
    <input type="submit" value="Dodaj Kategorie">   
    </form>

</body>
</html>