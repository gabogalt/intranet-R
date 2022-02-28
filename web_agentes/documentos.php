/<?php
  require_once('../control_sesion.php');
  header('Content-Type: text/html; charset=UTF-8');
  
?>
<?php
	// header('Content-Type: text/html; charset=iso-8859-1');
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

  <title>RE/MAX Rio - Documentos</title>
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
        <div class="col ">

            <h2>Documentos</h2>
  
              <ul>
                 <li> <a href="hojlog.php" class="dropdown-item text-primary">Hoja con LOGO</a> </li>
                    <li> <a href="planmark.php" class="dropdown-item text-primary">Plan de Marketing</a> </li>
                    <li> <a href="prelist.php" class="dropdown-item text-primary">Prelisting: Primera entrevista y Datos a releva</a> </li>
                    <li> <a href="acm.php" class="dropdown-item text-primary">Informe ACM</a> </li>
                    <li> <a href="presacm.php" class="dropdown-item text-primary">Presentación del ACM</a> </li>
                    <li> <a href="repac.php" class="dropdown-item text-primary">Reporte de actividades </a> </li>
                    <li> <a href="autori.php" class="dropdown-item text-primary">Autorizaciones  </a> </li>
                    <li> <a href="muestra.php" class="dropdown-item text-primary">Muestra de la propiedad y Planilla de visitas</a> </li>
                    <li> <a href="coti.php" class="dropdown-item text-primary">Formulario Pedido de COTI</a> </li>
                    <li> <a href="recaba.php" class="dropdown-item text-primary">Reservas, refuerzos y prórrogas en C.A.B.A. </a> </li>
                    <li> <a href="repba.php" class="dropdown-item text-primary">Reservas, refuerzos y prórrogas en P.B.A.  </a> </li>
                    <li> <a href="reyre.php" class="dropdown-item text-primary">Recibos, Reintegros y autorización uso de reservas</a> </li>
                    <li> <a href="redrepresentados.php" class="dropdown-item text-primary">Redacción: mandato  </a> </li>
                    <li> <a href="docloc.php" class="dropdown-item text-primary">Contratos y Documentos tipo LOCACIÓN</a> </li>
                    <li> <a href="docven.php" class="dropdown-item text-primary">Contratos y Documentos tipo VENTA</a> </li>
                    <li> <a href="uif.php" class="dropdown-item text-primary">UIF  </a> </li>
                    <li> <a href="rendi.php" class="dropdown-item text-primary">Rendición - Planilla</a> </li>
              </ul>
          
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