<?php
require '../config/db_connection.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

$username = $_SESSION['username'];
$user_result = $conn->query("SELECT id FROM users WHERE username = '$username'");
if ($user_result->num_rows !== 1) {
    die("User not found.");
}
$user = $user_result->fetch_assoc();
$current_user_id = $user['id'];

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM notes WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $id, $current_user_id);
    $stmt->execute();
    $stmt->close();
}

header("Location: ../pages/notes.php");
exit;