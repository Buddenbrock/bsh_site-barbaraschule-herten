<?php
	include_once('head.php');
?>

<article class="full">
	<h1>Klassen</h1>
</article>
<article class="half">
	<h2>3. Klassen</h2>
	
<?php
	$sql = "SELECT * FROM image WHERE groupname = '2'";
	$res = mysql_query($sql) or error_log(mysql_error());
	
	while($dsatz = mysql_fetch_assoc($res)){
		$title = $dsatz['title'];
		$url = $dsatz['url'];

?>

		<a href="img/upload/<?=($url)?>" data-lightbox="gruppenfoto" data-title="<?=($title) ?>"><img role="gruppenfoto" title="<?=($title) ?>" src="img/upload/<?=($url)?>"/></a>
		<p role="bildbeschreibung"><?=($title) ?></p>

<?php
	}
?>

</article>
<article class="half">
	<h2>4. Klassen</h2>
	
<?php
	$sql = "SELECT * FROM image WHERE groupname = '3'";
	$res = mysql_query($sql) or error_log(mysql_error());
	
	while($dsatz = mysql_fetch_assoc($res)){
		$title = $dsatz['title'];
		$url = $dsatz['url'];

?>

		<a href="img/upload/<?=($url)?>" data-lightbox="gruppenfoto" data-title="<?=($title) ?>"><img role="gruppenfoto" title="<?=($title) ?>" src="img/upload/<?=($url)?>"/></a>
		<p role="bildbeschreibung"><?=($title) ?></p>

<?php
	}
?>

</article>

<?php
	include_once('foot.php');
?>