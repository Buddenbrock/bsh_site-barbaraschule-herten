<?php
	session_start();
	include_once("secure_access_barrier.php");
	include_once("database.php");

	if(isset($_REQUEST['id'])){
		$id = mysql_real_escape_string($_REQUEST['id']);

		$sql = "SELECT * FROM news WHERE id = '".$id."'";
		$res = mysql_query($sql) or error_log(mysql_error());
		$dsatz = mysql_fetch_assoc($res);

		$id = $dsatz['id'];
		$title = $dsatz['newstitle'];
    $date = date("d.m.Y", strtotime($dsatz['created']));
    $description = $dsatz['description'];
		$page = $dsatz['page'];

		$input_hidden = "name='id' value='". $id ."'";

	}else if(isset($_REQUEST['page'])){
		$page = mysql_real_escape_string($_REQUEST['page']);

		$input_hidden = "name='save_type' value='new'";
		$title = "";
		$description = "";

	}else{
		header("Location: news.php");
	}

  if($page == "schoolnews"){		    $pagetitle = "Schulnews";}
  else if($page == "classnews"){  	$pagetitle = "Klassennews";}
  else if($page == "ogsnews"){  	  $pagetitle = "OGS-News";}
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
				<h1>News&uuml;bersicht // <?=($pagetitle)?></h1>
        <nav>
					<ul>
						<li><a title="Schulnews" href="news.php?page=schoolnews">Schulnews</a></li>
						<li><a title="Klassennews" href="news.php?page=classnews">Klassennews</a></li>
            <li><a title="OGS-News" href="news.php?page=ogsnews">OGS-News</a></li>
					</ul>
				</nav>
				<br/><br/><br/>

        <form method="POST" action="news_save.php">
					<input type="hidden" <?=($input_hidden)?>/>
          <input type="hidden" name="page" value="<?=($page)?>" />
					<label>Titel</label>
					<input type="text" name="title" placeholder="Name der News" value="<?=($title)?>"/>
<?php
  if(isset($_REQUEST['page'])){
 ?>
					<label>Datum</label>
					<input type="date" name="date" placeholder="Datum der News (<?=(date("d.m.Y"))?>)" value="<?=($date)?>"/>
<?php
  }
 ?>
        </label>News</label>
					<textarea name="description" placeholder="News"><?=($description)?></textarea>
					<input type="submit" role="btn" value="Speichern" />
				</form>

				<?php
					include_once("formatting_tip.html");
				?>
			</section>
		</section>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->
