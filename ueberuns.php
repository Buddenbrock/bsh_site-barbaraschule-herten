<?php
	include_once('head.php');

	$sql = "SELECT * FROM content WHERE page = 'aboutus' AND show_article = '1' ORDER BY created ASC";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

<article class="full">
	<h1>Über uns</h1>
</article>

<?php
	include_once('under_construction.php');
	while($dsatz = mysql_fetch_assoc($res)){
		$title = $dsatz['title'];
		$content = $dsatz['content']
?>

<article class="half">
	<h2><?=($title)?></h2>
	<?=($content)?>
</article>
<article class="half">
	<a href="img/coverage/coverage1.jpg" data-lightbox="coverage" data-title="Das Schulgebäude der Barbaraschule Herten">
		<img src="img/coverage/coverage1.jpg" title="Barbaraschule Herten" alt="Das Schulgebäude der Barbaraschule Herten" />
	</a>
</article>

<?php
	}
	include_once('foot.php');
?>