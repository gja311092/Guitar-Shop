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

	<title>Sesión</title>
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
<br>
<?php

session_start();

if(isset($_SESSION['iddelusuario']))
{
	$usuarioingresado = $_SESSION['iddelusuario'];
	echo "<h1>Bienvenido! Has iniciado sesión como: $usuarioingresado </h1>";
}
else
{
	header('location: sesion.php');
}

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: adios.php');
}
?>

<br>
<center>
<form method="POST">
<input class="btn btn-dark" type="submit" value="Cerrar sesión" name="btncerrar" />
</form>
</center>

<br>
 <br>
  <br>
 <br>
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-12 text-center nx-auto">
      </div>
      <center>
        <h2 class="mb-5">¡Bienvenido!</h2>
      <div class="col-lg-9 col-md-6 col-12 mb-4 mb-lg-0">
        <div class="forma-block d-flex justify-content-center align-items-center">
        <a href="historia.html" class="d-block">
          <img src="../img/38.jpg" class="forma-block-img img-fluid" alt="fender">
          <p class="forma-block-text"><strong>Historia</strong></p>
          <div class="forma-block d-flex justify-content-center align-items-center">
        <a href="registro.php" class="d-block">
          <img src="../img/39.jpg" class="forma-block-img img-fluid" alt="gibson">
          <p class="forma-block-text"><strong>Registro/Ubicación</strong></p>
          <div class="forma-block d-flex justify-content-center align-items-center">
        <a href="guitarristas.html" class="d-block">
          <img src="../img/40.jpg" class="forma-block-img img-fluid" alt="jackson">
          <p class="forma-block-text"><strong>Guitarristas</strong></p>
          </center>
          </a>
      </div>
    </div>
  </div>
</div>
</section>

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
<br>
<br>
<br>
<br>
<br>
<br>
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