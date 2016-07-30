<?php
	session_start();
	include_once("secure_access_barrier.php");

	if(isset($_REQUEST['title'])){
		$title = mysql_real_escape_string($_REQUEST['title']);
	}else{
		$title = "";
	}
?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8"/>
		<title>Barbaraschule Herten</title>
		<link rel="stylesheet" href="css/style.css" />
		
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
      <?php
        include_once('aside.php');
       ?>
			<section id="content">
				<h1>Bild hochladen</h1>
				<br/>

				<?php
					if(isset($_REQUEST['wrongfile'])){
						echo "<p id='info_line_warning'>Bitte nur Bilder im jpg Format hochladen</p>";
					}else if(isset($_REQUEST['tobig'])){
						echo "<p id='info_line_warning'>Das Bild darf nicht größer sein als 250kb.</p>";
					}
				?>

				<form method="POST" action="image_save.php" enctype="multipart/form-data">
					<label>Titel der Bilderreihe</label>
					<input type="text" name="groupname" placeholder="Titel der Bilderreihe" value="<?=($title)?>"/>
					<label>Titel des Bildes</label>
					<input type="text" name="title" placeholder="Titel des Bildes"/>
					<input type="file" name="file" />

					<input type="submit" role="btn" value="Speichern" />
				</form>
				<br /><br />
				<p>
					<strong>Vorraussetzung:</strong><br/>
					Bildmaße: 667x444(Querformat) oder 444x667(Hochformat)<br/>
					Dateigröße: max. 250kB
				</p>
		</section>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->
