<?php
 $conn = new mysqli("localhost", "root", "", "warhammerdbv2");
 if ($conn->connect_error) {
 exit("Connection failed: " . $conn->connect_error);
 }
?>