<?php  
 session_start();  
 if(!isset($_SESSION["brukernavn"]) && isset($_SESSION['id']))  
 {  
      header("location: home.php");  
 }  

 include "../private/db_connect.php";    

?>

<html>
	<head>
		<link rel="icon" href="../images\icon.png">  
		<link rel="stylesheet" href="../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Neo Ungdomssklubb</title>
	</head>
	<body>

<div class="container">
		<div id="header">
			<div id="logo">
             <h1><a href="home.php"><img src="../images\neoshadow.png" width="120" height="65"></a><a style="float:right" href="../classes/logout.php">Logg ut</a></h1>
			</div>
		</div>	
 	<br>
		<div class="innertube">
			<h1>Legg til ny interesse for <?php echo $_SESSION['id']; ?></h1>
		</div>

	<br>
<div class="box">

 	<div class="interesse">
 		<form action="../Neo/classes/reg_int.php" method="POST">

 				<input type="text" placeholder="interesse" name="aktivitet" required>
				<br>
				<input type="submit" name="submit">
		 </form>
	</div>

 		<?php 	if(isset($_SESSION['akt_success'])){ 

					echo $_SESSION['akt_success'];
					unset($_SESSION['akt_success']);

		}?>	
</div>


		<nav id="nav">
			<div class="innertube">
				<h1>Funksjoner</h1>
				<ul>
					<?php include '../inc\navlink.php'; ?>
				</ul>
			</div>
		</nav>	
	</div>
</body>
</html>