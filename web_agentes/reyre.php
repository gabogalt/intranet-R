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

  <title>RE/MAX Rio - Recibos, reintegros y uso de reserva</title>
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
    		<h2>Recibos, reintegro y autorización de uso de reservas</h2>
    		<div class="col ">
    			<h4 class="text-primary">Recibos</h4>
    			<h6 class="text-danger">RECIBO PROVISORIO DE RESERVA</h6>
			    <p>Es el único documento que firma el agente. Sirve para tomar la reserva en el momento de la visita a la propiedad, en el caso de que el cliente 
				no pueda acercarse en ese momento a la oficina. En el mismo documento dice que el reservante debe acercarse a la oficina para llevarse 
				una reserva firmada por el corredor con todos los términos y condiciones de la propuesta. <br>
				Cuando el agente toma una reserva fuera de la oficina, el oferente se lleva firmado el recibo por el agente, y el agente lleva a la oficina
				la reserva firmada por el oferente. En la oficina, se intercambia la documentación, con la reserva firmada por la martillera.</p>
				<font color="red">Importante </font color>: DESTRUIR EL RECIBO YA QUE CASO CONTRARIO EL OFERENTE ENTREGA DINERO DOS VECES A DOS PERSONAS DISTINTAS<br>
				Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y si se trata de una operación de Compraventa o locación. 

					<div class="d-grid gap-2 d-flex justify-content-md-end">
					  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1iTCMmfPlXIkG4egzaXIMzaPirziOPS9p/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a>
					  </button>
					</div>
				<h6 class="text-danger">RECIBO DEVOLUCIÓN DE RESERVA DE CLIENTES</h6>
				<p>	Se usa para que en las escrituras, boletos o firma de contrato de locación conste que reintegramos el dinero dejado como reserva. <br> Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y si se trata de una operación de Compraventa o locación.</p>

    		</div>
    		<div class="col">
				<h4 class="text-primary">Reintegros</h4>
				<h6 class="text-danger">REINTEGRO DE RESERVAS</h6>
				<p>	Se usa cuando no hay acuerdo de las partes. Este documento debe ser firmado SÓLO por la persona que ENTREGÓ y RETIRA el dinero de la reserva.<br>
				NO debe ser firmada por personal de la oficina. TODOS LOS REINTEGROS DEBEN SER APROBADOS POR LA MARTILLERA.<br>
				Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y si se trata de una operación de Compraventa o locación.<br>
				</p>

				<div class="d-grid gap-2 d-flex justify-content-md-end">
				  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1g8KG3AeOLzdtZxu6DcD2apXiIP1GMkYq/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a>
				  </button>
				</div>	

				<h4 class="text-primary">autorización uso de reserva/refuerzo</h4>
				<h6 class="text-danger">autorización DE USO DE RESERVAS</h6>
				<p>Se usa cuando el VENDEDOR precisa la reserva del COMPRADOR que se encuentra en poder de la oficina, y el COMPRADOR autoriza a hacer entrega de ese dinero.</p>
				<p>
				<div class="d-grid gap-2 d-flex justify-content-md-end">
				  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/144sZewXWp46bHZZG0szWXlotSOwLE8sQ/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a>
				  </button>
				</div>	</p>

				<h6 class="text-danger">autorización DE USO DE RESERVA Y REFUERZO </h6>
				<p>Se usa cuando el VENDEDOR precisa la reserva  y el refuerzo del COMPRADOR que se encuentra en poder de la oficina, y el COMPRADOR autoriza a hacer entrega de ese dinero.<br></p>
				
				<div class="d-grid gap-2 d-flex justify-content-md-end">
				  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1JvbOMepDrVDHsGOlzP4BrivdDji2Wv-6/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a>
				  </button>
				</div>	</p>


    			
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