<?php
$mysqli = new mysqli("85.10.205.173:3306", "grguerra@localhost", "testdb1902", "mytestdb190217");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("85.10.205.173", "grguerra@localhost", "testdb1902", "mytestdb190217", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>


