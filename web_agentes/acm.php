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
   
   <script>

</script>




  <script src="../js/funciones.js"></script>

  <title>RE/MAX Rio - ACM - Presentación</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    

  <style>
 

 
</style>


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

<div class="container-fluid bg-light mt-3 p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
      <div class="row">
        <h2>Análisis Comparativo de Mercado</h2>
        <div class="col ">
          <p>El precio de publicaci�n de un inmueble es determinante para que se pueda vender o alquilar en el menor tiempo posible. Esto se logra mediante la investigaci�n de la oferta actual de propiedades con caracter�sticas similares en la zona donde se ubica el inmueble en cuesti�n y analizando los cierres de operaciones similares.</p>

          <h4 class="text-primary">Pasos</h4>
          <ol>
            <li>Definir zona de influencia de la propiedad (si no hay comparables en esa zona, utilizar propiedades de una zona similar).</li>
            <li>Realizar un relevamiento de 5 a 7 propiedades</li> 
            <li>Elegir los comparables - descartar el comparable del precio más alto y el más bajo</li>
            <li>Homogenizar superficies</li>
            <li>Ajustar por características</li>
            <li>Obtener el valor de tasación</li>
          </ol>

        
        </div>
        <div class="col">
          <h4 class="text-primary">ACM desde RED RE/MAX</h4>
          <p>Instructivo</p>
          
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1oMohsOWtKcD9Qw6_sY9gLAcGQRPmoWyK/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
          <h4 class="text-primary">Planillas para hacer un ACM</h4>
          <p>Para incorporar comparables desde todos los portales, podemos usar las planillas del Arquitecto Aguilar.</p>
         
          <div class="d-flex justify-content-between">
            <div class="d-grid gap-2 d-flex justify-content-md-end">
              <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1y2bveE7olueIIh33GEuoph1tnwjAokA1/view?usp=sharing" style="text-decoration: none; color: white ">Descargar ACM Departamento</a></button>
            </div>
            <div class="d-grid gap-2 d-flex justify-content-md-end">
              <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1MmmIjUS23EMX36TFueZPdiBY9-HP9byH/view?usp=sharing" style="text-decoration: none; color: white ">Descargar ACM Casa</a></button>
            </div>
          </div>
          <br>
          <p>También las podemos descargar en:<br>
          Usuario y Contraseña de Dropbox Panillas para ACM Aguilar:<br>
          usuario: rio@remax.com.ar<br>
          contraseña: Rmxrio2018<br>
          </p>
        </div>
        </div>
        
      </div>


    
  </div>
    
    

    <!-- </div> -->

 
<!--============================
=            FOOTER            =
=============================-->

  <?php include "../footer.php" ?>
</body>


</html>