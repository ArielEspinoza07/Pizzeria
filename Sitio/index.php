<?php
	require_once '../Core/core.php';

	if (!usuarioBLL::isLogin()) {
		header('location: acceso.php');
	}
 ?>
 <?php
 	echo 'Hola Mundo';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="description" content="">
 	<meta name="author" content="">
 	<link rel="icon" href="img/favicon/favicon.ico">

 	<!-- Bootstrap core CSS -->
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/jquery-ui.min.css">
 	<link rel="stylesheet" href="css/jquery-ui.theme.min.css">

 	<!-- CSS propios -->
 	<link rel="stylesheet" href="css/style.css">
 	<title>Pizzeria</title>
 </head>
 <body>
 	<?php
 		if (usuarioBLL::isAdmin()) {
 			include 'Menus/menu_admin.php';
 		}
 		else{
 			include 'Menus/menu_facturador.php';
 		}
 	 ?>

 	 <div class="container-fluid">
 	 	<div class="row">
 	 		<div class="col-sm-3 col-md-2 sidebar"></div>
 	 		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 	 			<div class="jumbotron">
 	 				<h1>Hola, <?php echo usuarioBLL::getUser()->getFullName();  ?></h1>
 	 				<p>Bienvenido al sitema de administración y facturación de la pizzería <strong>Santa Cecilia.</strong></p>
 	 			</div>
 	 		</div>
 	 	</div>
 	 </div>
 	<!-- Bootstrap core JavaScript
	================================================== -->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/functions.js"></script>
 </body>
 </html>
