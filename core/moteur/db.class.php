<?php

	$host		= 'localhost';
	$username	= 'root';
	$password	= '';
	$database	= 'portfolio';

try {
	$db = new PDO('mysql:host='.$host.';dbname='.$database,$username,$password);
} catch (PDOException $e) {
	echo $e->getMessage();
}