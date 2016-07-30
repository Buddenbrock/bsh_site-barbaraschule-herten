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
		$dsatz = mysql_fetch_assoc($res);
		$db_email = $dsatz['email'];
		$db_password = $dsatz['password'];

		if( $email == $db_email){
      if($password == $db_password){
  			$_SESSION['user'] = $dsatz;
  			header("Location: index.php");
      }
		}
    else {
      header("Location: login.php");
    }
	}
?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8"/>
		<title>Barbaraschule Herten</title>
		<link rel="stylesheet" href="css/login.css" />

		<!-- Favicon -->
		<link rel="icon" type="img/x-icon" href="img/favicon/favicon.ico" />
		<link rel="shortcut icon" href="img/favicon/favicon.png" />
		<link rel="apple-touch-icon-precomposed" href="img/favicon/apple-touch-icon-precomposed.png" />
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-57x57.png" sizes="57x57" />
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-72x72.png" sizes="72x72" />
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-76x76.png" sizes="76x76" />
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-114x114.png" sizes="114x114" />
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-144x144.png" sizes="144x144" />
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-152x152.png" sizes="152x152" />
	</head>
	<body>
		<section id="body">
			<h2>BARBARASCHULE</h2>
			<form action="login.php" method="POST">
				<h1>Login</h1>
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Passwort"/>
				<input type="submit" name="submit" value="Anmelden" />
			</form>
			<section id="mobile">
        <h1>Geräteunterstützung fehlt</h1>
				Ihre Gerätegröße wird von diesem System nicht unterstützt. Bitte versuchen Sie, diese Seite auf einem größeren Ausgabegerät mit aktuellem Browser aufzurufen.
			</section>
		</section>

    <div id="footerinfo">
      <img src="img/cms.png" alt="CMS by Buddenbrock"/><br><br>
      STARTERcms. Copyright 2015. Dirk Buddenbrock.<br>
      Extension are copyright of their respective owners.
    </div>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->
