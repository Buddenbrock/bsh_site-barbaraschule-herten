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

    <?=( include_once('include_editor.php') )?>
	</head>
	<body>
		<section id="body">
      <?php
        include_once('aside.php');
       ?>
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
