<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$sql = "SELECT * FROM messages";
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
						<li><a href="message.php" id="active" title="Nachrichten">Nachrichten</a></li>
						<li><a href="article.php" title="Artikel">Artikel</a></li>
						<li><a href="date.php" title="Termine">Termine</a></li>
						<li><a href="image.php" title="Bilder">Bilder</a></li>
						<li><a href="login.php" title="Logout">Logout</a></li>
					</ul>
				</nav>
			</aside>
			<section id="content">
				<h1>Nachrichten</h1>
				<table>
					<tr>
						<th>Name</th>
						<th>Nachricht</th>
						<th>Eingangsdatum</th>
						<th></th>
					</tr>

					<?php
						while($dsatz = mysql_fetch_assoc($res)){
							$id = $dsatz['id'];
							$name = $dsatz['name'];
							$date = date("d.m.Y", strtotime($dsatz['date']));
							$message = $dsatz['message'];
							$email = $dsatz['email']
					?>

					<tr>
						<td><a href="mailto:<?=($email)?>"><?=($name)?></a></td>
						<td><?=($message)?></td>
						<td><?=($date)?></td>
						<td>
							<a href="message_delete.php?id=<?=($id)?>" title="l&ouml;schen"><img src="img/delete.png"/>
						</td>
					</tr>

					<?php
						}
					?>

				</table>
				<br/><br/>
			</section>
		</section>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->