<?php
  include_once('res/php/header.php');

  $sql = "SELECT * FROM content WHERE page = 'impressum' AND show_article = '1'";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

    <main>
      <div class="row box blue">
        <div class="small-12 columns">
          <h1>Impressum</h1>
        </div>
      </div>

<?php
	include_once('res/php/under_construction.php');
	while($dsatz = mysql_fetch_assoc($res)){
		$title = $dsatz['title'];
		$content = $dsatz['content'];
?>

      <div class="row box">
        <div class="small-12 columns">
          <h3><?=($title)?></h3>
          <?=($content)?>
        </div>
      </div>
<?php
  }
 ?>
    </main>

<?php
  include_once('res/php/footer.php');
?>
