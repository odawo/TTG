<?php 
$to = 'vanessaodawo@gmail.com'; 
$subject  = "Contact Us Form"; 

// User info (DO NOT EDIT!)
//$fname = stripslashes($_REQUEST['fname']);
$fname = $_POST['fname']
$email = $_POST['email']
$subject = $_POST['subject']
$msg = $_POST['message']


// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$name .= "Name: ".$fname."\r\n\n";  // add sender's name to the message
$email .= "E-mail: ".$email."\r\n\n";  // add sender's email to the message
$subject .= "Subject: ".$subject."\r\n\n";  // add sender's phone to the message
$msg .= "Message: ".$message."\r\n\n";  // add sender's checkboxes to the message
//$msg .= "\r\n\n"; 
//@
$mail = mail($to, $subject, $msg, "From:".$name."<".$email.">\r\n");  // This command sends the e-mail to the e-mail address contained in //the $to variable

if($mail) {
	echo "sebny";
	//header("contact-us.html");	
} else {
	echo 'Message could not be sent!';   //This is the message that will be shown when an error occured: the message was not sent
}

require_once"contact-us.php";
?>