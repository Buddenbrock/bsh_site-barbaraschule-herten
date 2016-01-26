<?php
	include_once('head.php');
?>

<article class="full">
	<h1>Kollegium</h1>
</article>
<article class="full">

<?php
	$sql = "SELECT * FROM image WHERE groupname = '1'";
	$res = mysql_query($sql) or error_log(mysql_error());
	$dsatz = mysql_fetch_assoc($res);
	$title = $dsatz['title'];
	$url = $dsatz['url'];

?>

		<a href="img/upload/<?=($url)?>" data-lightbox="gruppenfoto" data-title="Kollegium der Barbaraschule"><img role="gruppenfoto" title="Kollegium der Barbaraschule" src="img/upload/<?=($url)?>"/></a>
		<p role="bildbeschreibung"><?=($title) ?></p>

</article>

<?php
	include_once('foot.php');
?>