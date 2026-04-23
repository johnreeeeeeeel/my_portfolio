<?php
$host = "sql309.infinityfree.com";
$user = "if0_41095642";
$pass = "rfna26jN7klD";
$db   = "if0_41095642_f_johnrel_portfolio";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>