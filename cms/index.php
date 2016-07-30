<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	$sql = "SELECT id FROM image";
	$res = mysql_query($sql) or error_log(mysql_error());
	$num_image = mysql_num_rows($res);

	$sql = "SELECT id FROM date";
	$res = mysql_query($sql) or error_log(mysql_error());
	$num_date = mysql_num_rows($res);

	$sql = "SELECT id FROM news";
	$res = mysql_query($sql) or error_log(mysql_error());
	$num_news = mysql_num_rows($res);

	$sql = "SELECT id FROM content";
	$res = mysql_query($sql) or error_log(mysql_error());
	$num_content = mysql_num_rows($res);

	$sql1 = "SELECT * FROM date WHERE show_date = '1'";
	$res1 = mysql_query($sql1) or error_log(mysql_error());

	$sql2 = "SELECT * FROM news WHERE show_news = '1' ORDER BY created DESC";
	$res2 = mysql_query($sql2) or die(mysql_error());
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
				<h1>Dashboard</h1>

				<section id="col">
					<section id="dashboard_datum" class="dashboard_box_small blue">
						<?=(date("d.m.Y"))?>
					</section>
					<a href="image.php"><section id="dashboard_img" class="dashboard_box_small blue">
						<?=($num_image)?>
					</section></a>
					<a href="article.php"><section id="dashboard_content" class="dashboard_box_small blue">
						<?=($num_content)?>
					</section></a>
				</section>
				<section id="col">
					<a href="date.php"><section id="dashboard_date" class="dashboard_box_small green">
						<?=($num_date)?>
					</section></a>
					<section class="dashboard_box_big green">
						<h2>Termine</h2>
						<section class="message">

<?php
while($dsatz = mysql_fetch_assoc($res1)){
	$title = $dsatz['title'];
  $date = date("d.m.Y", strtotime($dsatz['date']));
?>

							<article>
								<h3><?=($title)?></h3>
								<span ><?=($date)?></span>
							</article>

<?php
}if(mysql_num_rows($res1) == null){
	echo "<article><p>Zurzeit liegt kein Termin vor</p></article>";
}

?>

						</section>
					</section>
				</section>
				<section id="col">
					<a href="news.php"><section id="dashboard_message" class="dashboard_box_small grey">
						<?=($num_news)?>
					</section></a>
					<section class="dashboard_box_big grey">
						<h2>News</h2>
						<section class="message">

<?php
while($dsatz = mysql_fetch_assoc($res2)){
	$title = $dsatz['newstitle'];
	$description = $dsatz['description'];
	$page = $dsatz['page'];

  if($page == "schoolnews"){		    $pagetitle = "Schulnews";}
  else if($page == "classnews"){  	$pagetitle = "Klassennews";}
  else if($page == "ogsnews"){  	  $pagetitle = "OGS-News";}
?>

							<article>
								<h3><?=($title)?></h3>
								<span ><?=($pagetitle)?></span>
								<p><?=($description)?></p>
							</article>

<?php
}

if(mysql_num_rows($res2) == null){
	echo "<article><p>Zurzeit liegt keine News vor</p></article>";
}
?>

						</section>

					</section>

				</section>
				<section id="clear"></section>
			</section>
		</section>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->
