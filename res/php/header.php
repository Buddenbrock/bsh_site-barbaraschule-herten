<?php
	include_once('cms/database.php');
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8"/>
    <title>Barbaraschule Herten</title>

    <meta name="Robots" content="noindex, nofollow" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />-->

    <link rel="icon" type="img/x-icon" href="res/images/favicon/favicon.ico" />
		<link rel="shortcut icon" href="res/images/favicon/favicon.png" />
		<link rel="apple-touch-icon-precomposed" href="res/images/favicon/apple-touch-icon-precomposed.png" />
		<link rel="apple-touch-icon" href="res/images/favicon/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" href="res/images/favicon/apple-touch-icon-57x57.png" sizes="57x57" />
		<link rel="apple-touch-icon" href="res/images/favicon/apple-touch-icon-72x72.png" sizes="72x72" />
		<link rel="apple-touch-icon" href="res/images/favicon/apple-touch-icon-76x76.png" sizes="76x76" />
		<link rel="apple-touch-icon" href="res/images/favicon/apple-touch-icon-114x114.png" sizes="114x114" />
		<link rel="apple-touch-icon" href="res/images/favicon/apple-touch-icon-144x144.png" sizes="144x144" />
		<link rel="apple-touch-icon" href="res/images/favicon/apple-touch-icon-152x152.png" sizes="152x152" />

    <link rel="stylesheet" href="res/css/style.css"/>

    <!--Foundation-->
    <link rel="stylesheet" href="res/foundation-6.2.3-complete/css/foundation.css"/>
    <script src="res/foundation-6.2.3-complete/js/vendor/jquery.js"></script>
    <script src="res/foundation-6.2.3-complete/js/vendor/foundation.min.js"></script>

    <script src="res/javascript/lightbox.min.js"></script>
    <script src="res/javascript/galerie.js"></script>
    <script src="res/javascript/responsiveslides.min.js"></script>
    <script src="res/javascript/menu.js"></script>
    <script src="res/javascript/totop.js"></script>

    <script>
      $(function() {
        $(".rslides").responsiveSlides();
      });
    </script>
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="row">
        <div class="small-9 medium-7 large-4 columns">
          <a href="index.php"><img src="res/images/logo-barbaraschule-herten.svg"></a>
        </div>
        <div class="small-12 medium-4 large-8 columns">
          <button name="menu" type="button" id="menu_button"></button>
          <nav>
            <ul id="menu">
  						<li><a title="Überuns" href="ueberuns.php">Über uns</a>
  							<ul>
  								<li><a title="Geschichte" href="geschichte.php">Geschichte</a></li>
  							</ul>
  						</li>
  						<li><a title="Schulleben" href="schulleben.php">Schulleben</a>
  							<ul>
                  <li><a title="Klassennews" href="klassennews.php">Klassennews</a></li>
  								<li><a title="Termine" href="termine.php">Termine</a></li>
  							</ul>
  						</li>
  						<li>
                <a title="OGS" href="ogs.php">OGS</a>
                <ul>
                  <li><a title="OGS-News" href="ogsnews.php">OGS-News</a></li>
  							</ul>
              </li>
  						<li><a title="Förderverein" href="foerderverein.php">Förderverein</a></li>
  						<li><a title="Galerie" href="galerie.php">Galerie</a></li>
  					</ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="trenner"></div>
