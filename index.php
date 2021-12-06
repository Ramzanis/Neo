<<<<<<< Updated upstream
<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:home.php");  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Begge felt er nødvendig")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:home.php");  
           }  
           else  
           {  
                echo '<script>alert("Feil brukernavn eller passord")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
=======
<?php session_start(); ?>
<!DOCTYPE html>  
>>>>>>> Stashed changes
 <html>  
      <head>  
           <title>Weblesson Tutorial | PHP Login Registration Form with md5() Password Encryption</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
<<<<<<< Updated upstream
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Neo Ungdomssklubb</h3>  
                <br />  
                <h3 align="center">Logg inn</h3>  
                <br />  
                <form method="post">  
=======
      <body style="background-color:#F7FFFF;">  
           <br/><br />  
           <div class="container" style="width:500px;">  
                <h2 align="center"><img src="images\neoshadow.png" width="300" height="170"> <br><br>Ungdomssklubb innloggingsportal</h2>  
                <br/>  
                <form action="login.php" method="post">  
>>>>>>> Stashed changes
                     <label>Skriv brukernavn</label>  
                     <input type="text" name="bnavn" class="form-control" required/>  
                     <br />  
                     <label>Skriv passord</label>  
                     <input type="password" name="passord" class="form-control" required/>  
                     <br />  
<<<<<<< Updated upstream
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />   
                </form>
           </div>  
=======
                     <input type="submit" name="login" value="Logg inn" class="btn btn-info" />  
               <?php if(isset($_SESSION["error"])){ echo $_SESSION['error']; unset($_SESSION['error']);
                     } else if(isset($_SESSION["innlogging"])) { echo $_SESSION['innlogging']; unset($_SESSION['innlogging']); } ?>
                     <br />   
                </form>
           </div>   

>>>>>>> Stashed changes
      </body>  
 </html>
