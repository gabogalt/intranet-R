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
 

.animate__animated.animate__flipInX  {
  --animate-duration: 1s;
}
 
</style>



  <script src="../js/funciones.js"></script>

  <title>RE/MAX Rio - Formacion</title>
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
    <img src="../imagenes/header.jpg" class="pc"  align="top" style="max-width:100%;width:auto;height:auto; margin-top: 90px">
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

<div class="container  " >
  
  <h1>Formación inicial como agente RE/MAX</h1>

  <div class="row bg-light p-5"    style="border-radius: 30px;border: white 10px outset;  ">
    <div class="col-xl-6">
    
    <img src="../imagenes/formacion1.jpg" class="img-fluid animate__animated animate__flipInX"  style="max-width:100%;width:auto;height:auto;margin-right:60px; border-radius: 30px;: ">

  </div>
  <div class="col-xl-6 " style="border-radius: 30px; ">
     
     <p>RE/MAX contribuye a profesionalizar la actividad brindando formación, en todos los niveles.<br>
El Programa Inicial de Formación para Agentes debe realizarse de
manera completa dentro sus primeros 4 meses.</p>


<h3>Programa de Formación Inicial <br> Contenido</h3>
<div class="menu2">
<ul>
  <li>Módulo I + Programa de Mentoring</li>
  <li>Módulo II</li>
  <li>Módulo III</li>
  <li>Evaluación pre-diagnóstico (sobre el Manual de Normas y Procedimientos y Carta Oferta Agente)</li>
</ul> 

  </div>
  </div>
</div>


<!--============================
=            FOOTER            =
=============================-->

<?php include "../footer.php" ?>
</body>


</html>