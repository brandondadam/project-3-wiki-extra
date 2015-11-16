<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Wiki</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>
			The coolest wiki ever!
		</h1>
	<div id="page">
		<form action="submit.php" id="type" onsubmit="return false;" onKeyDown="return addText(event);" method="post">
			<input type="text" name="msg" placeholder="Type your message here." autocomplete="off"/>
			<input type="submit" id="submit" value="Send">
			<input />
		</form>
		<div id="msgs">
			<?php
			$msgs = glob('msg/*.txt');
			foreach ($msgs as $filename) {
				$msg = file_get_contents($filename);
				echo '<p>'.htmlentities($msg).'</p>';
			}
			?>
		</div>
	</div>
	<script src="jquery-1.11.3.min.js"></script>
	<script src="script.js"></script>
	</body>
</html>
