<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$title = mysql_real_escape_string($_POST['title']);
	$description = mysql_real_escape_string($_POST['description']);
  $page = mysql_real_escape_string($_POST['page']);


	if(isset($_POST['save_type']) && $_POST['save_type'] == "new"){
    $created = date("Y-m-d", strtotime($_POST['date']));
		$show = "1";
		$sql = "INSERT INTO news (newstitle, created, description, page, show_news) VALUE ('".$title."','".$created."','".$description."','".$page."','".$show."')";
	}else{
		$id = mysql_real_escape_string($_POST['id']);
		$sql = "UPDATE news SET newstitle = ".$title.", description=".$description." WHERE id = ".$id;
	}

	mysql_query($sql) or error_log(mysql_error());
	header("Location: news.php?page=".$page);
?>


<!-- ======================================================= -->
<!-- |             program by Dirk Buddenbrock             | -->
<!-- ======================================================= -->
