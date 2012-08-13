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
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$data_source = getenv('DATA_SOURCE');
$db = new PDO($data_source, $user, $pass);
$db->exec('SET NAMES utf8');