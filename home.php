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
            <button type="button" class="btn btn-default">SCEGLI LUOGO</button>
          </div>
          <div class="col-md-6">
            <div id='wrap'>
              <div id='calendar'></div>
            </div>
          </div>
        </div>
    </body>
</html>
