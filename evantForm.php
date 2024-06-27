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


        .form-container textarea {
            height: 400px;
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

    <h2>Dodaj Nowe Wydarzenie</h2>
<div class="form-container">

    <form action="insertEvent.php" method="post" enctype="multipart/form-data">
    <label for="tytul">Tytuł:</label>
    <input type="text" id="tytul" name="tytul"><br>

    <p>Kategoria: 
            <select name="idKategorii">
                <?php
                $conn = new mysqli("localhost", "root", "", "warhammerdbv2");
                $sql = "SELECT id, nazwa FROM kategorie ORDER BY nazwa";
                $result = $conn->query($sql);
                while($row = $result->fetch_object()) {
                    echo "<option value='{$row->id}'>{$row->nazwa}</option>";
                }
                $conn->close();
                ?>
            </select>
    </p>

        <br>
    
    <label for="tresc">Tresc:</label>
    <textarea id="tresc" name="tresc"></textarea><br>
    
    <label for="obrazek">Obrazek:</label>
    <input type="file" id="obrazek" name="obrazek"><br>
    
    <input type="submit" value="Dodaj Wydarzenie">
   </form>
</div>
</body>
</html>