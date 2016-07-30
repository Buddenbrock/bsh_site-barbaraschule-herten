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
