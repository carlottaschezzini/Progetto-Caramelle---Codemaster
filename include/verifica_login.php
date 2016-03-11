<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>verifica_login</title>
</head>

<body>
<?php
	session_start();
	if(!$_SESSION["utenti"]) {
		header("location: index.php?azione=no-login");
		die;
	}
	?>
</body>
</html>