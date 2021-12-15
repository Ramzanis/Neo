<?php  include("./private/db_connect.php");

//Fetches the data from the database
$query = "SELECT aktivitet, ansvarlig, start_tid, beskrivelse FROM aktiviteter";

// "SELECT aktivitet, ansvarlig, start_tid, beskrivelse FROM aktiviteter WHERE start_tid >= DATE(NOW()) ORDER BY DATE(start_tid) DESC";


$result = $conn ->query($query);
$result ->setFetchMode(PDO::FETCH_ASSOC);

?>