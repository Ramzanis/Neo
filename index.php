<?php session_start(); ?>
<!DOCTYPE html>  
<html>  
      <head>  
     <title>Neo ungdomssklubb</title>  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body style="background-color:#F7FFFF;">>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h2 align="center"><img src="images\neoshadow.png" width="300" height="170"> <br><br>Ungdomssklubb innloggingsportal</h2>  
                <br />  
                <form method="post">  
                     <label>Skriv brukernavn</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Skriv passord</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Logg inn" class="btn btn-info" />  
                     <br />   
                </form>
           </div>  
      </body>  
 </html>