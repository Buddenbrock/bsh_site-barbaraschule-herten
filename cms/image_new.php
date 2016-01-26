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
		<title>Barbaraschule Herten</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<section id="body">
			<aside>
				<img src="img/avatar.png" title="Dirk Buddenbrock"/>
				<p>Dirk Buddenbrock</p>
				<hr />
				<nav>
					<ul>
						<li><a href="index.php" title="Dashboard">Dashboard</a></li>
						<li><a href="message.php" title="Nachrichten">Nachrichten</a></li>
						<li><a href="article.php" title="Artikel">Artikel</a></li>
						<li><a href="date.php" title="Termine">Termine</a></li>
						<li><a href="image.php" id="active" title="Bilder">Bilder</a></li>
						<li><a href="login.php" title="Logout">Logout</a></li>
					</ul>
				</nav>
			</aside>
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