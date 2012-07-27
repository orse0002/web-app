<?php
/**
*Small Description of File:
*The wicked wonderful awesome magic ball!
*
*@author Patrick Orser <patrickorser@gmail.com>
*@copyright 2012 A Group of Moving Pictures
8@license BSD-3-Clause <put link here>
*@version 1.0.0
*@package Wicked Wonderful Awesome Magic Ball

PUT ON TOP OF ALL PHP FILES!!!!!! ALWAYS INSIDE A PHP BLOCK NEVER OUTSIDE!

*/
require_once 'includes/validate.php';

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Wicked Wonderful Awesome Magic Ball!</title>
<link rel="stylesheet" href="css/general.css">
</head>
<body>

<h1>The Wonderful Wicked Awesome</h1>
<h1 class="title">Magic Ball!!!!</h1>
<div class="center">
<img src="images/ball.png" width="500px" height="500px">
</div>
<?php if ($complete) : ?>
<?php else :?>

<form method="post" action="index.php">
		<div class="quest">
			<label for="wish">Put In Your Wish and See What The Future Holds!<?php if (isset($errors['wish'])) : ?> <strong>is required</strong><?php endif; ?></label>
			<textarea id="wish" name="wish" required></textarea>
		</div>
			<button id="add" type="submit">Submit</button>
</form>
<?php endif;?>



<footer><img src="images/cp.png"> 2012 GMP</footer>


</body>

</html>
