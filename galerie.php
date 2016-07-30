<?php
  include_once('res/php/header.php');

  $sql = "SELECT * FROM imagegroup ORDER BY created DESC";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

    <main>
      <div class="row box blue">
        <div class="small-12 columns">
          <h1>Galerie</h1>
        </div>
      </div>

<?php
	include_once('res/php/under_construction.php');
	while($dsatz = mysql_fetch_assoc($res)){
    $id = $dsatz['id'];
		$title = $dsatz['group_title'];
		$date = date("d.m.Y", strtotime($dsatz['created']));

		$sql1 = "SELECT * FROM image WHERE groupname = '".$id."'";
		$res1 = mysql_query($sql1) or error_log(mysql_error());
		$num = mysql_num_rows($res1);
?>

      <div class="row box">
        <div class="small-12 columns">
          <h3><?=($title)?></h3>
          <a href="bild.php?id=<?=($id)?>">
        		<figure class="galerie_overview">
        			<div class="img_num">
        				alle <?=($num) ?> Bilder<br/>anzeigen
        			</div>

        <?php
        	while($dsatz1 = mysql_fetch_assoc($res1)){
        		$url = $dsatz1['url'];
        		$image_title = $dsatz1['title'];
        ?>

        			<img src="img/upload/<?=($url)?>" title="<?=($image_title)?>" />

        <?php
        	}
        ?>

        		</figure>
        	</a>
        </div>
      </div>
<?php
  }
 ?>
    </main>

<?php
  include_once('res/php/footer.php');
?>
