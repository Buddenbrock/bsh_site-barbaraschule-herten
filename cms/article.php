<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if(isset($_REQUEST['page'])){
		$page = mysql_real_escape_string($_REQUEST['page']);

		if($page == "aboutus"){			$pagetitle = "Über uns";}
		else if($page == "history"){	$pagetitle = "Geschichte";}
		else if($page == "project"){	$pagetitle = "Projekte";}
		else if($page == "program"){	$pagetitle= "Schulrogramm";}
		else if($page == "mainfocus"){	$pagetitle = "Schwerpunkte";}
		else if($page == "activity"){	$pagetitle = "Aktivitäten";}
		else if($page == "ogs"){		$pagetitle = "OGS";}
		else if($page == "foundation"){	$pagetitle = "Förderverein";}
		else if($page == "impressum"){	$pagetitle = "Impressum";}

		$sql = "SELECT * FROM content WHERE page = '".$page."'";
		$res = mysql_query($sql) or error_log(mysql_error());
	}else{
		$pagetitle = "";
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
				<br/><br/>

<?php
	if(isset($_REQUEST['page'])){
?>

<br/>
				<table>
					<tr>
						<th>Titel</th>
						<th>Inhalt</th>
						<th>Erstellt am</th>
						<th></th>
					</tr>

					<?php
						while($dsatz = mysql_fetch_assoc($res)){
							$id = $dsatz['id'];
							$title = $dsatz['title'];
							$content = $dsatz['content'];
							$created = date("d.m.Y", strtotime($dsatz['created']));
							
							if($dsatz['show_article'] == "1"){
								$light = "on";
							}else{
								$light = "off";
							}
					?>

					<tr>
						<td><?=($title)?></td>
						<td><?=($content)?></td>
						<td><?=($created)?></td>
						<td>
							<a href="article_show.php?id=<?=($id)?>" title="ausblenden"><img src="img/light_<?=($light)?>.png"/></a>
							<a href="article_edit.php?id=<?=($id)?>" title="bearbeiten"><img src="img/edit.png"/></a>
							<a href="article_delete.php?id=<?=($id)?>" title="l&ouml;schen"><img src="img/delete.png"/>
						</td>
					</tr>

					<?php
						}
					?>

				</table>
				<a role="btn" title="neuen Artikel" href="article_edit.php?page=<?=($page)?>">neuen Artikel erstellen</a><br/><br/>

<?php
	}else{
?>

				<br/>Bitte w&auml;hlen Sie eine Seite.

<?php
	}
?>

			</section>
		</section>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->