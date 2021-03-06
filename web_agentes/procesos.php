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

  <title>RE/MAX Rio - Procesos</title>
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

            <h2>Procesos</h2>
  
              <ul>
                 <li> <a href="proven.php" class="dropdown-item text-primary">Proceso general de VENTA</a> </li>
                  <li> <a href="proalq.php" class="dropdown-item text-primary">Proceso general de LOCACI??N</a> </li>
                  <li> <a href="objcli.php" class="dropdown-item text-primary">Objeciones del cliente</a> </li>
                  <li> <a href="fotvid.php" class="dropdown-item text-primary">Producci??n visual - Plano</a> </li>
                  <li> <a href="doccap.php" class="dropdown-item text-primary">Captaci??n: Documentos requeridos</a> </li>
                  <li> <a href="cargaprop.php" class="dropdown-item text-primary">Alta de propiedades y tips </a> </li>
                  <li> <a href="cartel.php" class="dropdown-item text-primary">Cartel - Formulario pedido</a> </li>
                  <li> <a href="reserva.php" class="dropdown-item text-primary">Reservas - Refuerzos</a> </li>
                  <li> <a href="gasven.php" class="dropdown-item text-primary">  Firma de escritura / boleto - Gastos</a> </li>
                  <li> <a href="dialoc.php" class="dropdown-item text-primary">Firma del contrato de locaci??n - Gastos</a> </li>
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