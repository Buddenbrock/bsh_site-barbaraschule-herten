<?php
	include_once('head.php');

	$sql = "SELECT * FROM date WHERE show_date = '1' ORDER BY date DESC";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

<article class="full">
	<h1>Schulprogramm</h1>
</article>

<?php
	include_once('under_construction.php');
	while($dsatz = mysql_fetch_assoc($res)){
		$title = $dsatz['title'];
		$content = $dsatz['description'];
		$date = date("d.m.Y", strtotime($dsatz['date']));
?>

<article class="full">
	<h2><?=($date)?> - <?=($title)?></h2>
	<?=($content)?>
</article>

<?php
	}
	include_once('foot.php');
?>