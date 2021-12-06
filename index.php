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
           else  dsfds
           {  
                echo '<script>alert("Feil brukernavn eller passord, vennligst prøv igjen")</script>';  
           }  
      }  
 }  
 ?>  
=======
<?php   
$connect = mysqli_connect("localhost", "root", "", "test");  
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
               echo '<script>alert("Feil brukernavn eller passord, vennligst prøv igjen")</script>';  
          }  
     }  
}  
?>
>>>>>>> Stashed changes
 <!DOCTYPE html>  
 <html>  
      <head>
      <link rel="icon" href="images\icon.png">  
           <title>Innloggingsportal</title>  
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