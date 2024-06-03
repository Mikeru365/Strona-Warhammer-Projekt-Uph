<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Artykuł</title>
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
             <a href="Poczatek.html">Początek początków</a>
             <a href="Malowanie.html">Malowanie</a>
             <a href="Frakcje.html">Frakcje</a>
             <a href="Lore.html">Black Library/Lore</a>
             <a href="Wydarzenia.php">Wydarzenia</a>
             <?php if(isset($_SESSION["login"])): ?>
            <a href="myReviews.php">Moje recenzje</a>
            <a href="logout.php">Wyloguj</a>
        <?php else: ?>
            <a href="login.php" class="przyciskLogowania">Zaloguj się</a>
        <?php endif; ?>
     </div>

<div class="artykul">
     <?php
    $id = $_GET["id"];
    $conn = new mysqli("localhost", "root", "", "warhammerdbv2");
    
    $sql = "SELECT a.tytul, obrazek, a.tresc FROM artykuly a , kategorie k WHERE a.id=$id AND idKategorii=k.id";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
    
    echo "<div class='artykul'>";
    echo "<h1>{$row->tytul}</h1>";
    echo "<img src='obrazki/{$row->obrazek}' alt='{$row->tytul}'>";
    echo "<p>" . nl2br($row->tresc) . "</p>";
    echo "</div>";
    ?>
</div>
    <hr>
<div class="dodajRecenzjeBlok">
    <h2>Dodaj recenzję</h2>
    <form action="insertReview.php" method="post">
        <input type="hidden" name="idArtykulu" value="<?php echo $id; ?>">
        <p>Recenzja:<br>
            <textarea name="tresc" maxlength="150"></textarea>
        </p>
        <br>
        <input type="submit" value="Dodaj recenzję" id="przyciskRecenzja">
    </form>
</div>

<div class="recenzjeBlok">
    <h2>Recenzje</h2>
    <?php
    $sql = "SELECT nick, tresc, data FROM recenzje WHERE idartykulu=$id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_object()) {
            echo "<p><strong>{$row->nick}</strong> {$row->tresc}</p>";
        }
    } else {
        echo "Brak recenzji.";
    }
    $conn->close();
    ?>
</div>    
    
    <a href="Wydarzenia.php">Powrót Do Artykułów</a>
 
</body>