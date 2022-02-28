<?php
  require_once('../control_sesion.php');
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

  <title>RE/MAX Rio - Pizarra</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    

  <style>
 
    .animate__animated.animate__flipInX  {
      --animate-duration: 2s;
  }
 
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

    <h2 class="mt-3">OPERACIONES REFERIDAS</h2>
    
    <div class="row">
      <div class="col">
        <h5 class="mt-3 text-primary"> En nuestra oficina hay una pizarra donde vamos completando nuestro progreso semanal.</h5>
         <h5 class="text-primary"> De esta manera, los d�as viernes, nuestra broker tendr� visualmente, el avance de cada agente. 
        </h5> 
        <p>Los items a completar son:</p>
        <ul>
          <li> Ley del metro: Prospección: con nuestro contactos más cercanos</li>
          <li> Sembrado activo: Acciones que llevamos a cabo teniendo contacto con posibles clientes</li>
          <li> Sembrado pasivo: Acciones en las que no tenemos un contacto con posibles clientes, por ejemplo, una publicación en una revista barrial.</li>
          <li> Redes Sociales: posteos realizados</li>
          <li> Pedidos de ACM: Cuántos pedidos de ACM tuvimos</li>
          <li> Prelisting: Cuántos ACM presentamos</li>
          <li> Autorizaciones: Cuantás autorizaciones nos firmaron</li>
          <li> Publicaci�n: Cuantás propiedades subimos al sistema</li>
          <li> Marketing y consultas: Cuantás consultas recibimos</li>
          <li> Visitas: Cuantás visitas a las propiedades hicimos</li>
          <li> Reservas: Cuantás reservas tomamos</li>
          <li> Refuerzos: Cuántos refuerzos tomamos</li>
          <li> Firma de operación: Cuantás firmas tuvimos</li>
          <li> Referidos y repetidos: Cuántos referidos y/o clientes repetidos nos contactaron.</li>
        </ul>
        <p>Cada pin <FONT COLOR="blue">azul </font color>equivale a 1 </p>
        <p> Cada pin <FONT COLOR="red">rojo </font color>equivale a 5 </p>
      </div>
      <div class="col">
         <img src="../imagenes/pizarra.jpg"style="max-width:100%;border-radius: 30px; " class="animate__animated animate__flipInX mt-4 " >
      </div>
    </div>
  </div>



 
<!--============================
=            FOOTER            =
=============================-->

  <?php include "../footer.php" ?>
</body>


</html>