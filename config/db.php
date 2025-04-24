<?php
$host = "localhost";
$user = "root";  
$pass = "";  
$dbname = "sports_booking";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Конекцијата не успеа: " . $conn->connect_error);
}
?>
