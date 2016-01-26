<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$id = mysql_real_escape_string($_REQUEST['id']);

	$sql = "SELECT * FROM messages WHERE id = '".$id."'";
	$res = mysql_query($sql) or error_log(mysql_error());
	$dsatz = mysql_fetch_assoc($res);

	$id = $dsatz["id"];

	$sql = "DELETE FROM messages WHERE id = '".$id."'";
	mysql_query($sql) or error_log(mysql_error());

	header("Location: message.php");
?>

<!-- ======================================================= -->
<!-- |             program by Dirk Buddenbrock             | -->
<!-- ======================================================= -->