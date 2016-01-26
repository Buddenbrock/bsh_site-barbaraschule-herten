<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");
	
	$page = mysql_real_escape_string($_POST['page']);
	$title = mysql_real_escape_string($_POST['title']);
	$content = mysql_real_escape_string($_POST['content']);
	
	
	if($_POST['save_type'] == "new"){
		$show = "1";
		$sql = "INSERT INTO content (title, content, page, show_article) VALUE ('".$title."','".$content."','".$page."','".$show."')";
	}else{
		$id = mysql_real_escape_string($_POST['id']);
		$sql = "UPDATE content SET title=".$title.", content=".$content." WHERE id = ".$id;
	}
	
	mysql_query($sql) or error_log(mysql_error());
	header("Location: article.php?page=".$page);
?>


<!-- ======================================================= -->
<!-- |             program by Dirk Buddenbrock             | -->
<!-- ======================================================= -->