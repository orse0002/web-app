<?php
/**
*Small Description of File:
*The wicked wonderful awesome magic ball!
*
*@author Patrick Orser <patrickorser@gmail.com>
*@copyright 2012 A Group of Moving Pictures
8@license BSD-3-Clause <http://spdx.org/licenses/BSD-3-Clausess>
*@version 1.0.0
*@package Wicked Wonderful Awesome Magic Ball

*/
require_once 'includes/validate.php';
require_once 'includes/db.php';

$sql=$db->query('
		SELECT id, choices
		FROM 8ball
		ORDER BY RAND() LIMIT 1
');

$results=$sql->fetch();

?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Wicked Awesome Magic Eight Ball</title>
    <link rel="stylesheet" href="css/general.css">
    </head>
<body>
	<h1>The Wonderful Wicked Awesome</h1>
	<h1 class="title">Magic Ball!!!!</h1>
    <?php if ($complete) : ?>
	<?php else :?>
     <div class="center">
         <figure>
            <img src="images/ball-2.png" >
            <figcaption><?php echo $results ['choices'] ?></figcaption>
          </figure>
        
        <form method="post" action="page-2.php">
            <div class="quest">
                <label for="wish">Make Another Wish?<?php if (isset($errors['wish'])) : ?> <strong>is required</strong><?php endif; ?></label>
                <textarea id="wish" name="wish" required></textarea>
            </div>
            <button id="add" type="submit">Submit</button>
        </form>
        <?php endif;?>
     </div>

	<footer><img src="images/cp.png"> 2012 GMP</footer>


</body>
</html>
