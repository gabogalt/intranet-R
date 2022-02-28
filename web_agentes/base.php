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

  <title>RE/MAX Rio - Base relacional</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style>
  	.animate__animated.animate__flipInX {
	  --animate-duration: 3s;
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

<div class="container-fluid bg-light mt-3 p-5" > 

  <div class="shadow-lg p-3  bg-body rounded animate__animated animate__slideInUp">
  	<h2>Base Relacional</h2>
    <div class="row ">
      <div class="col-4 mt-3">
		
		<div class="container mt-4">
		  
			<img src="../imagenes/base.jpg"  class=" animate__animated animate__flipInX" style="max-width:100%; height: 100%">

		 
		</div>
        
      </div>

      <div class="col-8  mt-3 " >
		<div class="container mt-3">
		  	<p> Nuestro trabajo se basa en RELACIONES. </p>
			<p>
				Es muy importante guardar información, clasificarla y mantenerla actualizada. Para eso, debemos crear una base de datos de nuestros clientes. Debemos pensar qué tipo de información podemos recolectar y cuáles nos ayudarán a mantener esa relación que es para toda la vida.
			</p>
			
			<p>
				Una Base de Datos de Clientes es una recopilación de información de cada cliente, que resulta relevante para nuestro negocio. El tipo de información que guardamos depende de la utilidad que tenga para nuestro negocio y para nuestras estrategias de marketing. 
			</p>
			
			<p>
				Puede incluir desde datos de contacto (mail, teléfono etc.) hasta especificaciones y detalles acerca de las transacciones realizadas, de cómo se compone su familia, cuúles son sus hobbys. 

			</p>
			
		</div>
      </div>  
    </div>
    <div class="row">
    	<div class="col">
    		<p>Conocer los datos de contacto hasta las preferencias particulares nos permite:</p>
    		<ul>
    			<li>Contactarlos por mail marketing, visitar sus redes, incluirlos en Listas de difusión de whatsapp.</li>
    			<li>No perder el contacto con clientes antiguos o indecisos.</li>
    			<li>Brindarles información del rubro, oportunidades, promociones.</li>
    			<li>Brindar información de aquellas actividades o hobbies que ellos realicen.</li>
    			<li>Saludarlos en fechas especiales.</li>
    		</ul>

    	</div>
    </div>
    
  </div>

 
  
</div>

<div class="container-fluid bg-light p-5" > 

  <div class="shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__slideInLeft">
  	<h4 class="text-primary">Primero: las personas que conocemos</h4>
    <div class="row ">
      <div class="col mt-3">
		
		<div class="container mt-4">
		  
			<ol>
				<li>Familiares/Amigos</li>
					<ol type="a">
						<li>Familiares inmediatos</li>
						<li>Otros parientes</li>
						<li>Amigos</li>
						<li>Vecinos</li>
					</ol>
				<li>Estudios/Educación</li>
					<ol type="a">
						<li>Amigos de la escuela</li>
						<li>Amigos de la facultad</li>
						<li>Conocidos de cursos o talleres</li>
						<li>Profesores, empleados</li>
					</ol>
				<li>Trabajos anteriores</li>
					<ol type="a">
						<li>Clientes</li>
						<li>Proveedores</li>
						<li>Compañeros/Jefes/Socios</li>
						<li>Competencia</li>
					</ol>
			</ol>

		 
		</div>
        
      </div>

      <div class="col  mt-3 " >
		<div class="container mt-3">
		  	

		<ol start="4">

		  	<li>Clubes/Asociaciones</li>
				<ol type="a">
					<li>Culturales</li>
					<li>Deportivos</li>
					<li>Religiosos</li>
					<li>Vecinales</li>
				</ol>
			<li>Lugares que frecuentamos</li>
				<ol type="a">
					<li>Bares/Confiterías/Restaurantes</li>
					<li>Peluquería</li>
					<li>Gimnasio</li>
					<li>Banco</li>
					<li>Negocios</li>
				</ol>
			<li>Profesionales</li>
				<ol type="a">
					<li>Médico/Dentista</li>
					<li>Abogado/Escribano</li>
					<li>Contador</li>
					<li>Masajista</li>
					<li>Peluquero/Manicura/Pedicuro</li>
				</ol>
		</ol>
			
		</div>
      </div>
      <div class="row">
      	<div class="col">
 			<p> Luego, iremos agregando todas aquellas personas que vamos conociendo en la actividad diaria. </p>
      		
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