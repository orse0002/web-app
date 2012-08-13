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

//test
?>