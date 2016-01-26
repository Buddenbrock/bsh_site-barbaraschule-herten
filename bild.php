<?php
	include_once('head.php');

	if(!isset($_REQUEST['id'])){
		header('Location: galerie.php');
	}

	$id = $_REQUEST['id'];

	$sql = "SELECT * FROM imagegroup WHERE id = '".$id."'";
	$res = mysql_query($sql) or error_log(mysql_error());
	$dsatz = mysql_fetch_assoc($res);
	$title = $dsatz['group_title'];

	$sql = "SELECT * FROM image WHERE groupname = '".$id."' ORDER BY date ASC";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

<script src="js/galerie.js"></script>

<article class="full">
	<h1><?=($title)?></h1>
</article>
<article role="galerie" class="full">

<?php
	while($dsatz = mysql_fetch_assoc($res)){
		$img_id = $dsatz['id'];
		$url = $dsatz['url'];
		$img_title = $dsatz['title'];
?>
		<a href="img/upload/<?=($url)?>" data-lightbox="coverage" data-title="<?=($img_title)?>">
			<img src="img/upload/<?=($url)?>" title="<?=($img_title)?>" />
		</a>
<?php
	}
?>
	<div class="clear">&nbsp;</div>
</article>

<article>
	<a href="galerie.php" title="zurück zur Übersicht">zurück zur Übersicht</a>
</article>

<?php
	include_once('foot.php');
?>