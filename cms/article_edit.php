<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if(isset($_REQUEST['id'])){
		$id = mysql_real_escape_string($_REQUEST['id']);

		$sql = "SELECT * FROM content WHERE id = '".$id."'";
		$res = mysql_query($sql) or error_log(mysql_error());
		$dsatz = mysql_fetch_assoc($res);

		$id = $dsatz['id'];
		$title = $dsatz['title'];
		$content = $dsatz['content'];
		$page = $dsatz['page'];

		$input_hidden = "name='id' value='". $id ."'";

	}else if(isset($_REQUEST['page'])){
		$page = mysql_real_escape_string($_REQUEST['page']);

		$input_hidden = "name='save_type' value='new'";
		$title = "";
		$content = "";

	}else{
		header("Location: article.php");
	}

  if($page == "aboutus"){		     	$pagetitle = "&Uuml;ber uns";}
  else if($page == "history"){  	$pagetitle = "Geschichte";}
  else if($page == "schoollife"){	$pagetitle = "Schulleben";}
  else if($page == "ogs"){		    $pagetitle = "OGS";}
  else if($page == "foundation"){	$pagetitle = "F&ouml;rderverein";}
  else if($page == "contact"){  	$pagetitle = "Kontakt";}
  else if($page == "impressum"){	$pagetitle = "Impressum";}
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
				<h1>Artikel&uuml;bersicht // <?=($pagetitle)?></h1>
        <nav>
					<ul>
						<li><a title="&Uuml;ber uns" href="article.php?page=aboutus">&Uuml;ber uns</a></li>
						<li><a title="Geschichte" href="article.php?page=history">Geschichte</a></li>
						<li><a title="Schullife" href="article.php?page=schoollife">Schulleben</a></li>
						<li><a title="OGS" href="article.php?page=ogs">OGS</a></li>
						<li><a title="F&ouml;rderverein" href="article.php?page=foundation">F&ouml;rderverein</a></li>
            <li><a title="Kontakt" href="article.php?page=contact">Kontakt</a></li>
						<li><a title="Impressum" href="article.php?page=impressum">Impressum</a></li>
					</ul>
				</nav>
				<br/><br/><br/>

				<form method="POST" action="article_save.php">
					<input type="hidden" <?=($input_hidden)?>/>
					<input type="hidden" name="page" value="<?=($page)?>" />
					<label>Titel</label>
					<input type="text" name="title" placeholder="Überschrift des Artikel" value="<?=($title)?>"/>
					</label>Inhalt</label>
					<textarea name="content" placeholder="Inhalt des Artikels"><?=($content)?></textarea>
					<input type="submit" role="btn" value="Speichern" />
				</form>
			</section>
		</section>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->
