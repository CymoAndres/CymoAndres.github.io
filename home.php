<?php

include "php/conexion.php";
include "php/login.php";


session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";

	
}
?>

<html>
	<head>
		<title>.: Postulaciones :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
	</head>
	<body>
	<?php include "php/navbar.php"; ?>

<div class="container">
<div class="row">
<div class="col-md-6">

		<h2>Bienvenido<b></h2>


	<?php 
		
		$usuarios= $_SESSION["user_id"];
		$sql = "SELECT id, fullname FROM user WHERE id = '$usuarios'";
		$resultados = $con -> query($sql);
		$row= $resultados ->fetch_assoc();
	
	?>
	<h2><?php echo utf8_decode($row['fullname']); ?><b></h2>
	<form method="post">
    	<h1>¡Registra tus datos!</h1>
		
		<div class="form-group">
		    <label for="username">Nombre completo</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo">
		  </div>

		  <div class="form-group">
		    <label for="username">Numero de cedula</label>
		    <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Numero de cedula">
		  </div>
		  
		  <div class="form-group">
		    <label for="username">Dirección de Habitacion</label>
		    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección de Habitacion">
		  </div>

		  <div class="form-group">
		    <label for="username">N°Sección</label>
		    <input type="text" class="form-control" id="sección" name="sección" placeholder="N°Sección">
		  </div>
    	
    	
		
		  <button type="submit" name="register" class="btn btn-success">Enviar</button>

    </form>
	<?php include "php/registro.php";?>





	<h4><a href="PDF.php">IMPRIMIR LA CARTA DE POSTULACION</a><b></h4>


	
</div>
</div>
</div>

	</body>
</html>