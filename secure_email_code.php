error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
require "vendor/autoload.php";
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Creating a new instance, passing true enables exceptions
$mail = new PHPMailer(true);

//Server settings (gmail)
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = "heyaleks22222";
$mail->Password = "389a43c4";

//Recipients
$mail->setFrom($email, $name);
$mail->addAddress("oceboosting@gmail.com", "Aleks"); //Add a recipient, name optional

//Content
$mail->Subject = $name;
$mail->Body = $message;

$mail->send();
header("Location: sent.html");