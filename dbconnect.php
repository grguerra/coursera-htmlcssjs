<?php

echo "Teste"

?>

 <?php
$servername = "sql10.freemysqlhosting.net";
$username = "sql10159724";
$password = "zR6wCaSNgw";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 

