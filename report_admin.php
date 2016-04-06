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
<link href="css/demo.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/jqbar.css"/>
<div class="col-md-12">
  <div class="col-md-3 cincin">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <h4>SELEZIONA DATA E CERCA PER :</h4>
      <div >
        <form class="form-horizontal form_report" method="post" enctype="multipart/form-data">
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
      <div>
        <hr>
        <h4>SEDE :</h4>
        <form class="form-horizontal form_seleziona" method="post">
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
          <button type="button" class="btn4 btn-primary">CERCA</button>
        </form>
      </div>
    </div>
    <hr>
    <h4>UTENTE :</h4>
    <div >
      <form class="form-horizontal form_seleziona" method="post">
        <div class="form-group">
        <div class="col-sm-10">
        <div class="form-group">
          <input type="text" class="form-control" id="nome" placeholder="Nome">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="cognome" placeholder="Cognome">
        </div>
        <button type="button" class="btn4 btn-primary">CERCA</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
  <div id="skillset" class="sixteen columns ">
    <div class="eight columns">
      <div class="bars MT30">
        <div id="bar-1"> </div>
        <div id="bar-2"> </div>
        <div id="bar-3"> </div>
        <div id="bar-4"> </div>
        <div id="bar-5"> </div>
        <div id="bar-6"> </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js" type="text/javascript"></script> 
  <script src="js/jqbar.js" type="text/javascript"></script> 
  <script type="text/javascript">

        $(document).ready(function () {

            $('#bar-1').jqbar({ label: 'ASP.NET', value: 99, barColor: '#D64747' });

            $('#bar-2').jqbar({ label: 'C#', value: 99, barColor: '#FF681F' });

            $('#bar-3').jqbar({ label: 'Javascript', value: 90, barColor: '#ea805c' });

            $('#bar-4').jqbar({ label: 'HTML5', value: 50, barColor: '#88bbc8' });

            $('#bar-5').jqbar({ label: 'CSS3', value: 60, barColor: '#939393' });

            $('#bar-6').jqbar({ label: 'jQuery', value: 70, barColor: '#3a89c9' });


            $('#bar-7').jqbar({ label: 'Wal', value: 90, barColor: '#D64747', orientation: 'v' });

            $('#bar-8').jqbar({ label: 'Ohi', barColor: '#FF681F', value: 70, orientation: 'v' });

            $('#bar-9').jqbar({ label: 'Song', barColor: '#ea805c', value: 50, orientation: 'v' });

            $('#bar-10').jqbar({ label: 'Pisho', barColor: '#88bbc8', value: 90, orientation: 'v' });

            $('#bar-11').jqbar({ label: 'Mara', barColor: '#939393', value: 70, orientation: 'v' });

            $('#bar-12').jqbar({ label: 'Dagha', barColor: '#3a89c9', value: 50, orientation: 'v' });

        });
    </script></div>
</div>
</div>
</body>
<script src="js/bootstrap.js"></script>
</html>