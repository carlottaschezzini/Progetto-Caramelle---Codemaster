
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<?php include ("include/content.php");?>

</head>

<body>
	<?php include ("include/header1.php");?>

  
        <form class="form-horizontal">
        
          <h3>DOVE VUOI PRENOTARE?
            </h3>
          <br>
          <br>
          
          
            <div class="col-sm-3" inline-block>
              	<button type="button" class="btn btn-default">SCEGLI LUOGO</button>
            </div>
            <div class="col-sm-9"   >
  <?php include ("/users/nicopunzi/Desktop/Codemaster/Sitolocale/pippo/include/calendar.php");?>
   </div>
         
        </form>
        <div class="col-sm-4">
        <div id="datepicker"></div>
        </div>
        
        

</body>
</html>