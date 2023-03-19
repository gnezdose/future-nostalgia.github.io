<?php	
	if (empty($_POST['email_268']) && strlen($_POST['email_268']) == 0 || empty($_POST['email_268']) && strlen($_POST['email_268']) == 0 || empty($_POST['email_268']) && strlen($_POST['email_268']) == 0)
	{
		return false;
	}
	
	$email_268 = $_POST['email_268'];
	$email_268 = $_POST['email_268'];
	$email_268 = $_POST['email_268'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Email_268: $email_268 \nEmail_268: $email_268 \nEmail_268: $email_268 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_268";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>