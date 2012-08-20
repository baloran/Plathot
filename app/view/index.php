<div id="content">
	<?php
		if (isset($plathot_update_message )) {
			echo $plathot_update_message;
		}
		Create::form('login','POST');
		Create::input('input','pseudo','Ton pseudo');
		Create::input('password','pseudo','');
		Create::input('submit','','Envoyer');
		Create::form_end();
	?>
</div>
<div id="footer">
	<?= PLATHOT_URL ?>
</div>