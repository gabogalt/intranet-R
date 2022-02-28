<?php
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

  <title>RE/MAX Rio - Herramientas</title>
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

            <h2>Herramientas</h2>
  
              <ul>
                 <li> <a href="base.php" class="dropdown-item text-primary">Base relacional</a> </li>
                   <li> <a href="agenda.php" class="dropdown-item text-primary">Uso de agenda</a> </li>
                   <li> <a href="progapps.php" class="dropdown-item text-primary">Programas y apps</a> </li>
                   <li> <a href="redsoc.php" class="dropdown-item text-primary">Redes sociales</a> </li>
                   <li> <a href="flyprop.php" class="dropdown-item text-primary">Flyers propiedades y Flyers/Videos institucionales</a> </li>
                   <li> <a href="disc.php" class="dropdown-item text-primary">DISC</a> </li>
                   <li> <a href="acventas.php" class="dropdown-item text-primary">Acciones de Venta</a> </li>
                   <li> <a href="bajaprecio.php" class="dropdown-item text-primary">Baja de precio</a> </li>
                   <li> <a href="calrio.php" class="dropdown-item text-primary">Calendario RIO</a> </li>
                   <li> <a href="merchan.php" class="dropdown-item text-primary">Merchandising</a> </li>
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