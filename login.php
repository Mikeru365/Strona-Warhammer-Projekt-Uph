<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Logowanie</title>
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
            <a href="logout.php">Wyloguj</a>
        <?php else: ?>
            <a href="login.php" class="przyciskLogowania">Zaloguj się</a>
        <?php endif; ?>
    </div>
 <div class=container>
    <?php
 require('db.php');
 session_start();
 if (isset($_POST["login"])) {
 $login = $_POST["login"];
 $haslo = $_POST["haslo"];

 $sql = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='" . md5($haslo) ."'";
 $result = $conn->query($sql);
 if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION["login"] = $login;
    $_SESSION["rola"] = $row["rola"];

    if ($_SESSION["rola"] == "admin") {
        header("Location: adminPanel.php");
        exit();
    } else {
        header("Location: Strona Główna Warhammer.php");
        exit();
    }
 } else {
 echo "<div class='form'>
 <h3>Nieprawidłowy login lub hasło.</h3><br/>
 <p class='link'>Ponów próbę <a href='login.php'>logowania</a>.</p>
 </div>";
 }
 } else {
?>
 <form class="form" method="post" name="login">
 <h1 class="login-title">Logowanie</h1>
 <input type="text" class="login-input" name="login" placeholder="Login"
autofocus="true"/>
 <input type="password" class="login-input" name="haslo" placeholder="Hasło"/>
 <input type="submit" value="Zaloguj" name="submit" class="login-button"/>
 <p class="link"><a href="registration.php">Zarejestruj się</a></p>
 </form>
<?php
 }
?>
</div>

</body>
