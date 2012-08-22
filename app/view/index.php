<div id="content">
	<?php
		if (isset($plathot_update_message )) {
			echo $plathot_update_message;
		}
		Forms::form('login','POST');
		Forms::input('input','pseudo','Ton pseudo');
		Forms::input('password','pass','');
		Forms::input('submit',null,'Envoyer',null,'submit');
		Forms::form_end();
		print_r($_POST);
	?>
</div>
<div id="footer">
	<?= PLATHOT_URL ?>
</div>