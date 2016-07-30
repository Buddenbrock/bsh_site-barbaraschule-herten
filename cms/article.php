<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if(isset($_REQUEST['page'])){
		$page = mysql_real_escape_string($_REQUEST['page']);

		if($page == "aboutus"){		     	$pagetitle = "&Uuml;ber uns";}
		else if($page == "history"){  	$pagetitle = "Geschichte";}
		else if($page == "schoollife"){	$pagetitle = "Schulleben";}
		else if($page == "ogs"){		    $pagetitle = "OGS";}
		else if($page == "foundation"){	$pagetitle = "F&ouml;rderverein";}
		else if($page == "contact"){  	$pagetitle = "Kontakt";}
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
				<h1>Artikel&uuml;bersicht // <?=($pagetitle)?></h1>

				<nav>
					<ul>
						<li><a title="&Uuml;ber uns" href="article.php?page=aboutus">&Uuml;ber uns</a></li>
						<li><a title="Geschichte" href="article.php?page=history">Geschichte</a></li>
						<li><a title="Schullife" href="article.php?page=schoollife">Schulleben</a></li>
						<li><a title="OGS" href="article.php?page=ogs">OGS</a></li>
						<li><a title="F&ouml;rderverein" href="article.php?page=foundation">F&ouml;rderverein</a></li>
            <li><a title="Kontakt" href="article.php?page=contact">Kontakt</a></li>
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
