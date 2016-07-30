<?php
  include_once('res/php/header.php');

  $sql = "SELECT * FROM content WHERE page = 'contact' AND show_article = '1'";
	$res = mysql_query($sql) or error_log(mysql_error());
?>

    <main>
      <div class="row box blue">
        <div class="small-12 columns">
          <h1>Kontakt</h1>
        </div>
      </div>

<?php
	include_once('res/php/under_construction.php');
	while($dsatz = mysql_fetch_assoc($res)){
		$title = $dsatz['title'];
		$content = $dsatz['content']
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
     <div class="row box">
       <div class="small-12 columns">
         <h3>Anfahrt</h3>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.6004025144084!2d7.074019999999999!3d51.61221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8e56f59eab7ad%3A0x5443384ab0d9d146!2sWallstra%C3%9Fe+32%2C+45701+Herten!5e0!3m2!1sde!2sde!4v1431956804932" frameborder="0"></iframe>
       </div>
     </div>
    </main>

<?php
  include_once('res/php/footer.php');
?>
