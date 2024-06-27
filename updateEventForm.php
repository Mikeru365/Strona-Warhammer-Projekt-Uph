<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="stylewarhammer.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="Sigmarite_Icon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="Admin.js"></script>
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
            <img src="logo.png" width="200" height="43" alt="Logo">
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

    <div class="form-container">
        <h1>Edytuj Wydarzenie</h1>
 
        <?php
            $conn = new mysqli("localhost", "root", "", "warhammerdbv2");
            $id = $_GET["id"];
            $sql = "SELECT id, tytul, tresc FROM artykuly WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result->fetch_object();
            $conn->close();
        ?>

        <form action="updateEvent.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $row->id ?>">
            <div>
                <label for="tytul">Tytuł:</label>
                <input type="text" id="tytul" name="tytul" value="<?= $row->tytul ?>"><br><br>
            </div>
            <div>
                <label for="tresc">Treść:</label>
                <textarea id="tresc" name="tresc" cols="30" rows="10"><?= $row->tresc ?></textarea><br><br>
            </div>
            <div>
                <label for="obrazek">Zdjęcie: </label>
                <input type="file" id="obrazek" name="obrazek"><br><br>
            </div>

            <input type="submit" value="Zapisz zmiany">
        </form>

        <a href="deleteEventForm.php">Anuluj</a>
    </div>
</body>
</html>