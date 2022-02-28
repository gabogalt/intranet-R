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

  <title>RE/MAX Rio - Ingresos e inversión</title>
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

<div class="container-fluid bg-light mt-3 p-5 animate__animated animate__slideInUp" > 

	<div class="shadow-lg p-3 mb-5 bg-body rounded">

		<h2>Ingresos e inversión del agente</h2>
		
		<div class="row">
			<div class="col">
				<h4 class="text-primary">Inversión que todos los agentes debemos considerar</h4>
				<ul>
					<li>Fee mensual (a partir del 6to mes del alta)</li>
					<li>Membresía anual (la primera se paga al 4to mes del alta)</li>
					<li>Tarjetas personales</li>
					<li>Sobres</li>
					<li>Colocación y retiro de carteles</li>
					<li>Celular</li>
					<li> Avisos destacados o superdestacados en portales.</li>
					<li>Acciones personales de marketing.</li>
					<li>Capacitaciones.</li>
					<li>Movilidad.</li>
					
				</ul>
			</div>
			<div class="col">
				<h4 class="text-primary">Facturación</h4>
				<p>Los Agentes no podemos facturar honorarios profesionales.</p> 
				<p> Tenemos derecho a percibir una retribución por nuestros servicios, que son facturados directamente al cliente al cual el corredor matriculado ya factur� sus honorarios profesionales.</p>

			</div>
		</div>
	</div>

	<div class="shadow-lg p-3 mb-5 bg-body rounded">

		
		<div class="row">
			<h3 class="">Carrera en RE/MAX</h3>
			<div class="col">
				<h5 class="text-primary ">Sistema Rapp:</h5>
				<p class="">Sistema obligatorio de inicio.</p>
				<h5 class="text-primary  ">Sistema Alto:</h5>
				<p>Sistema obligatorio intermedio.</p>
				<h5  class="text-danger ">Requisitos para pasar del RAPP al Alto:</h5>
				<ol>
					<li>Cumplir el plazo de un año como RAPP</li>
					<li>Notificar su voluntad de pase con 60 días de anticipación</li>
					<li>Abonar 4 meses del Fee Mensual (2 meses de depósito y 2 adelantados). El depósito se utilizarón únicamente en el caso que correspondiera cobrar saldos deudores por parte del Agente. En caso de no existir deudas el importe del depósito abonado deberá ser devuelto en su totalidad al Agente en caso de traspaso y/o desvinculación de oficina</li>
					<li>El Agente debe haber alcanzado el Club 100% dentro de sus íltimos doce meses </li>
					<li>Haber realizado la capacitación avanzada Peak Producers</li>
					<li>Contar con una cartera exclusiva del 95% o más</li>
					<li>Presentar constancia de inscripción vigente al Monotributo (código actividad 960990 y categoría: según ingresos)</li>
					<li>Contar con no menos de 4 estrellas en el Rating de Agentes</li>
					<li>Firmar el formulario de pase</li>

				</ol>
				<p>Un Agente para poder avanzar en un pase y registrarlo, cualquiera sea, deberá solicitar una reuni�n con RE/MAX Argentina y Uruguay ANTES de comunicarlo/efectivizarlo.</p>
			</div>
			<div class="col">
				<h5 class="text-primary ">Sistema Puro:</h5>
				<h6 class="text-danger"  style="margin-left: 20px">Gastos agente PURO:</h6>
				<p style="margin-left: 20px">
					Se le trasladaró el 80% de los siguientes conceptos:<br>
					CABA: Se limita la comisión para el corredor matriculado entre un 2% (si el Broker está colegiado) y 3% (si el Broker no está colegiado y tiene a un corredor asociado)<br>
					PBA: Se establece un máximo del 5% para la comisión del corredor matriculado,
					PBA: La Caja del Martillero (6%) es tambión un costo para operar el negocio, y por lo tanto un costo que el Agente PURO debe compartir
				</p>
				<h5 class="text-danger">Requisitos para pasar del Alto al Puro:</h5>
				<ol>
					<li> El Agente deberá cumplir un plazo mínimo de 6 meses de ALTO</li>
					<li> Notificar su voluntad de pase con 60 días de anticipación</li>
					<li> Abonar 4 meses del Fee Mensual de Gestión correspondientes a 2 meses de depósito y 2 adelantados. El depósito se utilizará únicamente en el caso que correspondiera cobrar saldos deudores por parte del Agente. En caso de no existir deudas el importe del depósito abonado deberá ser devuelto en su totalidad al Agente en caso de traspaso y/o desvinculación de oficina</li>
					<li> El Agente dentro de sus últimos doce meses debe haber alcanzado el Club 100%</li>
					<li> Haber realizado la capacitación avanzada Peak Producers</li>
					<li> Contar con una cartera exclusiva del 95% o más</li>
					<li> Deberá presentar constancia de inscripción vigente al Monotributo (código actividad 960990 y categoría: según ingresos)</li>
					<li> Contar con no menos de 4 estrellas en el Rating de Agentes</li>
					<li> Firmar el formulario de pase</li>
				</ol>
				
				
			</div>
		</div>
	</div>

	<div class="shadow-lg p-3 mb-5 bg-body rounded">

		
		<div class="row">
			
			<div class="col">
				<h5 class="text-primary ">Team Leader:</h5>
				
				<h5  class="text-danger ">Requisitos para ser TEAM LEADER:</h5>
				<ol>
					<li>Deberá ser Agente PURO.</li>
					<li>Dentro de sus últimos 12 meses, debe haber alcanzado el nivel Platino</li>       
					<li>El PURO deberá contar con la aprobación de su Broker tanto como la de RAU para convertirse en Team Leader. Solicitará para ello reunión con RAU.</li> 
					<li>Debe presentar constancia de inscripción como Responsable Inscripto.</li>
					<li>Peak Producers completo.</li>
					<li> Contar con una cartera exclusiva del 95% o más</li>
					<li>Contar con no menos de 4 estrellas en el Rating de Agentes.</li>
				</ol>
	
			
				<h5 class="text-primary ">Agente Junior:</h5>
				<p>Pertenece a un Team.</p>
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