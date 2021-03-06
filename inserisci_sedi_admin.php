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
<?php include ("include/content.php");?>
<div class="col-md-12">
  <div class="col-md-3 cincin">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <h4>CREA SEDI E AULE</h4>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading4">
          <h5 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">CREA SEDE</a></h5>
        </div>
        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
          <div class="panel-body">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="nome" class="form-control" id="nome_sede" name="nome_sede" placeholder="inserisci sede">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="indirizzo_sede" class="form-control" id="indirizzo_sede" name="indirizzo_sede" placeholder="indirizzo sede">
                </div>
              </div>
              <button type="button" class="btn4 btn-primary">INSERISCI</button>
            </form>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h5 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">CREA AULA</a></h5>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
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
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="nome_aula" class="form-control" id="nome_aula" name="nome_aula" placeholder="inserisci aula">
                </div>
              </div>
               <div class="form-group">
                <div class="col-sm-10">
                  <input type="posti_aula" class="form-control" id="posti_aula" name="posti_aula" placeholder="posti aula">
                </div>
              </div>
              <button type="button" class="btn4 btn-primary">INSERISCI</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
<h4>CANCELLA SEDE O AULA</h4>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading4">
          <h5 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse4">SELEZIONA</a></h5>
        </div>
        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
          <div class="panel-body">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-10">
                  <label for="sel1">Seleziona sede:</label>
                <select class="form-control" id="sel1">
                  <option>Sede Milano</option>
                  <option>Sede Pisa</option>
                  <option>Sede Avellino</option>
                  <option>Sede Firenze</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                 <label for="sel1">Seleziona AULA:</label>
                <select class="form-control" id="sel1">
                  <option>Aula xxx</option>
                  <option>Aula xxx</option>
                  <option>Aula xxx</option>
                  <option>Aula xxx</option>
                </select>
                </div>
              </div>
              <button type="button" class="btn4 btn-primary">CANCELLA</button>
            </form>
          </div>
        </div>
      </div>

<hr>
<h4>MODIFICA SEDE O AULA</h4>
<div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading4">
          <h5 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse4">SELEZIONA</a></h5>
        </div>
        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
          <div class="panel-body">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-10">
                  <label for="sel1">Cambia sede da:</label>
                <select class="form-control" id="sel1">
                  <option>Sede Milano</option>
                  <option>Sede Pisa</option>
                  <option>Sede Avellino</option>
                  <option>Sede Firenze</option>
                </select>
                
                </div>
              
              </div>
               <div class="form-group">
                <div class="col-sm-10">
                  <input type="modifica_nome_sede" class="form-control" id="modifica_nome_sede" name="modifica_nome_sede" placeholder="a">
  </div></div>
              <div class="form-group">
                <div class="col-sm-10">
                 <label for="sel1">Cambia AULA da:</label>
                <select class="form-control" id="sel1">
                  <option>Aula xxx</option>
                  <option>Aula xxx</option>
                  <option>Aula xxx</option>
                  <option>Aula xxx</option>
                </select>
                </div>
              </div>
               <div class="form-group">
                <div class="col-sm-10">
                  <input type="modifica_nome_aula" class="form-control" id="modifica_nome_aula" name="modifica_nome_aula" placeholder="a">
  </div></div>
   <div class="form-group">
                <div class="col-sm-10">
                  <input type="posti_aula" class="form-control" id="posti_aula" name="posti_aula" placeholder="numero posti">
  </div></div>
              <button type="button" class="btn4 btn-primary">MODIFICA</button>
            </form>
          </div>
        </div>
      </div>



</div>
</div>
<div class="col-md-6"><div id='wrap'>
              <div id='calendar'></div>
            </div></div>
</body>
<script src="js/bootstrap.js"></script>
</html>