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

  <title>RE/MAX Rio - Networking</title>
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
    <li class="breadcrumb-item ml-3"><a href="index1.php">Home</a></li>
  </ol>
</nav>

<!--============================
=          CONTENIDO         =
=============================-->

<div class="container-fluid bg-light mt-3 p-5" > 

  <div class="shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__slideInLeft">

    <h2>NETWORKING</h2>
    <div class="row">
      <div class="col mt-3">
        <p>
          <font color="red">RE<font color="blue">/</font color><font color="red">MAX</font color> </font color>es una red de trabajo adherida a una marca que es l�der mundial en su segmento.
        </p>
        <p>
          Pertenecer a <font color="red">RE<font color="blue">/</font color><font color="red">MAX</font color> </font color>, es contar con la red de contención de un modelo de eficacia probada y reconocida, desde 1973 en todo el mundo y desde 2005 en Argentina.
        </p>
        <p>
          Cada oficina organiza una reuniín mensual.
        </p>
        <p>
          RAU organiza una reuniín Regional y una Convención (de toda la región) al año.
        </p>
        <p>
          <font color="red">RE<font color="blue">/</font color><font color="red">MAX</font color> </font color>organiza una Convención Mundial cada año.
        </p>
        <p>
          Cada una de ellas es de suma importancia para nuestro crecimiento. No sólo es un momento de aprendizaje, de reconocimiento a la trayectoria de cada uno, de conocer nuevos tips y nuevas tendencias, sino que es la oportunidad de compartir con todos los colegas momentos de distracción y conocimiento mutuo.

        </p>

        
      </div>

      <div class="col mt-3">
        <img src="../imagenes/reuniones.jpg" style="max-width:100%;">
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