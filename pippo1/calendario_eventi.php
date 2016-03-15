<!doctype html>
<html>
    <head>
    	<meta charset="UTF-8">
        <title>Index</title>
     
    </head>

	<body>
		<?php include ("include/header1.php");?>
        	<?php include ("include/content.php");?>

       <div class="col-md-12">
       <div class="col-md-3 cincin">
       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading4">
      <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">SELEZIONA SEDE</a></h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
      <div class="panel-body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-sm-10">
              <input type="nome" class="form-control" id="nome" name="nome" placeholder="inserisci sede">
            </div>
          </div>
          
           
        </form>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">SELEZIONA MESE</a></h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <div class="col-sm-10">
             
          <div class="form-group">
            <div class="col-sm-10">
              <input type="mese" class="form-control" id="mese" name="mese" placeholder=" inserisci mese">
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>

</div></div>
         <button type="button" class="btn3 btn-primary">CERCA!</button>
       
       
        </div>    </div>
        <div class="col-md-6 cincin bluecerca">
        </div>
        
              
    </body>
     <script src="js/bootstrap.js"></script>
</html>