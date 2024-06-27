<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $articleId = $_POST["id"];
    $conn = new mysqli("localhost", "root", "", "warhammerdbv2");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $delete_sql = "DELETE FROM artykuly WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $articleId);

    if ($stmt->execute()) {
        echo "Artykuł został pomyślnie usunięty.";
    } else {
        echo "Błąd podczas usuwania artykułu: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
} else {
    echo "Nieprawidłowe żądanie.";
}
?>
