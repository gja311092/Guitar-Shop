<?php
require_once('conexion.php');
$con = mysqli_connect($hostname_ejemplo, $username_ejemplo, $password_ejemplo, $database_ejemplo);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ( isset( $_REQUEST['id'])) {
  
    $query = "DELETE FROM producto2 WHERE id = " . $_REQUEST['id'];
   
    $result = mysqli_query($con, $query);
   
    if ($result) {
        echo "Registro borrado correctamente";
       
        header('Location: registro.php');
    } else {
        echo "Error al borrar el registro";
    }
}

mysqli_close($con);
?>