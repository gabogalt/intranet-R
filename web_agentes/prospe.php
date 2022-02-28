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

  <title>RE/MAX Rio - Prospección</title>
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

<div class="container-fluid bg-light mt-3 p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3  bg-body rounded">
    	<div class="row">
    		<div class="col ">
    			<h2>Prospección</h2>
			    <h4 class="text-primary">El embudo de nuestro negocio</h4>

				<img src="../imagenes/embudo.jpg" class=" animate__animated animate__flipInX"  style="max-width:100%;width:auto;height:auto;" >

    		</div>
    		<div class="col">
				<h5>Contactos/Leads:</h5>
				<p> Iniciamos nuestro negocio con las personas más cercanas, las que ya conocemos. Pero debemos generar 
				nuevos contactos a quienes darle a conocer nuestro trabajo. 
				<h5>Prospectos:</h5>
				 <p>Aquellas personas que nos refieren o conocemos, que sabemos tienen una necesidad de nuestro trabajo y a las que debemos seducir para seguir adelante juntos.</p>
				<h5>Clientes:</h5>
				<p> Personas que realizaron una operación con nosotros y nos referirán. Nos elegirán cada vez que realicen una operación
				inmobiliaria.</p>

    			
    		</div>
    	</div>


		
	</div>
    
    

    </div>

<div class="container-fluid bg-light p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		<div class="col ">
    			<h4 class="text-primary">Prospecto</h4>

				<p>Un prospecto es un contacto que necesita de nuestro servicio. </p>
				<p>Puede ser que nos llegue a través de las acciones que hemos hecho, que nos llegue como un referido (de un contacto, de un cliente, de un colega).</p>
				<p>Puede surgir en la visita a una propiedad, detectando que la persona debe vender su inmueble u ofreciéndole buscar la propiedad que necesita. </p>
				<p>A un prospecto le hacemos la presentación puntual de nuestro servicio. Debemos tener en cuenta la importancia estrat�gica de nuestra conversación.</p>
				<p>Un Prospecto Potencial se convierte en un Cliente cuando compartimos con e´l una operación inmobiliaria.</p>
    		</div>
    		<div class="col">
				<h4 class="text-primary">Cliente</h4>

				<p>Debemos enfocarnos en la construcción de una base solida de Clientes. Nuestros clientes son nuestro ACTIVO más importante   </p>
				<h6>Cuatro categorías de Clientes</h6>
				<ul >
					<li> Clientes A: Gente que es altamente probable que nos refiera negocios</li>
					<li> Clientes B: Gente que nos referiría negocios, si lo pidiéramos</li>
					<li> Clientes C: Gente que tal vez nos refiera negocios en el futuro</li>
					<li> Clientes D: Gente que debemos borrar de nuestra base de datos</li>
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