<?php
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.outlook.com'; // SMTP server
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port       = 587; // TCP port to connect to

    //Account settings
    $mail->Username   = 'rangga.prawira@outlook.com'; // SMTP username
    $mail->Password   = 'Holmes4869'; // SMTP password
    $mail->setFrom('rangga.prawira@outlook.com', 'Rangga Prawira');
    
    //Recipient
    $mail->addAddress('rangga.prawira@matahari.com');
    
    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Message';
    $mail->Body    = 'This is a test message';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
