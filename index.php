
<!doctype html>
<html>
    <head>
    	<meta charset="UTF-8">
        <title>Index</title>
      
    </head>

	<body>
		<?php include ("/users/nicopunzi/Desktop/Codemaster/Sitolocale/pippo/include/header.php");?>
        <?php include ("/users/nicopunzi/Desktop/Codemaster/Sitolocale/pippo/include/content.php");?>
       
            <form class="form-horizontal" method="post">
              <h3>ACCEDI ALLA PIATTAFORMA O ACCEDI TRAMITE IL TUO PROFILO
                LINKEDIN</h3>
              <br>
              <br>
              <div class="form-group">
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Nome">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <button type="submit" class="btn btn-default" name="azione" value="login">Accedi</button>
                </div>
              </div>
              <div class="form-group">
              
                <div class="col-sm-6">     <label>Non hai un account? registrati </label>  <a class="registrazione" href="registrati.php" title="pagina registrazione"  > <span style= "color:#55c4b1 "> QUI </span></a><br>  <p><label>PASWORD DIMENTICATA? richiedila</label>  <a class="forgotpassword" href="forgotpassword.php" title="forgotpasword"  > <span style= "color:#55c4b1 "> QUI </span></a><br>
             </div></p> </div>
                <div class="col-sm-6">     
              </div>
            </form>
            
        
              
    </body>
</html>