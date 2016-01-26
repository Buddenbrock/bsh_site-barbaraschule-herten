<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$id = mysql_real_escape_string($_REQUEST['id']);

	$sql = "SELECT * FROM date WHERE id = '".$id."'";
	$res = mysql_query($sql) or error_log(mysql_error());
	$dsatz = mysql_fetch_assoc($res);

	$id = $dsatz['id'];
	$show = $dsatz['show_date'];

	if($show == "1"){
		$show = "0";
	}else if($show == "0"){
		$show = "1";
	}

	$sql = "UPDATE date SET show_date = ".$show." WHERE id = ".$id;
	mysql_query($sql) or error_log(mysql_error());

	header("Location: date.php");
?>