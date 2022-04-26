<?php
require_once('../control_sesion.php');
header('Content-Type: text/html; charset=UTF-8');

?>

<!DOCTYPE html>
<html>

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



  <style>
    .animate__animated.animate__flipInX {
      --animate-duration: 3s;
    }
  </style>



  <script src="../js/funciones.js"></script>

  <title>RE/MAX Rio - Programas y Apps</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />




</head>

<body>

  <!--============================
=            NAVBAR            =
=============================-->

  <?php include "../botonera.php" ?>


  <!--============================
=           HEADER          =
=============================-->

  <header class="header">
    <div class="area1">
      <img src="../imagenes/header.jpg" class="pc" align="top" style="max-width:100%;width:auto;height:auto; margin-top: 90px">
      <img src="../imagenes/header_mobile.jpg" class="mobile" align="top" style="max-width:100%;width:auto;height:auto;">
    </div>

  </header>




  <!--============================
=       BREADCRUMB         =
=============================-->

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item p-3"><a href="index1.php">Home</a></li>
    </ol>
  </nav>


  <!--============================
=          CONTENIDO         =
=============================-->

  <div class="container  animate__animated animate__slideInLeft  ">

    <h1>Programas y Apps </h1>

    <div class="row bg-light p-5" style="border-radius: 30px;border: white 10px outset;  ">
      <div class="col">

        <p>Herramientas que necesitamos para nuestro trabajo.</p>
        <h4 class="text-primary">Canva</h4>
        <p>Con Canva es super fácil crear, imprimir y compartir tarjetas personales, logos, invitaciones, videos, post para redes</p>
        <div class="d-grid gap-2 d-flex justify-content-md-end">

          <button class="btn btn-primary " type="button"><a href="https://www.canva.com" style="text-decoration: none; color: white ">Enlace a Canva</a></button>
        </div>

        <h4 class="text-primary">Floorplanner</h4>
        <p> Con esta herramienta y la biblioteca de muebles se puede crear planos de planta de un inmueble. </p>
        <div class="d-grid gap-2 d-flex justify-content-md-end">

          <button class="btn btn-primary " type="button"><a href="https://floorplanner.com/" style="text-decoration: none; color: white ">Enlace a Floorplanner</a></button>
        </div>

        <h4 class="text-primary">Cálculo de días hábiles o corridos</h4>
        <p> Permite obtener a partir de una fecha inicial, la fecha resultante de sumar los días hábiles o corridos solicitados.</p>
        <p>
          Para el cálculo de días hábiles, se consideran los feriados inamovibles, trasladables, puentes turísticos y días nolaborables nacionales, establecidos y publicados por el Gobierno Nacional. Es la página del Colegio de Escribanos de la Provincia de Buenos Aires
        </p>
        <div class="d-grid gap-2 d-flex justify-content-md-end">

          <button class="btn btn-primary " type="button"><a href="https://www.colescba.org.ar/www/pages/calculadoraFechas/calculadoraDeFechas.jsf" style="text-decoration: none; color: white ">Enlace a cálculo de fechas</a></button>
        </div>
      </div>
      <div class="col " style="border-radius: 30px; ">

        <h4 class="text-primary">CamScanner</h4>
        <p>Es una aplicación móvil que permite utilizar dispositivos iOS y Android como escáneres de imágenes. Permite a los usuarios "escanear" documentos y compartir la foto como JPEG o PDF.</p>
        <p>Se descarga gratuitamente de la App Store de los celulares.</p>


        <h4 class="text-primary">Cleanup.pictures</h4>
        <p> Cleanup Pictures es una herramienta que permite eliminar objetos o personas y posibles desperfectos que aparezcan en una foto. </p>
        <div class="d-grid gap-2 d-flex justify-content-md-end">

          <button class="btn btn-primary " type="button"><a href="https://cleanup.pictures/" style="text-decoration: none; color: white ">Enlace a Cleanup.pictures</a></button>
        </div>

      </div>
    </div>


    <!--============================
=            FOOTER            =
=============================-->

    <?php include "../footer.php" ?>
</body>


</html>