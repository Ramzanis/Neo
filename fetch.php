<?php 

  include ('./private/db_connect.php');

  if(isset($_POST['request'])){

    $request = $_POST['request'];

    switch($request){

      case $request = 'old_record' : 

        $query = "SELECT aktivitet, ansvarlig, start_tid FROM aktiviteter WHERE start_tid <= DATE(NOW()) ORDER BY DATE(start_tid) DESC";
      break;
      
      case $request = 'all_record' : 

        $query = "SELECT aktivitet, ansvarlig, start_tid FROM aktiviteter WHERE start_tid <= DATE(NOW()) ORDER BY DATE(start_tid) DESC";
        break;

    }

    var_dump($query);

    $result = $conn ->query($query);
    $result ->setFetchMode(PDO::FETCH_ASSOC);

  }

?>

<table border = "2">
		<thead>
        <tr>
            <th>Aktivitet</th>
            <th>Ansvarlig</th>
            <th>Dato</th>
            <th>Beskrivelse</th>
        </tr>
      </thead>

    <tbody>
    	<select name="filter" id="filtrer_data">
						<option value="" selected="" disabled=""> Filtrer </option>
						<option value="">Vis tidligere aktiviteter</option>
						<option value="">Vis alle</option>

		</select>

    <?php require_once './classes/fetch_process.php';
					while($row = $result->fetch()): ?>
    
    <tr>
        <td><?php echo $row['aktivitet'] ?></td> 
        <td><?php echo $row['ansvarlig'] ?></td> 
        <td><?php echo $row['start_tid'] ?></td> 
				<td><?php echo $row['beskrivelse']; ?></td>
    </tr>

        <?php endwhile;?>
    
			</tbody>

	</table>
