<?php
  include_once('res/php/header.php');

  $sql = "SELECT * FROM date WHERE show_date = '1' ORDER BY date DESC";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

    <main>
      <div class="row box blue">
        <div class="small-12 columns">
          <h1>Termine</h1>
        </div>
      </div>

<?php
	include_once('res/php/under_construction.php');
	while($dsatz = mysql_fetch_assoc($res)){
    $title = $dsatz['title'];
		$content = $dsatz['description'];
		$date = date("d.m.Y", strtotime($dsatz['date']));
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
