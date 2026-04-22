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
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/mail_styles.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if (isset($_POST['send'])) {

        $name    = htmlspecialchars($_POST['name']);
        $email   = htmlspecialchars($_POST['email']);
        $feedback = htmlspecialchars($_POST['feedback']);

        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'techjohnrel@gmail.com';
            $mail->Password   = 'nhzshhkmknmxxunj';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Email settings
            $mail->setFrom('techjohnrel@gmail.com', 'Contact Form');
            $mail->addAddress('techjohnrel@gmail.com');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = '[Portfolio] New Feedback Message';

            $mail->Body    = "
                <div class='email-content'>
                    <h1>Feedback</h1>
                    <p><strong>Name:</strong> {$name}</p>
                    <p><strong>Email:</strong> {$email}</p>
                    <p><strong>Feedback:</strong><br>{$feedback}</p>
                </div>
            ";

            $mail->send();

            echo '
                <div class="message success-message">
                    <h1>
                        <i class="fas fa-check-circle"></i>
                        Feedback Sent!
                    </h1>
                    <small>
                        Thank you for your feedback. I will get back to you as soon as possible.
                    </small>

                    <button onclick="goBackAndReload()" class="btn primary-btn">Go Back</button>
                </div>
            ';
            
        } catch (Exception $e) {

            echo '
                <div class="message error-message">
                    <h1>
                        <i class="fas fa-exclamation-triangle"></i>
                        Feedback Not Sent!
                    </h1>
                    <small>
                        An error occurred while trying to send your feedback. Please try again.
                    </small>

                    <button onclick="goBackAndReload()" class="btn primary-btn">Go Back</button>
                </div>
            ';
        }
    }
    ?>
</body>

<!-- JS -->
<script src="../assets/js/scripts.js"></script>

</html>