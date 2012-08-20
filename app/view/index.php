<div id="content">
	<?php
		if (isset($plathot_update_message )) {
			echo $plathot_update_message;
		}
		Create::form('login','POST');
		Create::input('input','pseudo','Ton pseudo');
		Create::input('password','pass','');
		Create::input('submit',null,'Envoyer',null,'submit');
		Create::form_end();
		print_r($_POST);
	?>
</div>
<div id="footer">
	<?= PLATHOT_URL ?>
</div>