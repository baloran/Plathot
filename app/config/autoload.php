<?php
/**
* Fichier autoload.php
* Permet de charger les library, script et co
* @author baloran
* @link http://baloran.fr baloran.fr
*/

/* Charger librairie javascript : 
	-angularjs
	-mootools
*/
$load['js'] = array('mootools');

/* Charger les librairie core :
	- database
	- cache
*/
$load['core'] = array('cache','database');

/* Charger les function :
	- form
	- multilang
	- g_analytics	
*/
$load['func'] = array('multilang','form');