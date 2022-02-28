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

  <title>RE/MAX Rio - Reuniones</title>
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

<div class="container-fluid bg-light mt-3 p-5 animate__animated animate__slideInLeft" > 

	<div class="shadow-lg p-3 mb-5 bg-body rounded">

		<h2>RE/MAX RIO - Reuniones</h2>
		
		<div class="row">
			<div class="col">
        <img src="../imagenes/reurio.jpg" class="animate__animated animate__flipInX" style="max-width:70%;margin-left: 30px; margin-top: 30px">

				
			</div>
			<div class="col">
				<p class="mt-3">
					La oficina organiza diferentes encuentros.
				</p>
				<p>
					Los hay de todos los agentes, por grupos, de capacitación y sociales. Pueden ser presenciales o por zoom.
				</p>
        <p>
          Todos se agendan en google calendar.
        </p>
        <p>
          Para que la organización sea satisfactoria, debemos confirmar o rechazar nuestra asistencia en el calendar.
        </p>
        <p>Y , sobre todo, cumplir con las normas de convivencia durante los mismos.</p>

			
			</div>
		</div>
	</div>



 
<!--============================
=            FOOTER            =
=============================-->

  <?php include "../footer.php" ?>
</body>


</html>