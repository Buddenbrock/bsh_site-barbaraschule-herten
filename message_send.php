<?php
	include_once('cms/database.php');

	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['mail']);
	$message = mysql_real_escape_string($_POST['message']);

	$sql = "INSERT INTO messages (name, email, message) VALUE ('".$name."', '".$email."', '".$message."')";
	mysql_query($sql) or error_log(mysql_error());

	header('Location: kontakt.php?success');
?>