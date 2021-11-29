<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:home.php?action=login");  
 }  
?>
<!DOCTYPE html><html>
<!-- Mirrored from www.studentstutorial.com/demo/?cat_id=1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Oct 2021 15:38:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
 <link rel="icon" href="fav/1.echo" type="image/gif" sizes="100x100"/> 
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans"/>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
h1 {text-align: center;}
</style>
<header class="header">
     <h1>CODE<span>INSTINCT</span></h1>
     <nav>
          <ul>
               <li><a href="#">Hjem</a></li>
               <li><a href="#">Portfolie</a></li>
               <li><a href="#">Om oss</a></li>
               <li><a href="logout.php">Logg ut</a></li>
          </ul>
     </nav>
</header>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1300px;margin-top:70px">    
	  <!-- First Photo Grid-->
	<div class="w3-row-padding">
	    		<div class="w3-quarter w3-container w3-margin-bottom">
		  <img src="images/insert_data.png" alt="Norway" style="width:100%" class="w3-hover-opacity"/>
		  <div class="w3-container w3-white">
			<a href="php/insert-data681a.html?id=1" style="text-decoration:none;"><p align="center"><b>Legg til ny medlem</b></p></a>
			
		  </div>
		</div>
				<div class="w3-quarter w3-container w3-margin-bottom">
		  <img src="images/retrieve_data.png" alt="Norway" style="width:100%" class="w3-hover-opacity"/>
		  <div class="w3-container w3-white">
			<a href="php/php-retrieve0b30.html?id=2" style="text-decoration:none;"><p align="center"><b>Hent medlemsdata</b></p></a>
			
		  </div>
		</div>
				<div class="w3-quarter w3-container w3-margin-bottom">
		  <img src="images/update_data.png" alt="Norway" style="width:100%" class="w3-hover-opacity"/>
		  <div class="w3-container w3-white">
			<a href="php/updatedcfd.html?id=4" style="text-decoration:none;"><p align="center"><b>Oppdater medlemsdata</b></p></a>
			
		  </div>
		</div>
				<div class="w3-quarter w3-container w3-margin-bottom">
		  <img src="images/delete_data.png" alt="Norway" style="width:100%" class="w3-hover-opacity"/>
		  <div class="w3-container w3-white">
			<a href="php/deleted61c.html?id=5" style="text-decoration:none;"><p align="center"><b>Slett medlemsdata</b></p></a>
		</div>
		
<footer>
  <p align="center">Neo Ungdomsklubb 2021<b style="color: GREEN;"></p>
</footer>

</html>