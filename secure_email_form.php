<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!empty($_POST["send"])) {
            $name = $_POST["name"];
            $name = $_POST["email"];
            $name = $_POST["message"];
            $toEmail = $_POST["oceboosting@gmail.com"];

            $mailHeaders = "Name: " . $name . 
            "\r\n Name: " . $name . 
            "\r\n Email: " . $email . 
            "\r\n Message: " . $message . "\r\n";
            
            if(mail($email, $name, $mailHeaders)) {
               $message = "Your message has been sent.";     
            }
        }
    ?>

<div class="contact-container">
    <h1 id="contact">CONTACT</h1>
    <p class="p-bold">Please fill in the form below to contact me.</p>
    <form method="post" name="form" class="form-1">  
        <fieldset>
            <div><input name="name" class="input-1" type="text" placeholder="Name:"></div>
            <div><input name="email" class="input-1" type="email" placeholder="Email:"></div>
            <div><textarea name="message" class="input-1" rows="3" cols="30" placeholder="Message:"></textarea></div> 
            <input id="send" name="" type="submit" value="Send Form" />
            <?php if(!empty($message)) { ?>
                <div class="success">
                <strong><?php echo $message; ?></strong>
                </div>
            <?php } ?>
        </fieldset>
    </form>  
</div>

</body>
</html>