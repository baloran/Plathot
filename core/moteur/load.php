<?php
require_once 'app/config/autoload.php';

class Load{

	/**
	* Function permettant d'inserer dans les balise head ou body
	* @author baloran
	* @param $var var valeur a ajouter dans les balises, $place place ou placer cette valeur
	*
	*/
	static private function load_insert($var,$place){
		if (!empty($var) & !empty($place)){
			if (preg_match($place,"head")) {
				$script = 	'<script type="text/javascript">function var(){
							document.getElementById("load").innerHTML = '.$var.'; }
							window.onload = var;
							</script>';
				print_r($script);
			}
		}
	}

	/**
	* Function loader permet de charger les différents fichiers
	*/
	static function loader(){

		global $load;
			// Library Javascript
			if (in_array('mootools', $load['js'])) {
				echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.5/mootools-yui-compressed.js"></script>';
			}if (in_array('angularjs', $load['js'])) {
				echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.1/angular.min.js"></script>';
			}

			// Load function
			if (in_array('multilang', $load['func'])) {
				echo 'its ok';
			}

			// Load library
			if (in_array('database', $load['core'])) {
				echo 'its ok';
			}
		
	}
}