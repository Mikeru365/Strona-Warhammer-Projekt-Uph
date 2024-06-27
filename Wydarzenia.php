<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Wydarzenia</title>
    <link rel="stylesheet" href="stylewarhammer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

<form>
        <p>
            <input type="text" name="fraza">
            <input type="submit" value="Wyszukaj">
        </p>
</form>

<?php
    $conn = new mysqli("localhost", "root", "", "warhammerdbv2");
    $sql = "SELECT id, nazwa FROM kategorie";
    $result = $conn->query($sql);
    echo "<div class='kategorie'>";
    echo "<a href='wydarzenia.php'>Wszystkie</a>";
    while ($row = $result->fetch_object()) {
        echo "<a href='wydarzenia.php?idKat={$row->id}'>{$row->nazwa}</a>";
    }
    echo "</div>";
    ?>

  <div class="tloWydarzenia">
    <h1>Wydarzenia</h1>
     <div class="blokWydarzenia">

        <?php
    $sql = "SELECT id, tytul, obrazek FROM artykuly";
    if (isset($_GET["idKat"])) {
        $idKat = $_GET["idKat"];
        $sql .= " WHERE idKategorii = $idKat";
    } elseif (isset($_GET["fraza"])) {
        $fraza = $_GET["fraza"];
        $sql .= " WHERE tytul LIKE '%$fraza%'";
    }
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table>";
        while($row = $result->fetch_object()) {
            echo "<tr>";
            echo "<td><img src='obrazki/{$row->obrazek}' class='obrazkiWydarzenia'></td>";
            echo "<td><a href='detailsArticle.php?id={$row->id}'>{$row->tytul}</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Brak wyników.";
    }
    ?>

     </div>

  </div>

</body>