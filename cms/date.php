<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$sql = "SELECT * FROM date";
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
						<li><a href="date.php" id="active" title="Termine">Termine</a></li>
						<li><a href="image.php" title="Bilder">Bilder</a></li>
						<li><a href="login.php" title="Logout">Logout</a></li>
					</ul>
				</nav>
			</aside>
			<section id="content">
				<h1>Termine</h1>
				<table>
					<tr>
						<th>Titel</th>
						<th>Beschreibung</th>
						<th>Datum</th>
						<th></th>
					</tr>
					
					<?php
						while($dsatz = mysql_fetch_assoc($res)){
							$id = $dsatz['id'];
							$title = $dsatz['title'];
							$date = date("d.m.Y", strtotime($dsatz['date']));
							$description = $dsatz['description'];
							$show = $dsatz['show_date'];
							
							if($show == "1"){
								$light = "on";
							}else{
								$light = "off";
							}
					?>
					
					<tr>
						<td><?=($title)?></td>
						<td><?=($description)?></td>
						<td><?=($date)?></td>
						<td>
							<a href="date_show.php?id=<?=($id)?>" title="ausblenden"><img src="img/light_<?=($light)?>.png"/></a>
							<a href="date_edit.php?id=<?=($id)?>" title="bearbeiten"><img src="img/edit.png"/></a>
							<a href="date_delete.php?id=<?=($id)?>" title="l&ouml;schen"><img src="img/delete.png"/>
						</td>
					</tr>
					<?php
						}
					?>
				</table>
				<a role="btn" title="neuer Termin" href="date_edit.php">neuen Termin erstellen</a><br/><br/>
			</section>
		</section>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->