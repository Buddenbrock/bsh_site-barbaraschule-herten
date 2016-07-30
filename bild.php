<?php
  include_once('res/php/header.php');

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

    <main>

      <div class="row box blue">
        <div class="small-12 columns">
          <h1><?=($title)?></h1>
        </div>
      </div>

      <div class="row box">
        <div class="small-12 columns" role="galerie">
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

        </div>
      </div>
      <div class="row box">
        <div class="small-12 columns" role="galerie">
          <a href="galerie.php" title="zurück zur Übersicht">zurück zur Übersicht</a>
        </div>
      </div>
    </main>

<?php
  include_once('res/php/footer.php');
?>
