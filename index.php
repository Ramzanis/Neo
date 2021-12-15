<?php session_start(); ?>
<!DOCTYPE html>  
<html>  
     <head>  
     <title>Neo Ungdomsklubb</title>  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>   

      <body style="background-color:#F7FFFF;">  
           <br/><br />  
           <div class="container" style="width:500px;">  
          <h2 align="center"><img src="images\neoshadow.png" width="300" height="170"> <br>
          <br>Ungdomssklubb innloggingsportal</h2>  
          <br/>  
                <form action="private/login.php" method="post">  
                    <label>Skriv brukernavn</label>  
                         <input type="text" name="bnavn" class="form-control" required/> 
                    <br/>  
                    <label>Skriv passord</label>  
                    <input type="password" name="passord" class="form-control" required/>  
                     <br/>  
                    <input type="submit" name="login" value="Login" class="btn btn-info" />  
                    <?php if(isset($_SESSION["error"])){ echo $_SESSION['error']; unset($_SESSION['error']);
                         } else if(isset($_SESSION["innlogging"])) { echo $_SESSION['innlogging']; unset($_SESSION['innlogging']); } ?>
                     <br/>   
                </form>
           </div>   
      </body>  
 </html>