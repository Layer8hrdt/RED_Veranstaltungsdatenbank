<?php
// Anmeldedaten für die Datenbank
$servername = "localhost";
$username = "root";
$password = "";
$database = "red_db";

// Verbindung mit Datenbank herstellen
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>