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

  <title>RE/MAX Rio - Calificación agentes</title>
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

<div class="container-fluid bg-light mt-3 p-5" > 

  <div class="shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__fadeInUp">

    <h2>CALIFICACIÓN INTERNA DE AGENTES</h2>
    <div class="row">
      
      <div class="col">
        <p>
          Una de las virtudes de <font color="red">RE</font color><font color="blue">/</font color><font color="red">MAX </font color>es el trabajo en red.
        </p>
        <p>
          Nuestro trabajo se agiliza y simplifica por que trabajamos con cientos de colegas con los que muchas veces, compartimos una operación, una visita a una propiedad, más allá de los eventos donde nos encontremos.
        </p>
        <p>
          En todas esas oportunidades, tenemos la posibilidad de calificar su desempeño y, por supuesto, ellos a nosotros.
        </p>
        <p>
          Tener una buena calificación de nuestros pares, es sumamente importante a la hora de que nos refieran.
        </p>
        <p>
          No dejemos de pedir a los agentes que lo hagan. Es muy importante para nuestro trabajo, como para la oficina.
        </p>
        <p>
          <b><u><font color="red">ACLARACIÓN</font color></b></u>: Para poder calificar a un colega de la red, debemos conocer el ID de la propiedad por la cual tuvimos el contacto.
        </p>

        <div class="d-grid gap-2 d-flex m-3 justify-content-md-end">
          <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1gqHQVyYT24uEyQPK2i6cAUb6danIBpt8/view?usp=sharing" style="text-decoration: none; color: white ">Descargar instructivo para calificar a un agente</a></button>
        </div>

      </div>

      <div class="col mt-3">
        <img src="../imagenes/calificacion.jpg" style="max-width:100%;">
      </div>


      
    </div>
    <div class="row">
      <div class="col">
        
      </div>

      <div class="col mb-3">
        
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