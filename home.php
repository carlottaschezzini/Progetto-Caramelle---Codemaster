<!DOCTYPE html>
<html lang="it">
<html>
    <head>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <?php include ("include/content_calendario.php");?>
		<?php include ("include/content.php");?>
        <?php include ("include/calendar_js.php");?>
    </head>
    <body>
		<?php include ("include/header1.php");?>
        <div class="col-md-12">
          <div class="col-sm-3">
            <h3>DOVE VUOI PRENOTARE? </h3>
            <br>
            <br>
           <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      SCEGLI LUOGO
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">MILANO</a></li>
      <li><a href="#">AVELLINO</a></li>
      <li><a href="#">FIRENZE</a></li>
    </ul>
  </div>
           
          </div>
          <div class="col-md-6 calendario_down">
            <div id='wrap'>
              <div id='calendar'></div>
            </div>
          </div>
        </div>
       
     
    </body>
    <!-- JavaScript Aggiornato minimale e compilato -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</html>
