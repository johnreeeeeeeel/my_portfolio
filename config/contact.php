<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['send'])) {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'techjohnrel@gmail.com';      // YOUR GMAIL
        $mail->Password   = 'bpagefdybudxqdhd';        // APP PASSWORD
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email settings
        $mail->setFrom('febyjohnrel11@gmail.com', 'Contact Form');
        $mail->addAddress('techjohnrel@gmail.com'); // where emails go
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Message';
        $mail->Body    = "
            <h3>New Message</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Message:</b><br>$message</p>
        ";

        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Message failed. Error: {$mail->ErrorInfo}";
    }
}
?>
