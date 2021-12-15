<?php
session_start(); // <!-- Starts a session so the page wont be accesible without login -->

if (isset($_SESSION['id']) && isset($_SESSION['brukernavn'])) { // <!-- Checks if the ID and UserName maches before it shows somthing -->
    $id = $_GET['id']; // <!-- $id gets the id for aktiv_id from aktusr -->
    $id2 = $_SESSION['id']; // <!-- $id2 gets the id from this session -->

    include_once '../private/db_connect.php'; // <!-- Includes the code to acess the database -->

    $sql = "INSERT IGNORE INTO `aktusr` (aktiv_id, usr_id) VALUES ('$id','$id2')"; // <!-- SQL query that inserts values in aktusr -->

   
    if ($result = $conn ->query($sql)) {

        header("Location: ../home.php"); // <!-- If success then redirect to home page  -->

    } else { // <!-- If it fails then print error message  -->

        echo "Error: " . $sql;
    
    }
   
    $conn = null; // <!-- Closes the connection with the database PDO way -->

} else {

    header("Location: ../index.php"); // <!-- If ID and Username don´t mach it will send you back to the index/login page -->

    exit();

}

?>