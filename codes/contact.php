<?php 

$fname = $_POST['fname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$to = 'vanessaodawo@gmail.com';
$from = 'From: ';

$body = 'From: $fname \n Email: $email \n Message:\n $message';

if ($_POST['submit']) {

	if (mail($to, $subject, $body, $from)) 

		header('Location: contact-us.html');
	

	echo "Thank you for reaching out.";
	exit;

} else {

	echo "Unable to complete your request.Retry later.";

}

?>