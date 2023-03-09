<?php

require_once('conexion.php');
$con = mysqli_connect($hostname_ejemplo, $username_ejemplo, $password_ejemplo, $database_ejemplo);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!-- crear un formulario para insertar registros en la tabla alumnos -->
<form action="insertar.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" id="apellido">
    <br>
    <label for="correo">Correo:</label>
    <input type="text" name="correo" id="correo">
    <br>
    <label for="edad">Edad:</label>
    <input type="text" name="edad" id="edad">
    <br>
    <input type="submit" value="Insertar" name="guardar">
</form>
<?php
if ( isset( $_REQUEST['guardar'])) {
    
    $query = "INSERT INTO producto2 (nombre,apellidos,correo,edad) VALUES ('" . $_POST['nombre'] . "', '" . $_POST['apellidos'] . "', '" . $_POST['correo'] . "', '" . $_POST['edad'] . "')";
    
    $result = mysqli_query($con, $query);
  
    if ($result) {
        echo "Registro insertado correctamente";
       
        header('Location: registro.php');
    } else {
        echo "Error al insertar el registro";
    }
}
mysqli_close($con);
?>