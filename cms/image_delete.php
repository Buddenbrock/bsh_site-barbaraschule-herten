<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if((!isset($_REQUEST['id'])) || (!isset($_REQUEST['imagegroup_id']))){
		header("Location: image.php?error");
	}

	if($_REQUEST['id']){
		$id = mysql_real_escape_string($_REQUEST['id']);

		$sql = "SELECT * FROM image WHERE id = '".$id."'";
		$res = mysql_query($sql) or error_log(mysql_error());
		$dsatz = mysql_fetch_assoc($res);

		$id = $dsatz['id'];
		$url = $dsatz['url'];

		unlink("../img/upload/".$url);

		$sql = "DELETE FROM image WHERE id = '".$id."'";
		mysql_query($sql) or error_log(mysql_error());
	}

	if($_REQUEST['imagegroup_id']){
		$imagegroup_id = mysql_real_escape_string($_REQUEST['imagegroup_id']);

		$sql = "SELECT * FROM image WHERE groupname = '".$imagegroup_id."'";
		$res = mysql_query($sql) or error_log(mysql_error());
		
		while($dsatz = mysql_fetch_assoc($res)){
			$url = $dsatz['url'];
			
			unlink("../img/upload/".$url);
		}
		
		$sql = "DELETE FROM image WHERE groupname = '".$imagegroup_id."'";
		mysql_query($sql) or error_log(mysql_error());
		
		$sql = "DELETE FROM imagegroup WHERE id = '".$imagegroup_id."'";
		mysql_query($sql) or error_log(mysql_error());
		
	}
	
	header("Location: image.php?success2");
?>