<?php
/**
* @author baloran
* @link http://baloran.fr
*/

class Overall{
	
	/**
	* Permet de rooter les urls
	* 
	*/
	public static function url(){
		require_once 'app/config/config.php';
		require_once 'core/moteur/load.php';
		require_once 'core/moteur/plathot.php';
		if (!empty($_GET['page']) && is_file('app/view/'.$_GET['page'].'.php'))
		{
	        include 'app/view/includes/header.php';
	        if (is_file('app/controller/'.$_GET['page'].'.php')) {
	        	include 'app/controller/'.$_GET['page'].'.php';
	        }
	        	include 'app/view/'.$_GET['page'].'.php';
			}
			else{
		        include 'app/view/includes/header.php';
		        include 'app/view/index.php';
			}
	}

	function pxUrlToLink($commenttext) { 
		//motifs à repérer
		    $in = array(
		        '`((?:https?|ftp)://\\S+)`',
		        '`;\)`'
		        );
		//remplacement des chaînes correspondant aux motifs 
		    $out = array(  
		        '<a href="$1" title="$1">$1</a>',
		        '<img src="xmedia/emoticones/clin_d_oeil.gif" alt="Clin d\'oeil" />'
		  ); 
		// Exécution de l'expression régulière et envoi du texte formaté 
		$commenttext = preg_replace($in, $out, $commenttext);  
		return $commenttext;
	}
}
