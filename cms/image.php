<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$sql = "SELECT * FROM imagegroup ORDER BY created ASC";
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
					?>

				<table>
					<tr>
						<th>Bild</th>
						<th>Titel</th>
						<th>Erstellt am</th>
						<th></th>
					</tr>

					<?php
						while($dsatz = mysql_fetch_assoc($res)){
							$id = $dsatz['id'];
							$title = $dsatz['group_title'];
							$date = date("d.m.Y", strtotime($dsatz['created']));
							
							$sql1 = "SELECT * FROM image WHERE groupname = '".$id."'";
							$res1 = mysql_query($sql1) or error_log(mysql_error());
							$dsatz1 = mysql_fetch_assoc($res1);
								$url = $dsatz1['url'];
								$image_title = $dsatz1['title'];
					?>

					<tr>
						<td>
							<center>
								<a href="image_detail.php?id=<?=($id)?>">
									<img src="../img/upload/<?=($url)?>" title="<?=($image_title)?>" />
								</a>
							</center>
						</td>
						<td><?=($title)?></td>
						<td><?=($date)?></td>
						<td>
							<a href="image_delete.php?imagegroup_id=<?=($id)?>" title="l&ouml;schen"><img src="img/delete.png"/>
						</td>
						
					</tr>

					<?php
						}
					?>

				</table>
				<a role="btn" title="neue Bilder" href="image_new.php">neue Bilder einpflegen</a><br/><br/>
			</section>
		</section>
	</body>
</html>