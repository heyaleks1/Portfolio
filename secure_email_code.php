<?php
    function send_mail($email, $recipient_name, $message='')
    {
        require("phpmailer/class.phpmailer.php");
    
        $mail = new PHPMailer();
    
        $mail->CharSet = "utf-8";
        $mail->IsSMTP();                                      // Set mailer to use SMTP
        $mail->Host = "smtp.gmail.com";  // Specify main and backup server
        $mail->SMTPAuth = true;     // Turn on SMTP authentication
        $mail->Username = "heyaleks22222";  // SMTP username
        $mail->Password = "389a43c4"; // SMTP password
    
        $mail->From = "oceboosting@gmail.com";
        $mail->FromName = "Aleks";
        $mail->AddAddress($email, $recipient_name);
    
        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->IsHTML(true);                                  // Set email format to HTML (true) or plain text (false)
    
        $mail->Subject = $email;
        $mail->Body    = $message;
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
        $mail->AddEmbeddedImage('images/logo.png', 'logo', 'logo.png');
        $mail->addAttachment('files/file.xlsx');
    
        if(!$mail->Send())
        {
           echo "Message could not be sent. <p>";
           echo "Mailer Error: " . $mail->ErrorInfo;
           exit;
        }
    
        echo "Message has been sent";
    }
?>