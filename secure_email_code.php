<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "oceboosting@gmail.com";
$mail->Password = "R389a43c4!";

$mail->setFrom($email, $name);
$mail->addAddress("heyaleks22222", "Aleks");

$mail->Subject = $name;
$mail->Body = $message;

$mail->send();

echo "email sent";


