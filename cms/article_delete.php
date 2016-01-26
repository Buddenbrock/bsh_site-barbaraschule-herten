<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$id = mysql_real_escape_string($_REQUEST['id']);

	$sql = "SELECT * FROM content WHERE id = '".$id."'";
	$res = mysql_query($sql) or error_log(mysql_error());
	$dsatz = mysql_fetch_assoc($res);

	$id = $dsatz["id"];
	$page = $dsatz["page"];

	$sql = "DELETE FROM content WHERE id = '".$id."'";
	mysql_query($sql) or error_log(mysql_error());

	header("Location: article.php?page=".$page);
?>

<!-- ======================================================= -->
<!-- |             program by Dirk Buddenbrock             | -->
<!-- ======================================================= -->