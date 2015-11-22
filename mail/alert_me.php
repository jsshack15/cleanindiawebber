<?php
// Check for empty fields
if(empty($_POST['phone'])  		||
   empty($_POST['city']) 		||
   empty($_POST['street'])      ||
   
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$phone = $_POST['phone'];
$city = $_POST['city'];
$street = $_POST['street'];
	
// Create the email and send the message
$to = 'contact@cleanindia.in'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nPhone: $phone\n\nCity: $city\n\nStreet: $street";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>