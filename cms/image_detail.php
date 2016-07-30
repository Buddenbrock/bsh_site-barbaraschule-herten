<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if(!isset($_REQUEST['id'])){
		header("Location: image.php");
	}

	$id = mysql_real_escape_string($_REQUEST['id']);

	$sql = "SELECT * FROM image WHERE groupname = '".$id."' ORDER BY date ASC";
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
				<h1>Bilder</h1>

				<?php
						if(isset($_REQUEST['success1'])){
							echo "<p id='info_line_success'>Die Bilder wurden erfolgreich hochgeladen</p>";
						}else if(isset($_REQUEST['success2'])){
							echo "<p id='info_line_success'>Das Bild wurde erfolgreich gelöscht.</p>";
						}else if(isset($_REQUEST['error'])){
							echo "<p id='info_line_danger'>Das Bild konnte nicht gelöscht werden.</p>";
						}

						while($dsatz = mysql_fetch_assoc($res)){
							$id = $dsatz['id'];
							$title = $dsatz['title'];
							$url = $dsatz['url'];
							$date = date("d.m.Y", strtotime($dsatz['date']));
					?>
					<article id="image">
						<img src="../img/upload/<?=($url)?>" title="<?=($title)?>" /><br/>
						<a href="image_delete.php?id=<?=($id)?>" title="l&ouml;schen"><img src="img/delete.png"/></a><br/>
					</article>

					<?php
						}
					?>
				<section id="clear"></section>
			</section>
		</section>
	</body>
</html>
