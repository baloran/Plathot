<?php
/**
* Plathot
* @author baloran
* @link http://plathot.com plathot
* 
* Gestion des versions
* Gestion des mise a jour
*
*/

// Version de Plathot
define('PLATHOT_VERSION','0.1');

// Status de Plathot
define('PLATHOT_STATUS', 'alpha');

// URL Plathot
define('PLATHOT_URL', 'http://plathot.com');

// URL de mise a jour plathot
define('PLATHOT_URL_UPDATE', 'http://baloran.fr/plathot_update.xml');

// Si l'utilisateur accepte les verification de mise a jour
if ($plathot_update == 1) {
	$plathot_curl = curl_init(); // Curl init
	curl_setopt($plathot_curl, CURLOPT_URL, PLATHOT_URL_UPDATE); // Charger page update
	curl_setopt($plathot_curl, CURLOPT_RETURNTRANSFER, true); // Empecher l'affichage du résultat
	$plathot_dvb = curl_exec($plathot_curl); // Executer curl
	$plathot_dv = new simpleXMLElement($plathot_dvb); // Permettre de le parcourir en tant que xml
	foreach ($plathot_dv->version as $p) {
		if ($p != PLATHOT_VERSION) { // Si il y a des nouvelle mise a jour disponible
			$plathot_update_message = 'Nouvelle version disponible !'.
			$plathot_update_message = ' <a href="#">Changelog</a>';
		}
	}
}