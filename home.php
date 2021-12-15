<?php 
include "./private/db_connect.php"; 
 session_start();  

 if(isset($_SESSION["brukernavn"])) {

 	$test = $_SESSION['brukernavn'];

 	$where = " WHERE fornavn='$test'";

     
?>
<html>
	<head>
		<link rel="icon" href="images\icon.png">  
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Neo Ungdomssklubb</title>
	</head>
	<body>		

		<header id="header">
			<div id="logo">
				<h1><a href="home.php"><img src="images\neoshadow.png" width="120" height="65"></a><a style="float:right" href="./classes/logout.php">Logg ut</a></h1>
			</div>
		</header>

			<div class="innertube">
				<h1>Velkommen <?php echo $_SESSION["brukernavn"];?></h1>
			</div>

		<?php 
		/* Getting the members from medlemmer table */ 
		$smt = $conn->prepare('SELECT * FROM medlemmer');
		$smt->execute();
		$data = $smt->fetchAll();

		?>

		<select name="name_member" id="filter">
			
			<?php foreach ($data as $row) {  //Dropdown list off all the members 

			echo "<option>" . $row['fornavn']. "</option>"; }
		?>
		</select>

	  	<div class="table">

		</div>		
		<script type="text/javascript">

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

		</script>


		<nav id="nav">
			<div class="innertube">
				<h1>Funksjoner</h1>
				<ul>
					<?php include './inc/navlink.php'; ?>
				</ul>
			</div>
		</nav>	
	</body>
<?php } else {header("location: index.php"); }?>
</html>


