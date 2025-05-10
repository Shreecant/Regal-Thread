<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "fashion";
$port = 3307;

$con = mysqli_connect($server, $user, $password, $db, $port);

// Check connection
if (!$con) {
    die("❌ Database connection failed: " . mysqli_connect_error());
}
?>
