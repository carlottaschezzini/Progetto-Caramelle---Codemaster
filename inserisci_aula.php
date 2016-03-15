<?php $logged = TRUE; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<?php include ("include/global.php");?>
<?php include ("include/content.php");?>
</head>

<body>
<?php include ("include/header2.php");?>
<div class="home-content">
  <div class="form-group">
    <button type="button" class="btn btn-default red" >
    <a href="home.php">PRENOTA UN'AULA</a>
    </button>
  </div>
  <div class="form-group">
    <button type="button" class="btn btn-default red"><a href="calendario_eventi.php">CALENDARIO EVENTI</a></button>
  </div>
  <div class="form-group">
    <button type="button" class="btn btn-default red">LE MIE PRENOTAZIONI</button>
  </div>
</div>
</body>
<script src="js/bootstrap.min.js"></script>
</html>