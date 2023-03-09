<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- CSS y Bootstrap -->
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.min.js"></script>

  <!-- Iconos -->
  <link rel="icon" href="../img/logo.png">
    <link rel="apple-touch-icon" href="../img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <title>Registro/Ubicación</title>
    <meta name="keywords" content="guitarras, Gibson, Fender, venta">
    <meta name="description" content="Guitar Shop es una de las mayores tiendas a nivel mundial, ofrece desde guitarras de precios accesibles hasta artículos de colección">
    <meta name="author" content="Gerardo Javier Avila">
</head>
<body>

<header class="navegacion">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark  fixed-top text-uppercase pt-4">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img class="logo" src="../img/roja.png" alt="Guitarra Roja">
            </a>

            <h1>Guitar Shop</h1>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
              <ul class="navbar-nav">
                     <li class="nav-item">
              <a class="nav-link text-reset boton rounded-circle" href=".././index.html"><span class="bi bi-headphones"></span> Inicio</a>
              </li>
      
                <li class="nav-item dropdown">
                <a class="nav-link text-reset boton rounded-circle" href="#"data-bs-toggle="dropdown"><span class="bi bi-music-player-fill"></span> Guitarras</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="guitarraselectricas.html">Eléctricas</a></li>
                  <li><a class="dropdown-item" href="guitarrasacusticas.html">Acústicas</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link text-reset boton rounded-circle" href="guitarristas.html"><span class="bi bi-image-fill"></span> Guitarristas</a>
              </li>
                <li class="nav-item">
                <a class="nav-link text-reset boton rounded-circle" href="historia.html"><span class="bi bi-map-fill"></span> Historia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-reset boton rounded-circle" href="sesion.php"><span class="bi bi-person-plus-fill"></span> Sesión</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-reset boton rounded-circle" href="registro.php"><span class="bi bi-info-circle-fill"></span> Registro/Ubicación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-reset boton rounded-circle" href="ofertas.html"><span class="bi bi-speaker-fill"></span> ¡Ofertas!</a>
              </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>


<?php
error_reporting(0);
require_once('conexion.php');
$con = mysqli_connect($hostname_ejemplo, $username_ejemplo, $password_ejemplo, $database_ejemplo);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<center>
<form action="insertar.php" method="post">
    <div class="col-md-4">
    <label for="nombre">Nombre de Usuario:</label>
    <input type="text" class="form-control" name="nombre" id="nombre">
    </div>
    <br>
    <div class="col-md-4">
    <label for="apellidos">Nombre y Apellidos:</label>
    <input type="text" class="form-control" name="apellidos" id="apellido">
    </div>
    <br>
    <div class="col-md-4">
    <label for="correo">Correo Electrónico:</label>
    <input type="text" class="form-control" name="correo" id="correo">
    </div>
    <br>
    <div class="col-md-4">
    <label for="edad">Edad:</label>
    <input type="text" class="form-control" name="edad" id="edad">
    </div>
    <br>
    <div class="col-md-4">
    <button class="btn btn-dark" type="submit" name="guardar">Registrar</button>   
    </div>
</form>
<br>
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
?>
</center>
<center>
<table  class="table table-striped table-bordered table-dark" style="width: 80%;">
    <tr>
        <th>Nombre de Usuario</th>
        <th>Nombre y Apellidos</th>
        <th>Correo</th>
        <th>Edad</th>
        <th>Acciones</th>
    </tr>
    <?php

    $query = "SELECT * FROM producto2";

    $result = mysqli_query($con, $query);
    ?>
    <tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><a href="editar.php?id=<?php echo $row['id'];?>"><center><span class="bi bi-box-arrow-up-right"></center></span></a> 
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</center>
<?php
mysqli_close($con);
?>

<br>
        <center>
          <h2>Nuestra Ubicación</h2>
        <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.4248513434086!2d-0.1585557!3d51.523767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761acf33628211%3A0x445d7677a88322e1!2s221B%20Baker%20St%2C%20London%20NW1%206XE%2C%20Reino%20Unido!5e0!3m2!1ses-419!2smx!4v1670431806878!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen=""  referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </center>

<br>
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-12 text-center nx-auto">
      </div>
      <center>
        <h2 class="mb-5">¡Visita nuestra Tienda!</h2>
      <div class="col-lg-9 col-md-6 col-12 mb-4 mb-lg-0">
        <div class="forma-block d-flex justify-content-center align-items-center">
        <a href="guitarrasacusticas.html" class="d-block">
          <img src="../img/36.jpg" class="forma-block-img img-fluid" alt="fender">
          <p class="forma-block-text"><strong>Clásico</strong></p>
          <div class="forma-block d-flex justify-content-center align-items-center">
        <a href="guitarraselectricas.html" class="d-block">
          <img src="../img/32.jpg" class="forma-block-img img-fluid" alt="gibson">
          <p class="forma-block-text"><strong>Moderno</strong></p>
          <div class="forma-block d-flex justify-content-center align-items-center">
        <a href="sesion.php" class="d-block">
          <img src="../img/37.jpg" class="forma-block-img img-fluid" alt="jackson">
          <p class="forma-block-text"><strong>Inicia Sesión</strong></p>
          </center>
          </a>
      </div>
    </div>
  </div>
</div>
</section>

<br>
<div class="footer">
      <div class="grupo-1">
        <div class="box">
          <p><b>Las Lajas 109, La Morena, Estado de México</b></p>
          <p><b>gja1100223@hotmail.com</b></p>
          <p><b>7719431670</b></p>
        </div>
      <div class="box">
          <small>&copy; 2023 <b>Guitar Shop</b> - Todos los Derechos Reservados.</small>
        </div>
        <div class="box">
          <p><b>Nuestras Redes Sociales</b></p>
          <a href="https://www.facebook.com/GibsonES"target="_blank"><img src="../img/facelogo.png" alt="Facebook Gibson"></img></a>
          <a href="https://twitter.com/Fender"target="_blank"><img src="../img/twitlogo.png" alt="@Fender"></img></a>
          <a href="https://www.twitch.tv/" target="_blank"><img src="../img/twitchlogo.png" alt="Twitch"></img></a>

        </div>

            </div>
        </div>
        <center>
        
        </center>
    </div>



</body>
</html>
