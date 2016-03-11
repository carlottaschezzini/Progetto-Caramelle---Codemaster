
<!doctype html>
<html>
    <head>
    	<meta charset="UTF-8">
        <title>Index</title>
       
      
    </head>

	<body>
		 <?php include ("include/header.php");?>
        <?php include ("include/content.php");?>
        
       
            <form class="form-horizontal" method="post">
              <h3>ACCEDI ALLA PIATTAFORMA O ACCEDI TRAMITE IL TUO PROFILO
                LINKEDIN</h3>
              <br>
              <br>
              <form method="post" enctype="multipart/form-data" >

   


      <div class="row form-inline index">
        <div class="col-md-6" style="margin-bottom: 3.7%;">
            <input type="text" class="form-replace" id="nome" name="nome" placeholder="Nome" required  >
          </br>
          <input type="text" class="form-replace" id="cognome" name="cognome" placeholder="Cognome" required>
        </br>
        <input type="text" class="form-replace" id="email" name="email" placeholder="Email">
      </div>

      <div class="col-md-6">
          <button type="button" class="btn1 btn-primary">collegati con LINKEDIN</button>
      </br>
   <button type="button" class="btn2 btn-primary">ACCESSO AMMINISTRATORE</button>
      </div>
           </div>
           
         </div>


</form>    

             

              
                <div class="col-sm-8 bottoni">     
                <label>Non hai un account? registrati </label>  
                <a class="registrazione" href="registrati.php" title="pagina registrazione"  > <span style= "color:#55c4b1 "> QUI </span></a><br>  <p><label>PASWORD DIMENTICATA? richiedila</label>  <a class="forgotpassword" href="forgotpassword.php" title="forgotpasword"  > <span style= "color:#55c4b1 "> QUI </span></a><br>
             </div>
                
            
            </form>
            
        
              
    </body>
</html>