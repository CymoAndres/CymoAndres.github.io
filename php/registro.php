<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into user(username,fullname,email,password,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
			}
		}
	}
}



?>
<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['cedula']) >= 1) {
	    $name = trim($_POST['nombre']);
	    $cedula = trim($_POST['cedula']);
		$direccion = trim($_POST['direccion']);
		$sección = trim($_POST['sección']);
		 $fechareg = date("d/m/y");

	    $consulta = "INSERT INTO datos(nombre, cedula, direccion, sección, fecha_reg) VALUES ('$name','$cedula','$direccion','$sección','$fechareg')";
	    
		
		//verifica la nombre
		$verific_name = mysqli_query ($con , "SELECT * FROM datos WHERE nombre ='$name'");
		if(mysqli_num_rows($verific_name) > 0 ){
			
			echo'
			<script> 
			
			alert("El Nombre ya esta registrado");
			windows.location = "../home.php";

			</script>
			
			';
			exit();
		}
		
		//verifica la cedula
		$verific_cedula = mysqli_query ($con , "SELECT * FROM datos WHERE cedula ='$cedula'");
		if(mysqli_num_rows($verific_cedula) > 0 ){
			
			echo'
			<script> 
			
			alert("La cedula ya esta registrada");
			windows.location = "../home.php";

			</script>
			
			';
			exit();
		}
		
		
		
		
		$resultado = mysqli_query($con,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Tus datos han sido guardados correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>