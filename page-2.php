<?php

require_once 'includes/validate.php';
require_once 'includes/db.php';

$sql=$db->query('
		SELECT id, choices
		FROM 8ball
		ORDER BY RAND() LIMIT 1
');

$results=$sql->fetchAll();

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
