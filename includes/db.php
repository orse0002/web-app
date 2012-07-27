<?php

$choices = getenv('DB_CHOICES');
$db = new PDO($choices);
$db->exec('SET NAMES utf8');