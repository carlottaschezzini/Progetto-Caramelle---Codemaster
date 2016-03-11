<?php $logged = isset($_GET['logged']); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Registrati</title>
<?php include ("include/content.php");?>
</head>

<body>
<?php include ("include/header.php");?>
<?php if (!$logged): ?>
<?php
		
        if($_POST["azione"]) {
		
		#	rimuovo i caratteri non consentiti
		$username = preg_replace("/[^A-Za-z0-9]/", '', $_POST["username"]);		
		$password = preg_replace("/[^A-Za-z0-9]/", '', $_POST["password"]);
		$password = sha1($password);
		$nome_utente = preg_replace("/[^a-zA-Z0-9 àèéìòù\']/", '', $_POST["nome_utente"]);
		/* CICCIO */
			
		
		switch($_POST["azione"]) {
			case "inserimento":		$sql = "INSERT INTO utenti
												(username, password)
											VALUES
												('$username', '$password')";
									if($username && $password) {
										$esito = mysqli_query($connessione, $sql) or die($sql." ".mysqli_error($connessione));
										$id_utenti = mysqli_insert_id($connessione);
									}
									break;
									
		
		}
		
		
			
		
	} ?>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <h3>REGISTRATI ALLA PIATTAFORMA COMPILANDO IL SEGUENTE FORM:</h3>
  <br>
  <br>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Inserisci il nome utente" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Inserisci la password di accesso" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-10">
      <button type="submit" class="btn btn-default" name="azione" value="inserimento">Accedi</button>
    </div>
  </div>
</form>

<?php endif; ?>
</body>
</html>