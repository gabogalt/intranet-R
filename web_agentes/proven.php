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

  <title>RE/MAX Rio - Proceso de venta</title>
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
        <h2>Proceso general para la venta</h2>
    		<div class="col ">
    			<ol>
            <li>  <Font Color="black"> Prelisting: entrevista con el cliente</font></li>
            <li>  <Font Color="black"> ACM</font></li>
            <li> <Font Color="black">Presentación de ACM</li></font>
            <li> <Font Color="black">Pedido de documentación al cliente</li></font>
            <li> <Font Color="black">Firma de la autorización</li></font>
            <li> <Font Color="black">Producción visual: fotos, video, tour virtual</li></font>
            <li> <Font Color="black">Carga en el sistema + COTI + Pedido de alta a la oficina</li></font>
            <li> <Font Color="black">Colocar cartel</li></font>
            <li> <Font Color="black">Campañas de marketing - Visitas</li></font>
            <li> <Font Color="black">Reserva + Aceptación del propietario + Notificación del dador de la reserva</li></font>
            <li> <Font Color="black">Pedidos de informes: inhibición y dominio</li></font>
            <li> <Font Color="black">última liquidación de expensas.</li></font>
            <li> <Font Color="black">Refuerzo + Formularios UIF + Notificación del propietario </li></font>
            <li> <Font Color="black">Contacto con el escribano participante </li></font>
            <li> <Font Color="black">Emisión de facturas </li></font>
            <li> <Font Color="black">Firma del boleto o escritura </li></font>
            <li> <Font Color="black">Rendición</li></font>
            <li> <Font Color="black">Seguimiento al cliente</li></font>
          </ol>

				
				

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