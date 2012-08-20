<?php
class Create{
	
	/**
	* Permet de creer des inputs facilement
	* @author baloran
	*
	*/
	static public function input($type, $name, $value = null, $class = null, $id = null){
		echo "<input type='$type' name='$name' value='$value' class='$class' id='$id'>";
	}

	/**
	* Permet de creer des formulaires facilement
	* @author baloran
	*
	*/
	static public function form($action,$method){
		echo "<form action='$action' method='$method'>";
	}

	static public function form_end(){
		echo "</form>";
	}


}
?>
