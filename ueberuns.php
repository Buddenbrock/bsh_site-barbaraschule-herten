<?php
  include_once('res/php/header.php');

  $sql = "SELECT * FROM content WHERE page = 'aboutus' AND show_article = '1' ORDER BY created ASC";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

    <main>
      <div class="row box blue">
        <div class="small-12 columns">
          <h1>Über uns</h1>
        </div>
      </div>

<?php
	include_once('res/php/under_construction.php');
	while($dsatz = mysql_fetch_assoc($res)){
    $title = $dsatz['title'];
		$content = $dsatz['content'];
?>

      <div class="row box blue">
        <div class="small-12 medium-6 columns">
          <h3><?=($title)?></h3>
          <?=($content)?>
        </div>
        <div class="small-12 medium-6 columns">
          <img src="res/images/coverage/coverage_img_2.jpg" title="Barbaraschule Herten" alt="Das Schulgebäude der Barbaraschule Herten" />
        </div>
      </div>
<?php
  }
 ?>
    </main>

<?php
  include_once('res/php/footer.php');
?>
