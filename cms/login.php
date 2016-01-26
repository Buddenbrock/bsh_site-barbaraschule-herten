<?php
	session_start();
	if(isset($_SESSION['user'])){
		session_destroy();
		$_SESSION = array();
	}

	if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email']!= null && $_POST['password']!=null ){
		include_once("database.php");

		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);

		$sql = "SELECT * FROM user WHERE email = '".$email."'";
		$res = mysql_query($sql) or error_log(mysql_error());
		echo mysql_num_rows($res);
		$dsatz = mysql_fetch_assoc($res);
		$db_email = $dsatz['email'];
		$db_password = $dsatz['password'];

		if($password = $db_password){
			$_SESSION['user'] = $dsatz;
			header("Location: index.php");
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Barbaraschule Herten</title>
		<link rel="stylesheet" href="css/login.css" />
	</head>
	<body>
		<section id="body">
			<h2>BARBARASCHULE</h2>
			<form action="login.php" method="POST">
				<h1>Login</h1>
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Password"/>
				<input type="submit" name="submit" value="Sign In" />
			</form>
		</section>

		<h2><img src="img/cms.png" alt="CMS by Buddenbrock"/></h2>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->