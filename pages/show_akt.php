<?php  
 session_start();  
 if(!isset($_SESSION["brukernavn"]))  
 {  
      header("location: home.php");  
 }  

 include "../private/db_connect.php";    

?>

<html>
	<head>
		<link rel="icon" href="../images\icon.png">  
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/aktivitet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Neo Ungdomssklubb</title>
	</head>
	<body>		
		<div id="header">
			<div id="logo">
             <h1><a href="home.php"><img src="../images\neoshadow.png" width="120" height="65"></a><a style="float:right" href="../classes/logout.php">Logg ut</a></h1>
			</div>	
		</div>	
 			<br>
				<div class="innertube">
					<h1>Oversikt over aktiviteter</h1>
				</div>
			<br>
	 <table class="table table-bordered">
		<thead>
        <tr>
            <th>Aktivitet</th>
            <th>Ansvarlig</th>
            <th>Dato</th>
            <th>Beskrivelse</th>
			<th>Meld på</th>
		</tr>	
      	</thead>
			<tbody>
				<?php 
				$query = "SELECT aktivitet_id, aktivitet, ansvarlig, start_tid, beskrivelse FROM aktiviteter WHERE start_tid >= DATE(NOW()) ORDER BY DATE(start_tid) DESC";
				$result = $conn ->query($query);
				$result ->setFetchMode(PDO::FETCH_ASSOC);
				while($row = $result->fetch()): //Assign row the data fetched from the database?> 
			
			<tr>
				<td><?php echo $row['aktivitet'] ?></td> 
				<td><?php echo $row['ansvarlig'] ?></td> 
				<td><?php echo $row['start_tid'] ?></td> 
				<td><?php echo $row['beskrivelse']?></td>
				<td><a href="./classes/setakt.php?id=<?php echo $row['aktivitet_id']; ?>" class="btn btn-success">Meld På</a></td>
			</tr>
				<?php endwhile;?>
			
			</tbody>			
		</table>
	<div style="text-align: center; padding: 5px;">
        <a href="pages/add_akt.php"> <!-- Create a button that is linked to Create new activity -->
        <button class="button_grn">Ny Aktivitet</button>
    </div>

		<script type="text/javascript">
			/*
			//Checking if we are selecting any value from the dropdown list
				$(document).ready(function(){
					$("#filter").on('change', function(){
						var value = $(this).val(); //value from the dropdown list is saved to this variable
						console.log(value); //print the value to console, used for the debugging process 
					
						$.ajax({ // ajax where we specify the file we are using to handle the ajax and jquery 
							url: "./classes/fetch.php", //File its submiting to 
							type: "POST", 	
							data: {'select' : value}, //'select' is actually the data we selected from the dropdown list 
							beforeSend:function(){ //Before we send the request, we can echo span tag where it says "Arbeider.." before it updates the table
								$(".table").html("<span>Arbeider...</span>");
							},
							success:function(response){ //If the request was successful, then update the table 
								$(".table").html(response);
								
							}
						});	
					});
				});
				*/
		</script>

<?php if(isset($_SESSION['akt_success'])){ 
	echo $_SESSION['akt_success'];
	unset($_SESSION['akt_success']);
}
?>	
</div>
		<nav id="nav">
			<div class="innertube">
				<h1>Funksjoner</h1>
				<ul>
					<?php include '../inc\navlink.php'; ?>
				</ul>
			</div>
		</nav>	
</body>
</html>