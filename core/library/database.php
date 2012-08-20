<?php
class Database{
	
	/**
	* Function qui gère la connexion a la base de donnée
	* Elle se fait grace a PDO
	*
	*/
	static public function connect(){
		require_once APP_CONFIG.'database.php';

		try {
		    $dbh = new PDO('mysql:host='.$database['default']['host'].';dbname='.$database['default']['dbname'], $database['default']['user'], $database['default']['password']);
	    }catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}
}