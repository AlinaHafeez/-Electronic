<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'aleenahafiz111@gmail.com'; // Your email address
    $mail->Password = 'cesp byeu jkkr owyv'; // Your gmail app password
    $mail->SMTPSecure = 'ssl'; // Encryption (ssl or tls)
    $mail->Port = 465; // for ssl
    // $mail->Port = 587; // for tls

    //Recipients
    $mail->setFrom('aleenahafiz111@gmail.com', 'SRS Electronics');
    $mail->addAddress($_POST["email"]);
    
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();
    echo '
    <script>
    alert("Email Sent Successfully");
    document.location.href = "index.php"
    </script>
    ';}
?>