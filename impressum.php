<?php
	include_once('head.php');

	$sql = "SELECT * FROM content WHERE page = 'impressum' AND show_article = '1'";
	$res = mysql_query($sql) or die(mysql_error());
?>

<article class="full">
	<h1>Impressum</h1>
</article>

<?php
	include_once('under_construction.php');
	while($dsatz = mysql_fetch_assoc($res)){
		$title = $dsatz['title'];
		$content = $dsatz['content']
?>

<article class="full">
	<h2><?=($title)?></h2>
	<?=($content)?>
</article>

<?php
	}
	include_once('foot.php');
?>