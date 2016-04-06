<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Index</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <?php include ("include/content_calendario.php");?>
		<?php include ("include/content.php");?>
        <?php include ("include/calendar_js.php");?>
</head>

<body>
<?php include ("include/header2.php");?>
<div class="col-md-12">
  <div class="col-md-3 cincin">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <h4>SELEZIONA DATA E CERCA PER :</h4>
     
       
       
          <div class="panel-body">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
							<label for="data_fine" class="col-sm-2 control-label">da</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="data_fine" name="data_fine">
							</div>
						</div>
            <div class="form-group">
							<label for="data_fine" class="col-sm-2 control-label">a</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="data_fine" name="data_fine">
							</div>
						</div>
             
            </form>
          </div>

   
          <div class="panel-body">
             <hr>
    
     <h4>SEDE :</h4>
            <form class="form-horizontal" method="post">
              <div class="form-group">
              <div class="col-sm-10">
              <div class="form-group">
                <label for="sel1">Seleziona sede:</label>
                <select class="form-control" id="sel1">
                  <option>Sede Milano</option>
                  <option>Sede Pisa</option>
                  <option>Sede Avellino</option>
                  <option>Sede Firenze</option>
                </select>
              </div>
              
              <button type="button" class="btn4 btn-primary">INSERISCI</button>
            </form>
          </div>
      
    
  </div>
  <hr>
  <h4>UTENTE :</h4>
          <div class="panel-body">
            <form class="form-horizontal" method="post">
              <div class="form-group">
              <div class="col-sm-10">
              <div class="form-group">
                  	<input type="text" class="form-control" id="nome" placeholder="Nome">
              </div>
              <div class="form-group">
                  	<input type="text" class="form-control" id="cognome" placeholder="Cognome">
              </div>
              
              <button type="button" class="btn4 btn-primary">INSERISCI</button>
            </form>
          </div>
      
    
  </div>

          </div>
        </div>
      </div>



</div>
</div>

</body>
<script src="js/bootstrap.js"></script>
</html>