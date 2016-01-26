<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if(isset($_REQUEST['id'])){
		$id = mysql_real_escape_string($_REQUEST['id']);

		$sql = "SELECT * FROM date WHERE id = '".$id."'";
		$res = mysql_query($sql) or error_log(mysql_error());
		$dsatz = mysql_fetch_assoc($res);

		$id = $dsatz['id'];
		$title = $dsatz['title'];
		$description = $dsatz['description'];
		$date = date("d.m.Y", strtotime($dsatz['date']));

		$input_hidden = "name='id' value='". $id ."'";
	}else{
		$input_hidden = "name='save_type' value='new'";
		$title = "";
		$description = "";
		$date = "";
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
						<li><a href="date.php" id="active" title="Termine">Termine</a></li>
						<li><a href="image.php" title="Bilder">Bilder</a></li>
						<li><a href="login.php" title="Logout">Logout</a></li>
					</ul>
				</nav>
			</aside>
			<section id="content">
				<h1>Termin bearbeiten</h1>
				<form method="POST" action="date_save.php">
					<input type="hidden" <?=($input_hidden)?>/>
					<label>Titel</label>
					<input type="text" name="title" placeholder="Name des Termines" value="<?=($title)?>"/>
					<label>Datum</label>
					<input type="date" name="date" placeholder="Datum des Termines (<?=(date("d.m.Y"))?>)" value="<?=($date)?>"/>
					</label>Beschreibung</label>
					<textarea name="description" placeholder="Beschreibung des Termin"><?=($description)?></textarea>
					<input type="submit" role="btn" value="Speichern" />
				</form>

				<?php
					include_once("formatting_tip.html");
				?>
			</section>
		</section>
	</body>
</html>