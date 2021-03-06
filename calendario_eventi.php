<!doctype html>
<html lang="it">
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
    <h4>CERCA PER :</h4>
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
    </div>
  </div>
  <button type="button" class="btn3 btn-primary">CERCA</button>
</div>
</div>
<div class="col-md-6 margine_table">
<h4>CLICCA SULL'EVENTO PER VEDERE I PARTECIPANTI :</h4>
<table class="table table-bordered">
  <tbody>
    <tr>
      <th scope="col" class="red_table ">SEDE</th>
      <th scope="col" class="red_table ">AULA</th>
      <th scope="col" class="red_table ">EVENTO</th>
    </tr>
    <tr>
      <td><small>SEDE MILANO</small></td>
      <td><small>AULA XXX</small></td>
      <td data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7"><small>ADDIO AL CELIBATO - 07/04/2016</small></td>
    </tr>
    </div>
  
  
    <td colspan="6" class="hiddenRow"><div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
        <div class="panel-body"><H3><small>ANTONIO<BR>NICOLA<BR>CARLOTTA</small></H3></div>
      </div></td>
      </div>
      </div>
  </tr>
  <tr>
    <td><small>SEDE AVELLINO</small></td>
    <td><small>AULA XXX</small></td>
    <td>&nbsp;</td>
  </tr>
    </tbody>
  
</table>
</div></div>
<footer class="footer"></footer>
</body>
<script src="js/bootstrap.js"></script>
</html>