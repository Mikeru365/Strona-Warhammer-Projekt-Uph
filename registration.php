<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Rejestracja</title>
    <link rel="stylesheet" href="stylewarhammer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="Sigmarite_Icon.ico">
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

    <div class=container>
    <?php
 require("db.php");
 if (isset($_POST["login"])) {
 $login = $_POST["login"];
 $haslo = $_POST["haslo"];
 $email = $_POST["email"];

 $sql = "INSERT INTO uzytkownicy (login, haslo, email) VALUES ('$login', '" . md5($haslo) ."', '$email')";
 $result = $conn->query($sql);
 if ($result) {
 echo "<div class='form'>
 <h3>Zostałeś pomyślnie zarejestrowany.</h3><br/>
 <p class='link'>Kliknij tutaj, aby się <a href='login.php'>zalogować</a></p>
 </div>";
 } else {
 echo "<div class='form'>
 <h3>Nie wypełniłeś wymaganych pól.</h3><br/>
 <p class='link'>Kliknij tutaj, aby ponowić próbę <a
href='registration.php'>rejestracji</a>.</p>
 </div>";
 }
 } else {
?>
 <form class="form" action="" method="post">
 <h1 class="login-title">Rejestracja</h1>
 <input type="text" class="login-input" name="login" placeholder="Login" required/>
 <input type="password" class="login-input" name="haslo" placeholder="Hasło"
required/>
 <input type="text" class="login-input" name="email" placeholder="Adres email"
required/>
 <input type="submit" name="submit" value="Zarejestruj się" class="login-button">
 <p class="link"><a href="login.php">Zaloguj się</a></p>
 </form>
<?php
 }
?>
</div>

</body>