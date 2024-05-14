<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h2>Existing Contacts</h2>
		<?php
			$file = fopen("contactList.txt", "r") or die("Unable to open file!");
			// illiterate through to end of file
			while(!feof($file)) {
				echo fgets($file) . "<br />";
			}
			fclose($file);
		?>
		<div class="link-container"> 
		<a href="index.html">Return to the main Page</a>
		</div>
	</div>
</body>
</html>
