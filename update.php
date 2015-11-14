<?php
	$msgs = glob('msg/*.txt');
		foreach ($msgs as $filename) {
			$msg = file_get_contnets($filename);
			echo '<p>' . htmlentities($msg) . '</p>'
		}
?>
