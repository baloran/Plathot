<?php
class Bone extends Controller{
	/**
	* Permet de creer la structure html
	* @param $doctype doctype specifie le doctype
	* @param $lang lang specifie la lang fr, us
	*/
	static public function struct($doctype,$lang=null,$charset = null){
		if ($doctype == 'html5') {
			echo '<!DOCTYPE HTML>';
		}
		if ($lang != null) {
			$lang_maj = strtoupper($lang);
			echo "<html lang='$lang-$lang_maj'>";
		}
		echo '<head>';
		if ($charset != null) {
			if ($chaset = 'utf8') {
				$charset_ = "UTF-8";
			}
			echo "<meta charset='$charset_'>";
		}
		
	}
}
