<?php   include("../private/db_connect.php"); 

    session_start();

    if(isset($_POST['submit'])) {

        $aktivitet = $_POST['aktivitet'];
        $ansvarlig = $_POST['ansvarlig'];
        $date = $_POST['date'];
        $beskrivelse = $_POST['beskrivelse'];

        $query = "INSERT INTO aktiviteter (aktivitet, ansvarlig, start_tid, beskrivelse) 
        VALUES('$aktivitet', '$ansvarlig', '$date', '$beskrivelse')";
        $statement = $conn -> prepare($query);

        //If execution of the query statement went as planned, and user got inserted into the table
        if($statement = $conn -> exec($query)) {

            //Also start session with the username and redirect to the homepage
           $_SESSION['akt_success'] = "<script> alert('Success'); </script>";
           header('location: ../pages/show_akt.php');
        }

    }

?>