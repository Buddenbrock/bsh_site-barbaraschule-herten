<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if(isset($_REQUEST['id'])){
		$id = mysql_real_escape_string($_REQUEST['id']);

		$sql = "SELECT * FROM content WHERE id = '".$id."'";
		$res = mysql_query($sql) or error_log(mysql_error());
		$dsatz = mysql_fetch_assoc($res);

		$id = $dsatz['id'];
		$title = $dsatz['title'];
		$content = $dsatz['content'];
		$page = $dsatz['page'];

		$input_hidden = "name='id' value='". $id ."'";

	}else if(isset($_REQUEST['page'])){
		$page = mysql_real_escape_string($_REQUEST['page']);
		
		$input_hidden = "name='save_type' value='new'";
		$title = "";
		$content = "";

	}else{
		header("Location: article.php");
	}

	if($page == "aboutus"){			$pagetitle = "Über uns";}
	else if($page == "history"){	$pagetitle = "Geschichte";}
	else if($page == "project"){	$pagetitle = "Projekte";}
	else if($page == "program"){	$pagetitle= "Schulrogramm";}
	else if($page == "mainfocus"){	$pagetitle = "Schwerpunkte";}
	else if($page == "activity"){	$pagetitle = "Aktivitäten";}
	else if($page == "ogs"){		$pagetitle = "OGS";}
	else if($page == "foundation"){	$pagetitle = "Förderverein";}
	else if($page == "impressum"){	$pagetitle = "Impressum";}
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
						<li><a href="article.php" id="active" title="Artikel">Artikel</a></li>
						<li><a href="date.php" title="Termine">Termine</a></li>
						<li><a href="image.php" title="Bilder">Bilder</a></li>
						<li><a href="login.php" title="Logout">Logout</a></li>
					</ul>
				</nav>
			</aside>
			<section id="content">
				<h1>Artikel&uuml;bersicht // <?=($pagetitle)?></h1>
				<nav>
					<ul>
						<li><a title="&Uuml;beruns" href="article.php?page=aboutus">&Uuml;ber uns</a></li>
						<li><a title="Geschichte" href="article.php?page=history">Geschichte</a></li>
						<li><a title="Projekte" href="article.php?page=project">Projekt</a></li>
						<li><a title="Schulprogramm" href="article.php?page=program">Schulprogramm</a></li>
						<li><a title="Schwerpunkte" href="article.php?page=mainfocus">Schwerpunkte</a></li>
						<li><a title="Aktivit&auml;ten" href="article.php?page=activity">Aktivit&auml;ten</a></li>
						<li><a title="OGS" href="article.php?page=ogs">OGS</a></li>
						<li><a title="F&ouml;rderverein" href="article.php?page=foundation">F&ouml;rderverein</a></li>
						<li><a title="Impressum" href="article.php?page=impressum">Impressum</a></li>
					</ul>
				</nav>
				<br/><br/><br/>

				<form method="POST" action="article_save.php">
					<input type="hidden" <?=($input_hidden)?>/>
					<input type="hidden" name="page" value="<?=($page)?>" />
					<label>Titel</label>
					<input type="text" name="title" placeholder="Überschrift des Artikel" value="<?=($title)?>"/>
					</label>Inhalt</label>
					<textarea name="content" placeholder="Inhalt des Artikels"><?=($content)?></textarea>
					<input type="submit" role="btn" value="Speichern" />
				</form>

				<?php
					include_once("formatting_tip.html");
				?>
			</section>
		</section>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->