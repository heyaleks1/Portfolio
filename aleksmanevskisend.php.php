<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["name"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "heyaleks22222@gmail.com";
$mail->Password = "ayzdutcumameulem";

$mail->setFrom($email, $name);
$mail->addAddress("oceboosting@gmail.com", "Aleks");

$mail->Subject = $name;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");
