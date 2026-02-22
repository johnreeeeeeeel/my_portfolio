<?php
require '../config/db_connection.php';
require_once '../config/encryption.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}

// Get current user's ID (assuming users table has 'id' column)
$username = $_SESSION['username'];
$user_result = $conn->query("SELECT id FROM users WHERE username = '$username'");
if ($user_result->num_rows !== 1) {
    die('User not found.');
}
$user = $user_result->fetch_assoc();
$current_user_id = $user['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id      = !empty($_POST['id']) ? (int) $_POST['id'] : null;
    $title   = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');

    if ($title === '' || $content === '') {
        die('Title and content are required.');
    }

    require_once '../config/encryption.php';

    // Encrypt before saving
    $encrypted_title   = encrypt($title);
    $encrypted_content = encrypt($content);

    if ($id) {
        $stmt = $conn->prepare("
            UPDATE notes 
            SET title = ?, content = ? 
            WHERE id = ? AND user_id = ?
        ");
        $stmt->bind_param('ssii', $encrypted_title, $encrypted_content, $id, $current_user_id);
    } else {
        $stmt = $conn->prepare("
            INSERT INTO notes (title, content, user_id) 
            VALUES (?, ?, ?)
        ");
        $stmt->bind_param('ssi', $encrypted_title, $encrypted_content, $current_user_id);
    }

    if (!$stmt->execute()) {
        die('Database error: ' . $stmt->error);
    }

    $stmt->close();

    header('Location: ../pages/notes.php');
    exit();
}
