<?php
session_start();
$conn = new mysqli("localhost", "root", "", "warhammerdbv2");
$id = $_POST["id"];
$tytul = $_POST["tytul"];
$tresc = $_POST["tresc"];
$obrazek = basename($_FILES["obrazek"]["name"]);
move_uploaded_file($_FILES["obrazek"]["tmp_name"], "obrazki/$obrazek");
$sql = "UPDATE artykuly SET tytul='$tytul', tresc='$tresc', obrazek='$obrazek' WHERE id=$id";
$conn->query($sql);
$conn->close();
header("location: detailsArticle.php?id=$id");
?>