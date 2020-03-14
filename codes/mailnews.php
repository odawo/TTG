<?php 
	$link = mysqli_connect("localhost", "udoobrys_root", "", "udoobrys_newslettermailing");

	if($link === false){
		die("ERROR: Could not connect.".mysql_connect_error());
	}

	$email = mysqli_real_escape_string($link, $_REQUEST['email']);

	$sql = "INSERT INTO newsletter_mail (emails) VALUES ('$email')";

	if (mysqli_query($link, $sql)) {
		echo "Subscribed to our Newsletter!";
	} else {
		echo "Error! Could not complete your subscription at the moment. Please try again later. $sql".mysqli_error($link);
	}

	mysqli_close($link);
?>