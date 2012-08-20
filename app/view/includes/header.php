<?php session_start(); 
$_SESSION['Auth'] = array(
				'email'=>'contact@baloran.fr',
				'password'=>'test'
			);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head id="head">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?= THEME_CSS; ?>styles.css">
	<title></title>
</head>
<body>
<div id="header">
	<h1>Plathot</h1><span><?= PLATHOT_VERSION ?></span>
</div>