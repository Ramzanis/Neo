<?php  
 session_start();  

 if(!isset($_SESSION["brukernavn"]))  
 {  
      header("location: index.php");  
 }  

?>
<html>
	<head>
		<link rel="icon" href="images\icon.png">  
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Neo Ungdomssklubb</title>
	</head>
	<body>		

		<header id="header">
			<div id="logo">
				<h1><img src="images\neoshadow.png" width="120" height="65"><a style="float:right" href="./classes/logout.php">Logg ut</a></h1>
			</div>
		</header>
				
		<main>
			<div class="innertube">
				<h1>Velkommen</h1>
			</div>
		</main>

		<table border = "2">
		<thead>
        <tr>
            <th>Aktivitet</th>
            <th>Ansvarlig</th>
            <th>Dato</th>
            <th>Beskrivelse</th>
      </thead>

    <tbody>
    	<select name="filter" id="filtrer_data">
						<option value="" selected="" disabled=""> Filtrer </option>
						<option value="old_record">Vis tidligere aktiviteter</option>
						<option value="all_record">Vis alle</option>

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
		

		<nav id="nav">
			<div class="innertube">
				<h1>Funksjoner</h1>
				<ul>
					<?php include './inc/navlink.php'; ?>
				</ul>
			</div>
		</nav>	

	<script type="text/javascript">

							$(document).ready(function() {

								$("#filtrer_data").on('change', function() {
									var value = $(this).val();
									// alert(value);	
					
							$.ajax({
								url:"fetch.php",
								type:"POST",
								data:{'request ' : value},
								beforeSend:function(){
										$(".container").html("<span>Working</span>")
								}, 
								success:function(value){
										$(".container").html(data);
								}

							});
						});
					});	

	</script>


	</body>
</html>