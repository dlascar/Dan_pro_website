<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Test Page</title>
	</head>
	
	<body>
		<h1>php test page</h1>
		
		<?php
			$directory = dirname(__FILE__);
			echo "<p>Full path to this directory is: " .
			$directory . "</p>";
		?>
		<hr>
	</body>
</html>