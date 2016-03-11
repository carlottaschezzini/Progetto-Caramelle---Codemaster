
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registrati</title>
  <?php include ("include/content.php");?>
</head>

<body>
  <?php include ("include/header.php");?>


 <h3 class="form-horizontal" style="padding-left: 12px" > REGISTRATI ALLA PIATTAFORMA COMPILANDO IL SEGUENTE FORM:</h3>

    <br>
    <br>
<form method="post" enctype="multipart/form-data" >

   

    <div class="form-horizontal" >

      
        <div class="col-md-6" style="margin-bottom: 3.7%;">
          <input type="text" class="form-replace" id="nome" name="nome" placeholder="Nome " required  >
        </br>
        <input type="text" class="form-replace" id="cognome" name="cognome" placeholder="Cognome " required>
      </br>
      <input type="text" class="form-replace" id="email" name="email" placeholder="Email">
    </div>

    <div class="col-md-6 ">
      <input type="password" class="form-replace" id="password" name="password" placeholder="Password" required>
    </br>
    <input type="password" class="form-replace" id="ripetipassword" name="ripetipassword" placeholder="Ripeti Password" required>
  </br>
  <button type="submit" class="btn btn-default" name="azione" value="inserimento">Accedi</button>
</div>
</div>


</form>

</body>
</html>