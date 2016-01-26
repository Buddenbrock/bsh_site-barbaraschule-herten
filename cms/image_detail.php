<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if(!isset($_REQUEST['id'])){
		header("Location: image.php");
	}

	$id = mysql_real_escape_string($_REQUEST['id']);

	$sql = "SELECT * FROM image WHERE groupname = '".$id."' ORDER BY date ASC";
	$res = mysql_query($sql) or error_log(mysql_error());
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
				<h1>Bilder</h1>

				<?php
						if(isset($_REQUEST['success1'])){
							echo "<p id='info_line_success'>Die Bilder wurden erfolgreich hochgeladen</p>";
						}else if(isset($_REQUEST['success2'])){
							echo "<p id='info_line_success'>Das Bild wurde erfolgreich gelöscht.</p>";
						}else if(isset($_REQUEST['error'])){
							echo "<p id='info_line_danger'>Das Bild konnte nicht gelöscht werden.</p>";
						}

						while($dsatz = mysql_fetch_assoc($res)){
							$id = $dsatz['id'];
							$title = $dsatz['title'];
							$url = $dsatz['url'];
							$date = date("d.m.Y", strtotime($dsatz['date']));
					?>
					<article id="image">
						<img src="../img/upload/<?=($url)?>" title="<?=($title)?>" /><br/>
						<a href="image_delete.php?id=<?=($id)?>" title="l&ouml;schen"><img src="img/delete.png"/></a><br/>
					</article>

					<?php
						}
					?>
				<section id="clear"></section>
			</section>
		</section>
	</body>
</html>