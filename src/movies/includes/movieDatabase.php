<?php
$servername = "db1";
$username = "root";
$password = "admin";
$dbname = "moviedb";

$conn = mysqli_connect($servername, $username, $password,$dbname );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>