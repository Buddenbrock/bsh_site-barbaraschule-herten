<?php
	include_once('head.php');
?>

<article class="full">
	<h1>Kontakt</h1>
</article>
<article class="full">

<?php
	if(isset($_REQUEST['success'])){
?>

	<h2>Ihre Nachricht wurde erfolgreich versendet.</h2>

<?php
	}
?>

	<form method="POST" action="message_send.php">
		<label>Name: </label>
		<input type="text" name="name" placeholder="Max Mustermann" required/>
		<label>E-Mail: </label>
		<input type="email" name="mail" placeholder="max@mustermann.de" required/>
		<label>Ihre Nachricht</label>
		<textarea name="message" rows="5" placeholder="Ihre Nachricht" required></textarea>
		<input role="btn" type="submit" name="Absenden" value="Abschicken" />
	</form>
</article>
<article class="full">
	<h2 href="#anfahrt">Anfahrt</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.6004025144084!2d7.074019999999999!3d51.61221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8e56f59eab7ad%3A0x5443384ab0d9d146!2sWallstra%C3%9Fe+32%2C+45701+Herten!5e0!3m2!1sde!2sde!4v1431956804932" frameborder="0"></iframe>
</article>

<?php
	include_once('foot.php');
?>