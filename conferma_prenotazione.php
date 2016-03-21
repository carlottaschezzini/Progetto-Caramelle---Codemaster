<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Index</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
<?php include ("include/header1.php");?>
<?php include ("include/content.php");?>
<div class="col-md-12">
<div class="col-md-3 cincin">
  <h3>HAI SELEZIONATO :</h3>
  <br>
  <h4><small>AULA FRAGOLA - MILANO <br>
    ORE 15:00 - 1 APRILE 2016</small></h4>
</div>
<div class="col-md-7 cincin">
  <h3>CHI PARTECIPA CON TE AL MEETING?<br>
    INSERISCI NOME E COGNOME DEI PARTECIPANTI</h3>
  <div class="col-md-8 padding_null">
    <form>
      <div class="form-group">
        <label for="nome">nome</label>
        <input type="text" class="form-control" id="nome" placeholder="nome">
      </div>
      <div class="form-group">
      
        <label for="email">cognome</label>
        <input type="email" class="form-control" id="email" placeholder="email">
      </div>
      
      <button type="submit" class="btn btn-default">INVITA</button>
    </form>
    <hr>
    <h4>INVITATI :</h4>
    <ul class="lista_emal">
    <small>antonio</small><br>
    <small>nicola</small><br>
    <small>carlotta</small>
    </ul>
  </div>
  <div class="col-md-2 bottone_conferma"> <a href="prenotazione_confermata.php" class="btn btn-default button_orario1 red">CONFERMA</a> <br>
    <a href="home.php" class="btn btn-default button_orario1 blue_conferma">INDIETRO&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
</div>
</body>
</div>
<footer class="footer"></footer>
<script src="js/bootstrap.js"></script>
</html>