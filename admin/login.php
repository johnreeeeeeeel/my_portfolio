<?php
session_start();
require '../config/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['admin'] = true;
        header("Location: add-project.php");
        exit;
    } else {
        $error = "Invalid login";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>F. Johnrel - Portfolio</title> 

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/css/admin_styles.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body class="container-fluid">

    <div class="menuToggleButtonContainer">   
        <i class="fa-solid fa-bars menuToggleButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarMobile"></i>
    </div>

    <!-- Mobile Sidebar -->
    <div class="offcanvas offcanvas-start" id="sidebarMobile">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <img class="profile-img" src="../assets/images/profile/profile.png" alt="Profile Image">

            <div class="profile-info">
                <h5>Feby Johnrel R. Malbino</h5>
                <small>Web Developer & Designer</small>
            </div>

            <ul class="nav nav-tabs">
                <li class="nav-item"> 
                    <a class="nav-link active" href="../index.php">
                        <i class="fa-solid fa-angle-left"></i>
                        Back
                    </a>
                </li>
            </ul>

            <div class="other-buttons">
                <button id="themeToggle" class="btn primary-btn" onclick="toggleTheme()">
                    <i class="fa-solid fa-circle-half-stroke"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Desktop Sidebar -->
    <div id="sidebarDesktop">
        <img class="profile-img" src="../assets/images/profile/profile.png" alt="Profile Image">

        <div class="profile-info">
            <h5>Feby Johnrel R. Malbino</h5>
            <small>Web Developer & Designer</small>
        </div>

        <ul class="nav nav-tabs">
            <li class="nav-item"> 
                <a class="nav-link active" href="../index.php">
                    <i class="fa-solid fa-angle-left"></i>
                    Back
                </a>
            </li>
        </ul>

        <div class="other-buttons">
            <button id="themeToggle" class="btn primary-btn" onclick="toggleTheme()">
                <i class="fa-solid fa-circle-half-stroke"></i>
            </button>
        </div>
    </div>

    <section id="section">
        <div class="tab-content">
            <div class="tab-pane active" id="login">
                <form method="POST">
                    <h1>Admin Login</h1>
                    
                    <?php if (isset($error)) echo "<p>$error</p>"; ?>
                    <input placeholder="Username" type="text" id="username" name="username" required>
                    <input placeholder="Password" type="password" id="password" name="password" required>
                    
                    <button type="submit" name="send" class="btn primary-btn">
                        <i class="fa-solid fa-paper-plane"></i>
                        Login
                    </button>
                </form>
            </div>
        </div>
    </section>

</body>

<!-- JS -->
<script src="../assets/js/scripts.js"></script>

</html>