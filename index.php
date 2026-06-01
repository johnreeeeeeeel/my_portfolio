<html lang="en" data-bs-theme="dark">

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
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/styles.css">

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
            <img class="profile-img" src="assets/images/profile/profile.png" alt="Profile Image">

            <div class="profile-info">
                <h5>Feby Johnrel R. Malbino</h5>
                <small>Web Developer & Designer</small>
            </div>

            <div class="action-buttons">
                <a href="assets/files/resume.jpg" download="febyjohnrelmalbino_resume.jpg" class="btn primary-btn">
                    <i class="fa-solid fa-download" style="color: rgb(255, 255, 255);"></i>
                    Resume
                </a>
                <a href="assets/files/cv.jpg" download="febyjohnrelmalbino_cv.jpg" class="btn primary-btn">
                    <i class="fa-solid fa-download" style="color: rgb(255, 255, 255);"></i>
                    CV
                </a>
            </div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#projects">
                        <i class="fa-solid fa-briefcase"></i>
                        Projects
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#about">
                        <i class="fa-solid fa-user"></i>
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#contact">
                        <i class="fa-solid fa-envelope"></i>
                        Contact
                    </a>
                </li>
            </ul>

            <div class="other-buttons">
                <button id="themeToggleMobile" class="btn primary-btn" onclick="toggleTheme()">
                    <i class="fa-solid fa-circle-half-stroke"></i>
                </button>

                <button id="feedbackToggleMobile" class="btn primary-btn" disabled>
                    <i class="fa-solid fa-comment"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Desktop Sidebar -->
    <div id="sidebarDesktop">
        <img class="profile-img" src="assets/images/profile/profile.png" alt="Profile Image">

        <div class="profile-info">
            <h5>Feby Johnrel R. Malbino</h5>
            <small>Web Developer & Designer</small>
        </div>

        <div class="action-buttons">
            <a href="assets/files/resume.jpg" download="febyjohnrelmalbino_resume.jpg" class="btn primary-btn">
                <i class="fa-solid fa-download" style="color: rgb(255, 255, 255);"></i>
                Resume
            </a>
            <a href="assets/files/cv.jpg" download="febyjohnrelmalbino_cv.jpg" class="btn primary-btn">
                <i class="fa-solid fa-download" style="color: rgb(255, 255, 255);"></i>
                CV
            </a>
        </div>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home">
                    <i class="fa-solid fa-house"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#projects">
                    <i class="fa-solid fa-briefcase"></i>
                    Projects
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#about">
                    <i class="fa-solid fa-user"></i>
                    About
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#contact">
                    <i class="fa-solid fa-envelope"></i>
                    Contact
                </a>
            </li>
        </ul>

        <div class="other-buttons">
            <button id="themeToggleDesktop" class="btn primary-btn" onclick="toggleTheme()">
                <i class="fa-solid fa-circle-half-stroke"></i>
            </button>

            <button id="feedbackToggleDesktop" class="btn primary-btn" data-bs-toggle="modal" data-bs-target="#feedbackModalDesktop">
                <i class="fa-solid fa-comment"></i>
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="feedbackModalDesktop">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Give Feedback</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <form action="app/emails/feedback_email.php" method="POST">
                            <input placeholder="Your Name" type="text" id="name" name="name">
                            <input placeholder="Your Email" type="email" id="email" name="email">
                            <textarea placeholder="Your Feedback" id="feedback" name="feedback" required></textarea>

                            <button type="submit" name="send" class="btn primary-btn">
                                <i class="fa-solid fa-paper-plane"></i>
                                Send Feedback
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section id="section">
        <div class="tab-content">
            <!-- Home -->
            <div class="tab-pane active" id="home">
                <?php
                    date_default_timezone_set('Asia/Manila');

                    $hour = date('H');

                    if ($hour < 12) {
                        $bg = "assets/images/other/morning.png";
                        $greet = "Good Morning!";
                    } elseif ($hour < 18) {
                        $bg = "assets/images/other/afternoon.png";
                        $greet = "Good Afternoon!";
                    } else {
                        $bg = "assets/images/other/night.png";
                        $greet = "Good Evening!";
                    }
                ?>

                <div class="header" style="background: url('<?php echo $bg; ?>') center/cover;">
                    <small><?php echo date('F j, Y'); ?></small>
                    <h1><?php echo $greet; ?></h1>
                </div>

                <div class="hero">
                    <h1>Hi I am Feby Johnrel </h1>

                    <div class="description">
                        <p>I'm a BSIT student, still learning and improving my skills.</p>
                        <p>I'm passionate about creating and designing.</p>
                        <p>Beside coding, I also enjoy film making.</p>
                    </div>

                    <div class="social-links">
                        <a href="https://github.com/johnreeeeeeeel" target="_blank">
                            <i class="fa-brands fa-github fa-2xl"></i>
                        </a>
                        <a href="https://www.facebook.com/f.johnreeeeeeeel" target="_blank">
                            <i class="fa-brands fa-facebook fa-2xl"></i>
                        </a>
                        <a href="https://www.instagram.com/john.reeeeeeeel" target="_blank">
                            <i class="fa-brands fa-instagram fa-2xl"></i>
                        </a>
                        <a href="https://www.tiktok.com/@johnreeeeeeeel" target="_blank">
                            <i class="fa-brands fa-tiktok fa-2xl"></i>
                        </a>
                    </div>
                </div>

                <div class="featured">
                    
                </div>
            </div>

            <!-- My projects -->
            <div class="tab-pane" id="projects">
                <h1>
                    <i class="fa-solid fa-briefcase"></i>
                    My Projects
                </h1>

                <div class="card-container">
                    <!-- UrSafe -->
                    <div class="card projectCard" data-bs-toggle="modal" data-bs-target="#ursafeModal">
                        <div class="card-header">
                            <p class="card-title">
                                UrSafe
                            </p>
                        </div>

                        <div class="card-body">
                            <img src="assets\images\projects\ursafe.png" alt="reload" class="card-image">
                        </div>
                    </div>

                    <!-- UrSafe modal -->
                    <div class="modal fade projectModal" id="ursafeModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        UrSafe
                                    </h4>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <img src="assets\images\projects\ursafe.png" alt="reload" class="modal-image">

                                    <p>
                                        UrSafe’s is a campus based personal storage Web-Based Application. Its mainpurpose is to streamline, digitalized, organized the management and application of personalstorage such as locker.
                                    </p>
                                </div>

                                <div class="modal-footer">
                                    <a href="https://github.com/johnreeeeeeeel/ursafe.git" target="_blank" class="btn primary-btn">
                                        View on GitHub
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Butang Findr -->
                    <div class="card projectCard" data-bs-toggle="modal" data-bs-target="#butangFindrModal">
                        <div class="card-header">
                            <p class="card-title">
                                Butang Findr
                            </p>
                        </div>

                        <div class="card-body">
                            <img src="assets\images\projects\butang_findr.png" alt="reload" class="card-image">
                        </div>
                    </div>

                    <!-- Butang Findr modal -->
                    <div class="modal fade projectModal" id="butangFindrModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        Butang Findr
                                    </h4>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <img src="assets\images\projects\butang_findr.png" alt="reload" class="modal-image">

                                    <p>
                                        Butang Findr is a campus based application that makes lost and found digitalized, helps campus community to report found item and retrieve lost item quickly, reduce stress, and keep the campus organized.
                                    </p>
                                </div>

                                <div class="modal-footer">
                                    <a href="https://github.com/johnreeeeeeeel/butang_findr.git" target="_blank" class="btn primary-btn">
                                        View on GitHub
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Simple Kiosk -->
                    <div class="card projectCard" data-bs-toggle="modal" data-bs-target="#simpleKioskModal">
                        <div class="card-header">
                            <p class="card-title">
                                Simple Kiosk
                            </p>
                        </div>

                        <div class="card-body">
                            <img src="assets\images\projects\simple_kiosk.png" alt="reload" class="card-image">
                        </div>
                    </div>

                    <!-- Simple Kiosk modal -->
                    <div class="modal fade projectModal" id="simpleKioskModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        Simple Kiosk
                                    </h4>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <img src="assets\images\projects\simple_kiosk.png" alt="reload" class="modal-image">

                                    <p>
                                        This is simple Kiosk wherein customers can easily place orders with the use of a touchscreen interface.
                                    </p>
                                </div>

                                <div class="modal-footer">
                                    <a href="https://github.com/johnreeeeeeeel/simple_kiosk.git" target="_blank" class="btn primary-btn">
                                        View on GitHub
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paluwagan Management System -->
                    <div class="card projectCard" data-bs-toggle="modal" data-bs-target="#paluwaganModal">
                        <div class="card-header">
                            <p class="card-title">
                                Paluwagan Management System
                            </p>
                        </div>

                        <div class="card-body">
                            <img src="assets\images\projects\paluwagan_management_system.png" alt="reload" class="card-image">
                        </div>
                    </div>

                    <!-- Paluwagan Management System modal -->
                    <div class="modal fade projectModal" id="paluwaganModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        Paluwagan Management System
                                    </h4>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <img src="assets\images\projects\paluwagan_management_system.png" alt="reload" class="modal-image">

                                    <p>
                                        This is the Paluwagan Management System wherein paluwagan hadlers can efficiently manage and track paluwagan activities.
                                    </p>
                                </div>

                                <div class="modal-footer">
                                    <a href="https://github.com/johnreeeeeeeel/paluwagan_management_system.git" target="_blank" class="btn primary-btn">
                                        View on GitHub
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About me -->
            <div class="tab-pane" id="about">
                <h1>
                    <i class="fa-solid fa-user"></i>
                    About Me
                </h1>

                <div class="intro">
                    <div>
                        <img src="assets/images/profile/profile.png" alt="profile picture" class="img-fluid">
                    </div>

                    <div>
                        <h3>Hello World!</h3>
                        <h1>I'm Feby Johnrel R. Malbino</h1>
                        <small>A student taking up a Bachelor of Science in Information Technology at Davao del Norte State College.</small>
                        <small>A future Web Developer and UI/UX Designer.</small>
                        <small>I'm focused on user-centered design principles.</small>
                        <small>I approach problems by breaking them down into smaller parts to solve them more efficiently.</small>
                        <br>
                        <small>Skills in Microsoft Office applications, Adobe Creative Suite, photography, videography, photo and video editing.</small>
                        <small>Passionate in terms of writing and directing short films.</small>
                        <br>
                        <div class="add-info">
                            <small>
                                <i class="fa-solid fa-location-dot"></i>
                                Carmen, Davao del Norte, Philippines
                            </small>
                            <small>
                                <i class="fa-solid fa-phone"></i>
                                09207010059
                            </small>
                            <small>
                                <i class="fa-solid fa-envelope"></i>
                                techjohnrel@gmail.com
                            </small>
                        </div>
                    </div>
                </div>

                <div class="tech-stack">
                    <div class="track">
                        <!-- original -->
                        <div class="item">
                            <img src="assets\images\techstack\html.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\css.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\js.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\php.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\java.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\mysql.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\bootstrap.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\git.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\github.png" alt="reload">
                        </div>

                        <!-- duplicate -->
                         <div class="item">
                            <img src="assets\images\techstack\html.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\css.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\js.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\php.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\java.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\mysql.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\bootstrap.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\git.png" alt="reload">
                        </div>
                        <div class="item">
                            <img src="assets\images\techstack\github.png" alt="reload">
                        </div>
                    </div>
                </div>

                <div class="hobby">
                    <div>
                        <h1>Photography & Videogeraphy</h1>
                        <small>Besides coding and designing, I also enjoy capturing photos and videos of random subjects, from everyday objects to landscapes.</small>
                    </div>

                    <div>
                        <img src="assets/images/other/photography.png" alt="reload" class="img-fluid">
                    </div>
                </div>

                <div class="hobby">
                    <div>
                        <h1>Sport</h1>
                        <small>Besides coding and designing, I enjoy staying active through sports such as cycling and other outdoor activities, which help me stay energized and creative.</small>
                    </div>

                    <div>
                        <img src="assets/images/other/cycling.jpg" alt="reload" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="tab-pane" id="contact">
                <form action="app/emails/contact_email.php" method="POST">
                    <h1>
                        <i class="fa-solid fa-envelope"></i>
                        Get In Touch
                    </h1>
                    <small>I'd love to hear from you!</small>
                    <small>Fill out the form below and I'll get back to you as soon as possible.</small>

                    <input placeholder="Your Name" type="text" id="name" name="name" required>
                    <input placeholder="Your Email" type="email" id="email" name="email" required>
                    <textarea placeholder="Your Message" id="message" name="message" required></textarea>

                    <button type="submit" name="send" class="btn primary-btn">
                        <i class="fa-solid fa-paper-plane"></i>
                        Send Message
                    </button>
                </form>

                <div class="social-links">
                    <a href="https://github.com/johnreeeeeeeel" target="_blank">
                        <i class="fa-brands fa-github fa-2xl"></i>
                    </a>
                    <a href="https://www.facebook.com/f.johnreeeeeeeel" target="_blank">
                        <i class="fa-brands fa-facebook fa-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/john.reeeeeeeel" target="_blank">
                        <i class="fa-brands fa-instagram fa-2xl"></i>
                    </a>
                    <a href="https://www.tiktok.com/@johnreeeeeeeel" target="_blank">
                        <i class="fa-brands fa-tiktok fa-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

<!-- JS -->
<script src="assets/js/scripts.js"></script>

</html>