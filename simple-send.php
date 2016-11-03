<?php
	if (($_POST['sender_name'] == "") || ($_POST['sender_email'] == "") || ($_POST['message'] == "") || ($_POST['honeypot'] !== "")) {
		header("Location: http://localhost/php-test/simple-contact.html");
		exit;
	}
	$msg = "Email Sent From Localhost \n";
	$msg .= "Sender's Name:    " . $_POST['sender_name'] . "\n";
	$msg .= "Sender's Email:   " . $_POST['sender_email'] . "\n";
	$msg .= "Sender's Message: " . $_POST['message'] . "\n";
	$to = "hey@manuelosorio.me";
	$subject = "PHP Email: Localhost";
	$mailheaders = "From Localhost";
	$mailheaders .= "Reply-to: " . $_POST['sender_email'];
	mail($to, $subject, $msg, $mailheaders);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Simple Send</title>
		<style media="screen">
			body {
				font-family: sans-serif;
			}
		</style>
	</head>
	<body>
		<h1>Your Email Was Sent.</h1><br>
		<h3>This is what was sent: </h3><br>
		<p>
			<strong>Sender's Name:</strong> <?php echo $_POST['sender_name']; ?><br>
			<strong>Sender's Email:</strong> <?php echo $_POST['sender_email']; ?><br>
			<strong>Sender's Message:</strong> <?php echo $_POST['message']; ?><br>
		</p>
	</body>
</html>
