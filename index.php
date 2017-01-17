<head>
	<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<body>

	<h1>The begining</h1>

	<?
	//kollar om spelaren har ett namn
	if ($_GET['player_name'] == NULL):
	?>

	<?php
		//if ($_GET['knife'] == 1):
	?>

	<?php 
	//endif
	?>

	<form action="index.php">
		<label>You wake up in a dark room uable to remember any of the events leading up to this point. Can you even rember your name?<br></label>
		<input type="text" name="player_name">
		<input type="hidden" name="page" value="1">
		<input type="submit" value="Skicka">
	</form>

	<?php
	elseif ($_GET['page'] == 1):
	?>

	<p>It seems like the room you're in is some kind of basement. On your left there's a drawer, behind you a tiny window lighting up the room, on the right a sofa and in front of you a wooden door.</p>
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
	<h2>Basement</h2>
	<p>It's a old oak drawer whit brass handels. Upon the drawer there's a pictureframe with an old man, somewhere inside your head you get a slight feeling of deja vu like you've met that man before but noting more. As you open the drawer filled with diffrent kinds of cloths and a tiny bejewled knife. You take the knife just to be safe.</p>
	<?php //($_GET['knife'] == 1): ?>
	<form action="index.php">
		<label>What are you planing on doing next?</label><br>
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
	elseif ($_GET['page'] == 3):
	?>
	<h2>Basement</h2>
	<p>You look thrue the tiny window on the wall. Your face is level whit the ground, there's a thin layer of snow lit up by the full moon above. There is noting recogniseble outside and your hope to be able to findout where you are dies. Upon close inspection of the window you notice it's far to tiny for you to get thrue.</p>
	<form action="index.php">
		<label>You turn around to decide you next move.</label><br>
		<input type="radio" name="page" value="2" id="drawer">
		<label for="west">Inspect the drawer.</label><br>
		<input type="radio" name="page" value="4" id="sofa">
		<label for="east">Sit on the sofa.</label><br>
		<input type="radio" name="page" value="5" id="door">
		<label for="east">Open the door.</label><br>
		<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
		<input type="submit" value="Skicka">
		
	</form>

	<?php
	elseif ($_GET['page'] == 5):
	?>
	<h2>Basement</h2>
	<p>You walk up the the door it's quite a stirdy wooden door, nothing perticulary fancy. The door slowly creeks as you open it reviling a stone staircase going upwards to what you asume to be tha main floor.</p>
	<form action="index.php">
		<input type="radio" name="page" value="2" id="drawer">
		<label for="west">You turn around to inspect the drawer.</label><br>
		<input type="radio" name="page" value="3" id="window">
		<label for="north">You turn around to look out the window.</label><br>
		<input type="radio" name="page" value="4" id="sofa">
		<label for="east">You turn around to sit on the sofa.</label><br>
		<input type="radio" name="page" value="6" id="stair">
		<label for="east">Walk up the stairs.</label><br>
		<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
		<input type="submit" value="Skicka">
	</form>

	<?php
	elseif ($_GET['page'] == 4):
	?>
	<h2>Basement</h2>
	<p>You decide to sit down on the sofa, it's an old style with wooden carvings. It's a real shame to leave this fine sofa in this basement, you think. You try and rember what happened but your memeory of the last days is completly whiped, the last thing you rember is something about a funeral.</p>
	<form action="index.php">
		<input type="radio" name="page" value="2" id="drawer">
		<label for="west">Inspect the drawer.</label><br>
		<input type="radio" name="page" value="3" id="window">
		<label for="north">Look out the window.</label><br>
		<input type="radio" name="page" value="5" id="door">
		<label for="east">Open the door.</label><br>
		<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
		<input type="submit" value="Skicka">
	</form>

	<?php
	elseif ($_GET['page'] == 6):
	?>
	<h2>Basement</h2>
	<p>You walk up the stone stair towards yet another door. This door is white, decoraded and looks like any door in a older house. You open the door to reveal a entrance hall, the floor is covered in a red carpet, infront of you a staircase, on the left a big door proboly the entrance and on the right a hallway.</p>
	<form action="index.php">
		<input type="radio" name="page" value="7" id="front_door">
		<label for="west">You walk up the the front door.</label><br>
		<input type="radio" name="page" value="8" id="staircase">
		<label for="north">You decide to go up to the second floor</label><br>
		<input type="radio" name="page" value="9" id="hallway">
		<label for="east">You walk into the hallway.</label><br>
		<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
		<input type="submit" value="Skicka">
	</form>

	<?php
	endif
	?>

</body>
