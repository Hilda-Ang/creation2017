<?php
if(isset($_POST['submit'])) {
     $email_to = "hildaang22@gmail.com";
     $email_subject = $_POST['subject'];
     $name = $_POST['name'];
     $email_from = $_POST['email'];
     $message = $_POST['message'];
     function clean_string($string) {
	$bad = array("content-type","bcc:","to:","cc:","href");
	return str_replace($bad,"",$string);
     }
     $email_message = "Form details below.\n\n";
     $email_message .= "Name: ".clean_string($name)."\n";
     $email_message .= "Email: ".clean_string($email_from)."\n";
     $email_message .= "Message: ".clean_string($message)."\n";
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
<div class="feedback">Thank you for contacting us. We will be in touch with you very soon.</div>
}
?>
