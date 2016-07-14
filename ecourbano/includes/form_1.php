<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['input_1775']) && strlen($_POST['input_1775']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$input_1775 = $_POST['input_1775'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from ecourbano.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nInput_1775: $input_1775 \nMessage: $message \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_1775";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>