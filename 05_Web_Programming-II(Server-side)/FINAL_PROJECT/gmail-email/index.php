<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'keyur.n.patel100@gmail.com'; // YOUR gmail email
    $mail->Password = 'qjrefyjqrdbeytkm'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('keyur.n.patel100@gmail.com', 'Example Mail');
    $mail->addAddress('keyur20@somaiya.edu', 'Keyur Patel');
    $mail->addReplyTo('keyur20@somaiya.edu', 'Example Sender'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Hi this is my first mail using PHPmailer";
    $mail->Body = 'Hi my name is keyur and this is my first mail using phpmailer. <b>Gmail</b> SMTP email body.';
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
?>
