<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$page = mysql_real_escape_string($_POST['page']);
	$title = mysql_real_escape_string($_POST['title']);
	$description = mysql_real_escape_string($_POST['description']);
	$date = date("Y-m-d", strtotime($_POST['date']));

	if($_POST['save_type'] == "new"){
		$show = "1";
		$sql = "INSERT INTO date (title, description, date, show_date) VALUE ('".$title."','".$description."','".$date."','".$show."')";
	}else{
		$id = mysql_real_escape_string($_POST['id']);
		$sql = "UPDATE date SET title=".$title.", description=".$description." WHERE id = ".$id;
	}

	mysql_query($sql) or error_log(mysql_error());
	header("Location: date.php");
?>