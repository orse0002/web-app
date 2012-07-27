<?php 

$errors = array();
$complete = false;

$wish = filter_input(INPUT_POST, 'wish', FILTER_SANITIZE_STRING);


if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Check to see if the form has been submitted before validating
	if (empty($wish)) {
		$errors['wish'] = true;
	}
	
	if (empty($errors)){
		$complete = true;
		header('Location: page-2.php');
	}
	
}

?>