
<?php

	/*
		CONNESSIONE AL DATABASE
	*/
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "root";
	$db_name = "pippo";
	
	$connessione = mysqli_connect($db_host, $db_user, $db_pass) or die("Errore di connessione: ".mysqli_connect_error());
	mysqli_select_db($connessione, $db_name);
session_start();
define(_PAGINA_INIZIALE, "home.php");
	?>
