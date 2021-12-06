<?php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:home.php?action=login");  
 }  
?>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<title>Neo Ungdomssklubb</title>
	</head>
	<body>		
		<header id="header">
			<div id="logo">
				<h1><img src="images\neoshadow.png" width="120" height="65"><a href="logout.php">Logg ut</a></h1>
			</div>
		</header>
				
		<main>
			<div class="innertube">
				
				<h1>Oversikt/legg til ny aktivitet</h1>
				
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