<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zarządzanie Artykułami - Panel Admina</title>
    <link rel="stylesheet" href="stylewarhammer.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="Sigmarite_Icon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

    <h1>Usuń Wydarzenie</h1>

    <div class="article-list">
        <?php
        $conn = new mysqli("localhost", "root", "", "warhammerdbv2");
        $sql = "SELECT id, tytul FROM artykuly";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='article'>";
                echo "<h2>{$row['tytul']}</h2>";
                echo"<div class='article-btn'>";
                echo "<button class='btn-delete' data-id='{$row['id']}'><i class='fa fa-trash'></i> Usuń</button>";
                echo "<p><a href='updateEventForm.php?id={$row['id']}'><i class='fa fa-pencil'></i>Edytuj</a></p>";
                echo "</div></div>";
            }
        } else {
            echo "<p>Brak artykułów do wyświetlenia.</p>";
        }
        ?>
    </div>

    <script>
    $(document).ready(function() {
        $(".btn-delete").click(function() {
            var articleId = $(this).data("id");

            if (confirm("Czy na pewno chcesz usunąć ten artykuł?")) {
                $.ajax({
                    type: "POST",
                    url: "deleteEvent.php",
                    data: { id: articleId },
                    success: function(response) {
                        alert(response); 
                        location.reload(); 
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: " + status + " - " + error);
                        alert("Wystąpił błąd podczas usuwania artykułu.");
                    }
                });
            }
        });
    });
    </script>

    <script src="Admin.js"></script>
</body>
</html>

<?php
$conn->close();
?>
