<?php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:home.php?action=login");  
 }  
?>
<html>
	<head>
<<<<<<< HEAD
		<link rel="stylesheet" href="css/style.css">
=======
		<link rel="icon" href="images\icon.png">  
		<link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
>>>>>>> ramzan1
		<title>Neo Ungdomssklubb</title>
	</head>
	<body>		
		<header id="header">
			<div id="logo">
<<<<<<< HEAD
				<h1><img src="images\neoshadow.png" width="120" height="65"><a href="logout.php">Logg ut</a></h1>
=======
             <h1><img src="images\neoshadow.png" width="120" height="65"><a style="float:right" href="logout.php">Logg ut</a></h1>
>>>>>>> ramzan1
			</div>
		</header>
				
		<main>
			<div class="innertube">
<<<<<<< HEAD
				
				<h1>Oversikt/legg til ny aktivitet</h1>
				
=======
				<h1>Oversikt/legg til ny aktivitet</h1>
>>>>>>> ramzan1
			</div>
		</main>

		<nav id="nav">
			<div class="innertube">
				<h1>Funksjoner</h1>
				<ul>
					<?php include 'inc\navlink.php'; ?>
				</ul>
			</div>
		</nav>	
	</body>
</html>