<?php
	include_once('head.php');

	$sql = "SELECT * FROM content WHERE page = 'activity' AND show_article = '1' ORDER BY created DESC";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

<article class="full">
	<h1>Aktivitäten</h1>
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