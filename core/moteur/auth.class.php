<?php
class Auth{
	static function islog(){
		global $db;
		if (isset($_SESSION['Auth']) && isset($_SESSION['Auth']['email']) && isset($_SESSION['Auth']['password'])) {
			$q = array('email'=>$_SESSION['Auth']['email'],'password'=>$_SESSION['Auth']['password']);
			$sql = 'SELECT email,password FROM users WHERE email = :email AND password = :password';
			$req = $db->prepare($sql);
			$req->execute($q);
			$count = $req->rowCount($sql);
				if ($count == 1) {
					return true;
				}else{
					return false;
				}
		}else{
			return false;
		}
	}	
}