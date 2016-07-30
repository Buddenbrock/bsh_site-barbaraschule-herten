<?php
	session_start();
	include_once("secure_access_barrier.php");
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
				<h1>Support</h1>
        <p>
          Sollten Sie Probleme mit diesem System haben oder in der Bedienung Fehler auftreten,<br>
          wenden Sie sich bitte an den unten aufgeführten CMS-Administrator.
        </p><br><br>
        <p>
          <b>CMS Administrator</b><br>
          Dirk Buddenbrock<br>
          <a href="mailto:support@buddenbrock.eu">support[at]buddenbrock[dot]eu</a>
        </p><br><br>

        <p>
          <b>Lizenz</b><br>
          Dieses Produkt steht unter der Copyright-Lizenz und<br>
          darf nicht ohne die Zustimmung des Entwicklers<br>
          vertrieben werden.
          Eine OpenSoure-Nutzung ist nicht vorgesehen.<br>
          <br>
          Lizenzdauer: <i>2016</i> bis <i>unbefristet</i><br>
          Lizenzklasse: <i>Vollversion</i><br>
          Version: <i>1.2</i>
        </p>
			</section>
		</section>
	</body>
</html>

<!-- ================================================================ -->
<!-- |             design & program by Dirk Buddenbrock             | -->
<!-- ================================================================ -->
