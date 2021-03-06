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
					<li>Se deben hacer tres copias de la reserva, una para la oficina, otra para la firma de aceptaci??n o rechazo del propietario 
						y otra para el dador de la reserva.</li>
					<li> Cambiar el estado de la propiedad en RED RE/MAX a "En negociaci??n".</li>
					<li>Si la oferta fuera rechazada, ser?? necesario que el propietario determine junto a la leyenda ??No conformo?, las condiciones en las que 
						aceptar?? (contra oferta) y as?? le dar?? al oferente otra oportunidad sobre estas nuevas condiciones. El comprador contar?? con un plazo 
						para aceptar la contra oferta del propietario.</li>
					<li>Finalmente, si a??n no prosperara, el propietario deber?? rechazarla y el oferente deber?? ir a la oficina a retirarla.<br> 
					En esa visita, se hace firmar un recibo de reintegro de reserva  al oferente.<br>
						Cambiar el estado de la propiedad en RED RE/MAX a "Activo".</li>
					<li>Si la oferta es aceptada, el propietario deber?? indicar su conformidad.</li>
					<li> Cambiar el estado de la propiedad en RED RE/MAX a "Reservada".</li>
					<li>El oferente, nuevamente al dorso y debajo de la aceptaci??n del propietario, firma que es informado de la aceptaci??n.</li>
					<li>Se recomienda que el monto de la reserva sea de U$D 5.000 
					<li>El propietario cuenta con un plazo establecido en el documento para su conformidad a menos que se presente pr??rroga del plazo por 
					escrito para su aceptaci??n.</li>
					<li>El plazo para la firma del Boleto (compra-venta) deber?? tener fecha cierta y lugar de firma.</li>
					<li>Para el caso de inmuebles con m??s de un propietario, el rechazo de las ofertas deber?? ser formalizado por al menos- uno de ellos.</li>
					<li>Para el caso de inmuebles con m??s de un propietario, la aceptaci??n de las ofertas deber?? ser formalizado por todos ellos.</li>
				</ol>

				<h5 class="text-danger">La reserva de una propiedad RIO de un cliente de otro Equipo RE/MAX</h5>
				<ol>
					<li>Es OBLIGATORIO tomar la reserva de compra en la oficina captadora y con el documento correspondiente a la misma.</li> 
					<li>La reserva queda en la oficina.</li>
					<li>Se deben hacer cuatro copias de la reserva, una para la oficina, otra para el captador, otra para el dador de la reserva y otra para la firma de aceptaci??n o rechazo del propietario</li>
					</ol>
					Los pasos siguientes son iguales al anterior.<br>

					<h5 class="text-danger">La reserva de una propiedad de otro Equipo RE/MAX de un cliente RIO </h5>
					<ol>
					<li>Es OBLIGATORIO tomar la reserva en la oficina captadora a menos que exista una autorizaci??n por escrito del responsable de la oficina captadora a tomar la reserva en RIO.<br> 
					<span class="rojo">IMPORTANTE: Cuando la reserva es tomada por otra oficina/inmobiliaria, debemos chequear que est???n todas las 
					cl??usulas que figuran en las reservas RIO</span></li>
					<li>Nos entregar??n una copia para el cliente RIO y otra para la oficina. </li>
					<li>Nos citar??n para informarnos si la oferta fue aceptada o rechazada, viendo la respuesta con firma del cliente propietario.</li>
					<li>Si la oferta fuera rechazada, y el propietario ha realizado una contraoferta, el cliente RIO podr?? aceptar o rechazar en el transcurso del plazo estableciso en el documento. </li> 
					<li>Finalmente, si a??n no prosperara, el propietario deber?? rechazarla y el cliente RIO deber?? ir a la oficina captadora para que la reserva le sea devuelta. </li>
					<li>Si la oferta es aceptada, el oferente, firma que fue notificado de la aceptaci??n.</li>
					<li>Para el caso de inmuebles con m??s de un propietario, el rechazo de las ofertas deber?? ser formalizado por -al menos- uno de ellos.</li>
					<li>Para el caso de inmuebles con m??s de un propietario, la aceptaci??n de las ofertas deber?? ser formalizado por todos ellos.</li>
				</ol>

				<h5 class="text-danger">Tiempos para aceptaci??n, rechazo y notificaci??n</h5>
				<ul>
					<li>Transcurrido el plazo establecido en la reserva para la conformidad de la misma y no habi???ndose solicitado 
					una pr??rroga por escrito para su aceptaci??n, autom??ticamente se devolver?? la reserva.  El Equipo captador deber?? poner a 
					disposici??n del otro Equipo las pruebas que acrediten lo sucedido.</li>
					<li>En caso de que el comprador no acepte la contraoferta del propietario en el plazo establecido, 
					el Equipo captador podr?? avanzar sobre una nueva reserva.</li>  
				</ul>



    		</div>
    		
    	</div>


		
	</div>
    
    

    </div>


    <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center"> Reservas para locaci??n</h4>
    		
    		<div class="col ">
				<p>
					Juntamente con la reserva, el oferente deber?? presentar: demostraci??n de ingresos suyos y del garante, fotocopia de la propiedad presentada  como
					garant??a, pre-aprobaci??n de seguro de cauci??n. Todos los elementos, que permitan al propietario, aceptar o rechazar la oferta.<br>
					Y consultamos el estado crediticio de locatario y garante.<br>
					Si la oferta es aceptada, antes de proseguir, se pedir?? al oferente: informe de dominio del garante e informe de frecuencia para saber
					cu??ntas veces una propiedad fue ofrecida en garant??a.
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
					- Informe de dominio: sobre el inmueble que se vende. Se necesita domicilio y matr??cula.<br>
					- Informe de inhibici??n: sobre todos los titulares y sobre el titular fallecido de haber una sucesi??n. Se necesita nombre completo y D.N.I.<br>
					- Si se trata de una propiedad horizontal, ??ltima liquidaci??n de expensas.<br> 
					<br>En el supuesto caso que una operaci??n se viera frustrada por  exclusiva culpa del cliente comprador; el Equipo captador tendr?? derecho 
					al reintegro de los gastos de informes, descontando el monto correspondiente al momento de entrega del dinero de reserva al cliente. 
					Esto ser?? exigible siempre y cuando se hubiera establecido la obligaci??n en el documento de reserva.<br><br>
					Se recomienda que el monto del refuerzo complete el 7% del valor de la propiedad.<br>
					<span class="rojo">IMPORTANTE 1:</span><br>
					Es muy importante hacer firmar al vendedor la notificaci??n del refuerzo.<br>
					<span class="rojo">IMPORTANTE 2:</span><br>
					Al tomar el refuerzo, es un buen momento para que el cliente complete los formularios de la UIF.<br>
					Podes descargarlos <a href="uif.php"> aqu??. </a><br>
					Si por alg??n motivo no se completaron, se puede hacer el d??a de la firma del boleto, escritura, adhesiones a fideicomiso, cesiones de derechos, etc.<br>
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