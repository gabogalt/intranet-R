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

  <title>RE/MAX Rio - Proceso reserva y refuerzo</title>
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

<div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3  bg-body rounded">
    	<div class="row">
    		<h2>Reserva y Refuerzo</h2>
				<h4 class="text-primary text-center"> Reserva</h4>

    		<div class="col ">
				<h5 class="text-danger">La reserva de una propiedad RIO tomada por el Equipo RIO</h5>

				<ol>
					<li>Es OBLIGATORIO tomar la reserva de compra en la oficina captadora y con el documento correspondiente a la misma.</li> 
					<li>La reserva queda en la oficina.</li>
					<li>Se deben hacer tres copias de la reserva, una para la oficina, otra para la firma de aceptación o rechazo del propietario 
						y otra para el dador de la reserva.</li>
					<li> Cambiar el estado de la propiedad en RED RE/MAX a "En negociación".</li>
					<li>Si la oferta fuera rechazada, será necesario que el propietario determine junto a la leyenda ¿No conformo?, las condiciones en las que 
						aceptará (contra oferta) y así le dará al oferente otra oportunidad sobre estas nuevas condiciones. El comprador contará con un plazo 
						para aceptar la contra oferta del propietario.</li>
					<li>Finalmente, si aún no prosperara, el propietario deberá rechazarla y el oferente deberá ir a la oficina a retirarla.<br> 
					En esa visita, se hace firmar un recibo de reintegro de reserva  al oferente.<br>
						Cambiar el estado de la propiedad en RED RE/MAX a "Activo".</li>
					<li>Si la oferta es aceptada, el propietario deberá indicar su conformidad.</li>
					<li> Cambiar el estado de la propiedad en RED RE/MAX a "Reservada".</li>
					<li>El oferente, nuevamente al dorso y debajo de la aceptación del propietario, firma que es informado de la aceptación.</li>
					<li>Se recomienda que el monto de la reserva sea de U$D 5.000 
					<li>El propietario cuenta con un plazo establecido en el documento para su conformidad a menos que se presente prórroga del plazo por 
					escrito para su aceptación.</li>
					<li>El plazo para la firma del Boleto (compra-venta) deberá tener fecha cierta y lugar de firma.</li>
					<li>Para el caso de inmuebles con más de un propietario, el rechazo de las ofertas deberá ser formalizado por al menos- uno de ellos.</li>
					<li>Para el caso de inmuebles con más de un propietario, la aceptación de las ofertas deberá ser formalizado por todos ellos.</li>
				</ol>

				<h5 class="text-danger">La reserva de una propiedad RIO de un cliente de otro Equipo RE/MAX</h5>
				<ol>
					<li>Es OBLIGATORIO tomar la reserva de compra en la oficina captadora y con el documento correspondiente a la misma.</li> 
					<li>La reserva queda en la oficina.</li>
					<li>Se deben hacer cuatro copias de la reserva, una para la oficina, otra para el captador, otra para el dador de la reserva y otra para la firma de aceptación o rechazo del propietario</li>
					</ol>
					Los pasos siguientes son iguales al anterior.<br>

					<h5 class="text-danger">La reserva de una propiedad de otro Equipo RE/MAX de un cliente RIO </h5>
					<ol>
					<li>Es OBLIGATORIO tomar la reserva en la oficina captadora a menos que exista una autorización por escrito del responsable de la oficina captadora a tomar la reserva en RIO.<br> 
					<span class="rojo">IMPORTANTE: Cuando la reserva es tomada por otra oficina/inmobiliaria, debemos chequear que est�n todas las 
					cláusulas que figuran en las reservas RIO</span></li>
					<li>Nos entregarán una copia para el cliente RIO y otra para la oficina. </li>
					<li>Nos citarán para informarnos si la oferta fue aceptada o rechazada, viendo la respuesta con firma del cliente propietario.</li>
					<li>Si la oferta fuera rechazada, y el propietario ha realizado una contraoferta, el cliente RIO podrá aceptar o rechazar en el transcurso del plazo estableciso en el documento. </li> 
					<li>Finalmente, si aún no prosperara, el propietario deberá rechazarla y el cliente RIO deberá ir a la oficina captadora para que la reserva le sea devuelta. </li>
					<li>Si la oferta es aceptada, el oferente, firma que fue notificado de la aceptación.</li>
					<li>Para el caso de inmuebles con más de un propietario, el rechazo de las ofertas deberá ser formalizado por -al menos- uno de ellos.</li>
					<li>Para el caso de inmuebles con más de un propietario, la aceptación de las ofertas deberá ser formalizado por todos ellos.</li>
				</ol>

				<h5 class="text-danger">Tiempos para aceptación, rechazo y notificación</h5>
				<ul>
					<li>Transcurrido el plazo establecido en la reserva para la conformidad de la misma y no habi�ndose solicitado 
					una prórroga por escrito para su aceptación, automáticamente se devolverá la reserva.  El Equipo captador deberá poner a 
					disposición del otro Equipo las pruebas que acrediten lo sucedido.</li>
					<li>En caso de que el comprador no acepte la contraoferta del propietario en el plazo establecido, 
					el Equipo captador podrá avanzar sobre una nueva reserva.</li>  
				</ul>



    		</div>
    		
    	</div>


		
	</div>
    
    

    </div>


    <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center"> Reservas para locación</h4>
    		
    		<div class="col ">
				<p>
					Juntamente con la reserva, el oferente deberá presentar: demostración de ingresos suyos y del garante, fotocopia de la propiedad presentada  como
					garantía, pre-aprobación de seguro de caución. Todos los elementos, que permitan al propietario, aceptar o rechazar la oferta.<br>
					Y consultamos el estado crediticio de locatario y garante.<br>
					Si la oferta es aceptada, antes de proseguir, se pedirá al oferente: informe de dominio del garante e informe de frecuencia para saber
					cuántas veces una propiedad fue ofrecida en garantía.
				</p>	
				
    		</div>
    		
    	</div>


		
	</div>
    
    

    </div>


     <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center"> Refuerzo para la venta</h4>
    		
    		<div class="col ">
				<p>
					Antes de tomar un refuerzo, se debe hacer pedidos de informes:<br>
					- Informe de dominio: sobre el inmueble que se vende. Se necesita domicilio y matrícula.<br>
					- Informe de inhibición: sobre todos los titulares y sobre el titular fallecido de haber una sucesión. Se necesita nombre completo y D.N.I.<br>
					- Si se trata de una propiedad horizontal, última liquidación de expensas.<br> 
					<br>En el supuesto caso que una operación se viera frustrada por  exclusiva culpa del cliente comprador; el Equipo captador tendrá derecho 
					al reintegro de los gastos de informes, descontando el monto correspondiente al momento de entrega del dinero de reserva al cliente. 
					Esto será exigible siempre y cuando se hubiera establecido la obligación en el documento de reserva.<br><br>
					Se recomienda que el monto del refuerzo complete el 7% del valor de la propiedad.<br>
					<span class="rojo">IMPORTANTE 1:</span><br>
					Es muy importante hacer firmar al vendedor la notificación del refuerzo.<br>
					<span class="rojo">IMPORTANTE 2:</span><br>
					Al tomar el refuerzo, es un buen momento para que el cliente complete los formularios de la UIF.<br>
					Podes descargarlos <a href="uif.php"> aquí. </a><br>
					Si por algún motivo no se completaron, se puede hacer el día de la firma del boleto, escritura, adhesiones a fideicomiso, cesiones de derechos, etc.<br>
				</p>	
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