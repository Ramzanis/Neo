<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:home.php?action=login");  
 }  
?>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<title>Send e-post</title>
	</head>
	
	<body>		

		<header id="header">
			<div id="logo">
				<h1><img src="images\neoshadow.png" width="120" height="65"><a href="logout.php">Logg ut</a></h1>
			</div>
		</header>
				
		<main>
			<div class="innertube">
                <?php
                //bulk_email.php
                $connect = new PDO("mysql:host=localhost;dbname=test", "root", "");
                $query = "SELECT * FROM medlemmer ORDER BY id";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                ?>
                <!DOCTYPE html>
                <html>
                <head>
                <title>Send e-post</title>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                </head>
                <body>
                <br />
                <div class="container">
                <h3 align="center">Send e-post</h3>
                <br />
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                    <tr>
                    <th>Fornavn</th>
                    <th>Etternavn</th>
                    <th>E-post addresse</th>
                    <th>Select</th>
                    <th>Action</th>
                    </tr>
                    <?php
                    $count = 0;
                    foreach($result as $row)
                    {
                    $count++;
                    echo '
                    <tr>
                    <td>'.$row["fornavn"].'</td>
                    <td>'.$row["etternavn"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>
                        <input type="checkbox" name="single_select" class="single_select" data-email="'.$row["email"].'" data-name="'.$row["fornavn"].'" />
                    </td>
                    <td><button type="button" name="email_button" class="btn btn-info btn-xs email_button" id="'.$count.'" data-email="'.$row["email"].'" data-name="'.$row["fornavn"].'" data-action="single">Send Single</button></td>
                    </tr>
                    ';
                    }
                    ?>
                    <tr>
                    <td colspan="3"></td>
                    <td><button type="button" name="bulk_email" class="btn btn-info email_button" id="bulk_email" data-action="bulk">Send Bulk</button></td></td>
                    </td>
                    </table>
                </div>
                </div>
                </body>
                </html>

                <script>
                    $(document).ready(function(){
                    $('.email_button').click(function(){
                    $(this).attr('disabled', 'disabled');
                    var id = $(this).attr("id");
                    var action = $(this).data("action");
                    var email_data = [];
                    if(action == 'single')
                    {
                    email_data.push({
                        email: $(this).data("email"),
                        name: $(this).data("fornavn")
                    });
                    }
                    else
                    {
                    $('.single_select').each(function(){
                        if($(this). prop("checked") == true)
                        {
                        email_data.push({
                        email: $(this).data("email"),
                        name: $(this).data('fornavn')
                        });
                        }
                    });
                    }
                    
                    $.ajax({
                    url:"send_email.php",
                    method:"POST",
                    data:{email_data:email_data},
                    beforeSend:function(){
                        $('#'+id).html('Sending...');
                        $('#'+id).addClass('btn-danger');
                    },
                    success:function(data){
                        if(data = 'ok')
                        {
                        $('#'+id).text('Success');
                        $('#'+id).removeClass('btn-danger');
                        $('#'+id).removeClass('btn-info');
                        $('#'+id).addClass('btn-success');
                        }
                        else
                        {
                        $('#'+id).text(data);
                        }
                        $('#'+id).attr('disabled', false);
                    }
                    
                    });
                    });
                    });
                </script>
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