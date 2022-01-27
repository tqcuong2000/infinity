<!DOCTYPE html>
<html>
<head>
	<base href="/infinity/" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>InfinityI - Beta Website</title>
	<?php include_once "./application/style.php" ?>
</head>
<body>
	<?php 
		session_start();
        require_once "./application/bridge.php";
		$myApp = new App();
	?>
</body>
</html>