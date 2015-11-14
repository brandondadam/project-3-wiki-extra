<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Wiki</title>
		<link rel="stylesheet" href="wiki.css">
	</head>
	<body>
		<h1>
			The coolest wiki ever!
		</h1>
	<div id="page">
		<div id="msgs">
			<?php
			$msgs = glob('msg/*.txt');
			foreach ($msgs as $filename) {
				$msg = file_get_contnets($filename);
				echo '<p>'.htmlentities($msg).'</p>';
			}
			?>
		</div>
		<form action="submit.php" id="type" method="post">
			<input type="text" name="msg" placeholder="Type your message here." autocomplete="off">
			<input type="submit" value="Send">
		</form>
	</div>
	<script src="jquery-1.11.3.min.js"></script>
	<script src="wiki.js"></script>
	</body>
</html>
