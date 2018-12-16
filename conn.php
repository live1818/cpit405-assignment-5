<?php
$servername = "localhost";
$username = "live1818";
$password = "";
$database = "Gimage";
$conn = new mysqli($servername, $username, $password, $database);
// check the connection
if ($conn->connect_error) {
    
    echo "Failed to connect to database!";
    die("Connection failed: ");
}
?>
