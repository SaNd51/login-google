<?php
$servername = "localhost";
$database = "db";
$user_neame = "root";
$senha = "";
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'db');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>