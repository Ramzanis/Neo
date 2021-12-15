<?php 

  include ('../private/db_connect.php');

  if(isset($_POST['select'])) {

    $request = $_POST['select'];
   
    $name = $request;

    $smt = $conn-> prepare("SELECT id FROM medlemmer WHERE fornavn =  '$name'");

    $smt -> execute();

    if($data = $smt->fetchAll()) {

      //Get the id 
      foreach($data as $row) {
  
          $_SESSION['id'] = $row['id']; 
      
      }

      $test1 = $_SESSION['id'];
    
    }

      //Query to get all details about member from the medelmmer table 
      $statement = $conn -> prepare("SELECT fornavn, etternavn, gateadresse, postnummer, poststed, mobilnummer, email, kjønn FROM medlemmer WHERE id = $test1");

      //Execute the query 
      $statement -> execute();

      //Fetch the results 
      $retrieved = $statement ->fetchAll();   

      $query = "SELECT interesser.interesse FROM medlemmer
      JOIN interesser_medlemmer on (medlemmer.id=interesser_medlemmer.user_id) 
      JOIN interesser on (interesser.interesse_id=interesser_medlemmer.interesse_id) 
      WHERE medlemmer.id = $test1
      GROUP BY `interesser`.`interesse_id` ASC;";

      $result = $conn ->query($query);
      $result ->setFetchMode(PDO::FETCH_ASSOC);

    /*
    switch($request) {

      case "soon_record" : 
        $query = "SELECT aktivitet, ansvarlig, start_tid, beskrivelse FROM aktiviteter WHERE start_tid >= DATE(NOW()) ORDER BY DATE(start_tid) DESC";  
        break;

      case "all_record" : 
        $query = "SELECT aktivitet, ansvarlig, start_tid, beskrivelse FROM aktiviteter ORDER BY DATE(start_tid) DESC";  
        break; 

        case "old_record" : 
        $query = "SELECT aktivitet, ansvarlig, start_tid, beskrivelse FROM aktiviteter WHERE start_tid < DATE(NOW()) ORDER BY DATE(start_tid) DESC";
        
      }
*/
?>

<div class="table">

<?php foreach ($retrieved as $infos) {?>
          <h3><?php echo htmlspecialchars($infos['fornavn']) . ' ' .  htmlspecialchars($infos['etternavn']); ?></h3>
          <p>Gateadresse:<?php echo htmlspecialchars(' '. $infos['gateadresse']); ?> </p>
          <p>Postnummer:<?php echo htmlspecialchars(' '. $infos['postnummer']); ?> </p>
          <p>Poststed:<?php echo htmlspecialchars(' '. $infos['poststed']); ?> </p>
          <p>TelfNr:<?php echo htmlspecialchars(' '.$infos['mobilnummer']); ?> </p>
          <p>Email:<?php echo htmlspecialchars(' '.$infos['email']); ?> </p>
          <p>Kjønn:<?php echo htmlspecialchars(' '. $infos['kjønn']); ?> </p>
          <p>Kjønn:<?php echo htmlspecialchars(' '. $infos['kjønn']); ?> </p>
          <p>Interesser:<?php while($row = $result->fetch()): echo htmlspecialchars(', '.$row['interesse']); endwhile; ?> </p>    
          <?php } ?> 


	</div>	

<?php } ?>