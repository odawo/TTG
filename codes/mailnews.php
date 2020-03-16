
<?php 
	$svr = "localhost";
	$dbs = "udoobrys_newslettermailing";
	$name = "udoobrys_root";
	$pass = "0202tERAttg";

	$db_conn = mysqli_connect($svr, $name, $pass, $dbs);


	#$email = mysqli_real_escape_string($link, $_REQUEST['email']);
	$email = $_POST['email'];

	$my_Insert = "INSERT INTO newsletter_mail (emails) VALUES ($email)";

	
	mysqli_query($db_conn, $my_Insert);

	echo "added";

	mysqli_close($db_conn);
?>


