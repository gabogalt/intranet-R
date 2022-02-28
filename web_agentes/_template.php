<?php
  require_once('../control_sesion.php');
  header('Content-Type: text/html; charset=UTF-8');
  
?>

<!DOCTYPE html>
<html>
<head>

  <!-- boopstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  

  <!-- fontwesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


   
   <script>

</script>




  <script src="../js/funciones.js"></script>

  <title>RE/MAX Rio - Experiencia RE/MAX</title>
  <meta charset="UTF-8">

  <!-- linea para poder usar mediaQuerys -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Estilos propios css  -->
  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <!-- efectos  -->
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
    <img src="../imagenes/header.jpg" class="pc"  align="top" style="max-width:100%;width:auto;height:auto; margin-top: 90px">
    <img src="../imagenes/header_mobile.jpg" class="mobile" align="top" style="max-width:100%;width:auto;height:auto;">
  </div>
  
</header>


 

<!--============================
=       BREADCRUMB         =
=============================-->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item ml-3"><a href="index1.php">Home</a></li>
  </ol>
  
</nav>

<!--============================
=          CONTENIDO         =
=============================-->
<!-- container-fluid: contenedor que se ajusta al 100% -->
<!-- bg: background si ademas le colocas colores de boopstrap vas a tener color de fondo... ejemplo : bg-light -->
<!-- mt-3 --- margenes top de la pagina si quieres que sean todos los margenes los afectados seria m-3 (el numero de margen va del 1 al 5)  -->
<!-- p-5 es el padding de la padding  -->
<!-- shadow-lg ---- sombras del contenedor  -->
<!-- row : es una fila  -->
<!-- col : columna  -->

<div class="container-fluid bg-light mt-3 p-5" > 

  <div class="shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__slideInLeft">

        <div class="row">
          <div class="col-8">
            <img src="" alt="">
          </div>
          <div class="col-4">
              <h</h1>
          </div>
        </div>
        	
      </div>  
    </div>
    
  </div>
  
</div>



 
<!--============================
=            FOOTER            =
=============================-->

  <?php include "../footer.php" ?>
</body>


</html>