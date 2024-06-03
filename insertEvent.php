<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tytul = $_POST["tytul"];
    $tresc = $_POST["tresc"];
    $idKategorii = $_POST["idKategorii"];
    
    $obrazek = basename($_FILES["obrazek"]["name"]);
    move_uploaded_file($_FILES["obrazek"]["tmp_name"], "obrazki/$obrazek");
    
    $conn = new mysqli("localhost", "root", "", "warhammerdbv2");
    $sql = "INSERT INTO artykuly (tytul, tresc, obrazek, idKategorii) VALUES ('$tytul', '$tresc', '$obrazek', $idKategorii)";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: Wydarzenia.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>