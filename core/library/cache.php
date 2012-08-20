<?php
/*
* Gestion du cache
*/
class Cache(){
	
	/**
	* Verification du cache et création
	* 
	* @param $url url charge l'url du cache voulu
	*
	* Permet de generer le cache si le fichier n'existe pas.
	* Si il existe il est charger automatiquement.
	*/
	static private function getUrl($url){
		$file = 'core/cache/'.md5($url);
		if (file_exists($file) && filemtime($file) > time()-600) {
			$data = file_get_contents($file);
		}else{
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HEADER, 0);
			curl_setopt($curl, CURLOPT_TIMEOUT, 3);
			$data = curl_exec($curl);
			file_put_contents($file,$data);
		}
		return $data;
	}
}