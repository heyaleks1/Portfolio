<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
    $email = $_POST["email"];
	$message = $_POST["message"];
    $toEmail = "oceboosting@gmail.com";
  
	$mailHeaders = "Name: " . $name .
	"\r\n Email: ". $email  . 
	"\r\n Message: " . $message . "\r\n";

	if(mail($toEmail, $name, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>

<?php if (! empty($message)) {?>
    <strong><?php echo $message; ?>	</strong>
    <?php } ?>