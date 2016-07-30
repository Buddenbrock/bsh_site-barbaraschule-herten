<?php
	$server = "localhost";
	$benutzer = "root";
	$passwort = "";
	$db_name = "barbaraschule_cms";

	$verbindung = mysql_connect($server,$benutzer,$passwort);
	$db_selected = mysql_select_db($db_name) or error_log(mysql_error());

	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

  if(!$db_selected || !$verbindung){
   header('Location: error.php');
 }
?>
