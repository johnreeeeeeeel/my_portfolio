<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="notes.php">
        <button type="button" class="btn primary-btn">Notes</button>
    </a>
    <a href="../functions/logout.php">Logout</a>
</body>

</html>
