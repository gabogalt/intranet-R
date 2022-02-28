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

  <title>RE/MAX Rio - Proveedores</title>
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

		<h2>OPERACIONES REFERIDAS</h2>
		
		<div class="row">
			<div class="col">
				<img src="../imagenes/proveedores.jpg" class="mt-3  animate__animated animate__flipInX" style="max-width:70%;width:auto;height:auto; margin-left:30px">
			</div>
			<div class="col">
				<p class="mt-3">
					Tenemos un listado de proveedores que podemos recomendar.
				</p>
				<p>
					Aportemos a este listado todo aquella persona que puede ser útil para nuestros clientes o para nuestros comáñeros.
				</p>

				<div class="d-grid gap-2 d-flex justify-content-md-end">
		  			<button class="btn btn-primary " type="button" style="margin-right: 30px ">
		  				<a href="https://docs.google.com/spreadsheets/d/1nw3Zf5MeUCzjliFnnWqD3Ce1T-OrEy5GT2d_3J8Tl3U/edit?usp=sharing" style="text-decoration: none; color: white; ">Descargar listado de proveedores</a>
		  			</button>
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