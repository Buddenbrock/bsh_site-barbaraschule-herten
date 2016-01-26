<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$title = mysql_real_escape_string($_POST['title']);
	$groupname = mysql_real_escape_string($_POST['groupname']);

/*-------------*/

	if(isset($_FILES['file']['tmp_name'])){

		$file_tmp_name = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$url = $_FILES['file']['name'];

		$dateityp = GetImageSize($file_tmp_name);
		if($dateityp[2] != 0){
			if($file_size <  256000){
				move_uploaded_file($file_tmp_name, "../img/upload/".$url);
				$ending = "success1";
			}else{
				$ending = "tobig";
			}
		}else{
			$ending = "wrongfile";
		}
		
		$sql = "SELECT * FROM imagegroup WHERE group_title = '".$groupname."'";
		$res = mysql_query($sql) or error_log(mysql_error());
		
		if(mysql_num_rows($res) != null){
			$dsatz = mysql_fetch_assoc($res);
			echo $imagegroup_id = $dsatz['id'];
		}else{
			$sql = "INSERT INTO imagegroup (group_title) VALUE ('".$groupname."')";
			mysql_query($sql) or error_log(mysql_error());
			
			$sql = "SELECT * FROM imagegroup WHERE group_title = '".$groupname."'";
			$res = mysql_query($sql) or error_log(mysql_error());
			$dsatz = mysql_fetch_assoc($res);
			$imagegroup_id = $dsatz['id'];
		}
		

		$sql = "INSERT INTO image (title, url, groupname) VALUE ('".$title."', '".$url."', '".$imagegroup_id."')";
		mysql_query($sql) or error_log(mysql_error());
		

		header("Location: image.php?".$ending);
	}
?>

<!-- ======================================================= -->
<!-- |             program by Dirk Buddenbrock             | -->
<!-- ======================================================= -->