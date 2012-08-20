<?php
/**
*
*
*
*/

//Fonction de calcul du temps :
function microtime_float() {
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}