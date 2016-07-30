<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if(isset($_REQUEST['page'])){
		$page = mysql_real_escape_string($_REQUEST['page']);

    if($page == "schoolnews"){		    $pagetitle = "Schulnews";}
    else if($page == "classnews"){  	$pagetitle = "Klassennews";}
    else if($page == "ogsnews"){  	  $pagetitle = "OGS-News";}

		$sql = "SELECT * FROM news WHERE page = '".$page."'";
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
				<h1>News&uuml;bersicht // <?=($pagetitle)?></h1>

				<nav>
					<ul>
						<li><a title="Schulnews" href="news.php?page=schoolnews">Schulnews</a></li>
						<li><a title="Klassennews" href="news.php?page=classnews">Klassennews</a></li>
            <li><a title="OGS-News" href="news.php?page=ogsnews">OGS-News</a></li>
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
            <th>News</th>
						<th>Erstellt am</th>
						<th></th>
					</tr>

					<?php
						while($dsatz = mysql_fetch_assoc($res)){
							$id = $dsatz['id'];
							$title = $dsatz['newstitle'];
							$description = $dsatz['description'];
							$created = date("d.m.Y", strtotime($dsatz['created']));

							if($dsatz['show_news'] == "1"){
								$light = "on";
							}else{
								$light = "off";
							}
					?>

					<tr>
						<td><?=($title)?></td>
						<td><?=($description)?></td>
						<td><?=($created)?></td>
						<td>
							<a href="news_show.php?id=<?=($id)?>" title="ausblenden"><img src="img/light_<?=($light)?>.png"/></a>
							<a href="news_delete.php?id=<?=($id)?>" title="l&ouml;schen"><img src="img/delete.png"/>
						</td>
					</tr>

					<?php
						}
					?>

				</table>
				<a role="btn" title="neue News" href="news_edit.php?page=<?=($page)?>">neue News erstellen</a><br/><br/>

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
