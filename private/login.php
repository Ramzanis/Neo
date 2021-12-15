<?php 
session_start();

//Connection to database
include "db_connect.php";    

//If login button has been clicked
if(isset($_POST['login'])){

$username = $_POST['bnavn'];    
$password = $_POST['passord'];    
    
//Query statement to execute
$stmt = $conn->prepare("SELECT * FROM brukere WHERE brukernavn = ?");
$stmt->execute([$_POST['bnavn']]);
$user = $stmt->fetch();

    //Checking if the password from the input user matches one from Database
    if ($user && password_verify($password, $user['passord']))   {   
        
        $_SESSION['brukernavn'] = $username;
        header("location: ../home.php");
        
    //If there is no user with this name or the password doesn't match, then... 
    } else {
    
        $_SESSION["error"] = '<span style="color:#FF0000;text-align:center"> Mislykket innlogging</span>';
        header("location: ./index.php");
    
    }

    } else {

    echo "Noe gikk galt";

    }
?>