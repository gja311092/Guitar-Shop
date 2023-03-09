<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- CSS y Bootstrap -->
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
	
<?php 
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$edad = $_POST['edad'];
	$email = $_POST['email'];
	$asunto = 'Ayuda Guitar Shop';
	$problema = "Nombre: ".$nombre."\n\n Apellidos: $apellidos\n\n Edad: $edad Email: $problema\n\nProblema:".$_POST['problema'];


	if(mail('gerardo_j_avila92@hotmail.com', $asunto, $problema)){
		echo "Correo enviado";
	}
 ?>

</body>
</html>