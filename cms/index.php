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

	$sql = "SELECT id FROM messages";
	$res = mysql_query($sql) or error_log(mysql_error());
	$num_message = mysql_num_rows($res);

	$sql = "SELECT id FROM content";
	$res = mysql_query($sql) or error_log(mysql_error());
	$num_content = mysql_num_rows($res);

	$sql1 = "SELECT * FROM date WHERE show_date = '1'";
	$res1 = mysql_query($sql1) or error_log(mysql_error());

	$sql2 = "SELECT * FROM messages";
	$res2 = mysql_query($sql2) or error_log(mysql_error());
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
				<img src="img/avatar.png" title="<?=($_SESSION['user']['name'])?>"/>
				<p><?=($_SESSION['user']['name'])?></p>
				<hr />
				<nav>
					<ul>
						<li><a href="index.php" id="active" title="Dashboard">Dashboard</a></li>
						<li><a href="message.php" title="Nachrichten">Nachrichten</a></li>
						<li><a href="article.php" title="Artikel">Artikel</a></li>
						<li><a href="date.php" title="Termine">Termine</a></li>
						<li><a href="image.php" title="Bilder">Bilder</a></li>
						<li><a href="login.php" title="Logout">Logout</a></li>
					</ul>
				</nav>
			</aside>
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
					<a href="message.php"><section id="dashboard_message" class="dashboard_box_small grey">
						<?=($num_message)?>
					</section></a>
					<section class="dashboard_box_big grey">
						<h2>Nachrichten</h2>
						<section class="message">

<?php
while($dsatz = mysql_fetch_assoc($res2)){
	$name = $dsatz['name'];
	$email = $dsatz['email'];
	$message = $dsatz['message'];
?>

							<article>
								<h3><?=($name)?></h3>
								<span ><?=($email)?></span>
								<p><?=($message)?></p>
							</article>

<?php
}

if(mysql_num_rows($res2) == null){
	echo "<article><p>Zurzeit liegt keine Nachricht vor</p></article>";
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