<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<h1>The begining</h1>

<?
//kollar om spelaren har ett namn
if ($_GET['player_name'] == NULL):
?>
<form action="index.php">
	<label>You wake up in a dark room uable to remember any of the events leading up to this point. Can you even rember your name?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="Skicka">
</form>
<?php
elseif ($_GET['page'] == 1):
?>
<p>It seems like the room you're in is some kind of basement. On your left there's some kind of drawer, behind you a tiny window lighting up the room, on the right a sofa and in front of you a wooden door.</p>
<form action="index.php">
	<label>What do you do?</label><br>
	<input type="radio" name="page" value="2" id="drawer">
	<label for="west">Inspect the drawer.</label><br>
	<input type="radio" name="page" value="3" id="window">
	<label for="north">Look out the window.</label><br>
	<input type="radio" name="page" value="4" id="sofa">
	<label for="east">Sit on the sofa.</label><br>
	<input type="radio" name="page" value="5" id="door">
	<label for="east">Open the door.</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 2):
?>
<h2>Stugan</h2>
<p></p>
<img src="img/hut.jpg">
<form action="index.php">
	
</form>

<?php
elseif ($_GET['page'] == 3):
?>
<h2>Stugan</h2>
<p></p>
<img src="img/hut.jpg">
<form action="index.php">
	
</form>

<?php
elseif ($_GET['page'] == 4):
?>
<h2>Stugan</h2>
<p></p>
<img src="img/hut.jpg">
<form action="index.php">
	
</form>

<?php
elseif ($_GET['page'] == 5):
?>
<h2>Stugan</h2>
<p></p>
<img src="img/hut.jpg">
<form action="index.php">
	
</form>

<?php
endif
?>
