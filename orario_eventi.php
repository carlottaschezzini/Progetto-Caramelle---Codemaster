
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<?php include ("include/content.php");?>

</head>

<body>
	<?php include ("include/header1.php");?>
<div class="col-md-12">
  <div><a href="home.php" class="btn btn-default button_orario1 red">CAMBIA DATA</a></div>
  </div>
        <form class="form-horizontal form_orario">
        
          <h4>AULA MENTA - MILANO <small>10 posti</small></h4>
          <br>
          <br>
          <div class="col-md-12">
          <table class="tabella_orario">
         

    <tr height="100" class="tr_orario"> <?php for ($numeri = 9 ;$numeri <=19; $numeri++) {
	?>
      <?php 
	  
	 
	  	if ($numeri % 2) {
			 			 
			 echo "<td height=60px width=60px bgcolor=#55C4B1><div class='col-md-2'>$numeri:00</div></td>";
		} else {
			echo "<td height=60px width=60px bgcolor=#A8A8A8><div class='col-md-2'>$numeri:00</div></td>";
		}
	  ?>
    <?php } ?>
    </tr>


</table>
<div> <a href="conferma_prenotazione.php" class="btn btn-default button_orario1 red">PRENOTA</a></div>

</div>  
          
            </form>
          
          
        
<footer class="footer"></footer>
</body>
</html>