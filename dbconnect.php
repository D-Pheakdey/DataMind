<?php
$servername = "192.168.92.132";
$username = "pheakdey_user";
$password = "StrongPassword123!";
$database = "information"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully!";

?>
