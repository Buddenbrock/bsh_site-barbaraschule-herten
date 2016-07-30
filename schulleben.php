<?php
  include_once('res/php/header.php');

  $sql = "SELECT * FROM news WHERE page = 'schoolnews' AND show_news = '1'  ORDER BY created DESC";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

    <main>
      <div class="row box blue">
        <div class="small-12 columns">
          <h1>Schulleben</h1>
        </div>
      </div>

<?php
	include_once('res/php/under_construction.php');
	while($dsatz = mysql_fetch_assoc($res)){
		$title = $dsatz['newstitle'];
    $content = $dsatz['description'];
		$date = date("d.m.Y", strtotime($dsatz['created']));
?>

      <div class="row box blue">
        <div class="small-12 columns">
          <h3><?=($date)?> - <?=($title)?></h3>
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
