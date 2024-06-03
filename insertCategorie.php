<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwa = $_POST["nazwa"];
    $opis = $_POST["opis"];
    
    $conn = new mysqli("localhost", "root", "", "warhammerdbv2");
    $sql = "INSERT INTO kategorie (nazwa, opis) VALUES ('$nazwa', '$opis')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: Wydarzenia.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>