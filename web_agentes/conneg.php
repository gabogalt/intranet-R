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

  <title>RE/MAX Rio - Control de mi negocio</title>
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

	<div class="shadow-lg p-3  bg-body rounded">

		<h2>Control de mi negocio</h2>
		
		<div class="row">
			<div class="col">
				<p>Es necesario conocer nuestras finanzas para poder planificar y ser concientes de nuestra realidad.</p>
				<p>En nuestro negocio, es fundamental tener un aproximado de la inversión que hacemos:</p>
				<ul>
					<li>Fee de oficina </li>
					<li>Fee anual </li>
					<li>Tarjetas personales</li>
					<li>Sobres</li>
					<li>Colocación y retiro de carteles</li>
					<li>Celular</li>
					<li>Avisos destacados o superdestacados en portales </li>
					<li>Acciones personales de marketing </li>
					<li>Capacitaciones </li>
					<li>Gastos de movilidad</li>
				</ul>
				<p>
					Por otro lado debemos planificar nuestro negocio.
					<br>
					Siempre nuestra Broker está dispuesta a ayudarte para hacerlo juntos. 
				</p>
			</div>
			<div class="col">
				<img src="../imagenes/finanzas.png" class=" animate__animated animate__flipInX"  style="max-width:100%; border-radius: 30px">
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-light  p-5 animate__animated animate__slideInUp" > 

	<div class="shadow-lg p-3 mb-5 bg-body rounded">

		<h2>Tablero de Comando</h2>
		<h4 class="text-primary">Planilla control de nuestra cartera y objetivos</h4>
		
		<div class="row">
			<div class="col">
				<p>Usamos el tablero comando para llevar el control de nuestro negocio.</p>
				<div class="d-grid gap-2 mt-5 d-flex justify-content-md-end">
		  			<button class="btn btn-primary " type="button" style="margin-right: 30px ">
		  				<a href="https://drive.google.com/file/d/1VyprQPoG5vavGsHKGe4JZDhEiazdAZPx/view?usp=sharing"  style="text-decoration: none; color: white; ">Descargar instructivo PDF</a>
		  			</button>
				</div>
				<div class="d-grid gap-2 d-flex mt-5 justify-content-md-end">
		  			<button class="btn btn-primary " type="button" style="margin-right: 30px ">
		  				<a href="https://drive.google.com/file/d/19Q5Tm-23IdGjEqIufhoyM8Vt7pwN-OcA/view?usp=sharing" style="text-decoration: none; color: white; "  >Descargar Tablero comando</a>
		  			</button>
				</div>
			</div>
			<div class="col">
				<p>Este es un ejemplo de c�mo nos va indicando cómo alcanzamos nuestros objetivos:</p>
				<div class="d-grid gap-2 d-flex mt-5 justify-content-md-end">
		  			<button class="btn btn-primary " type="button" style="margin-right: 30px ">
						<a href="https://drive.google.com/file/d/1Jp9cdPmic6SMy3UK9Fp8iud8G81t9NwX/view?usp=sharing" style="text-decoration: none; color: white; ">Descargar ejemplo</a>
		  				
		  			</button>
				</div>
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