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

  <title>RE/MAX Rio - Opereaciones referidas</title>
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
    		<div class="col ">
    			<h2>Flyers Propiedades</h2>
			    <p>	Podemos seleccionar uno de estos modelos para publicitar una propiedad en las redes.
				<br> No olvidemos acompañar con el disclaimer.</p>
				<div class=" d-flex justify-content-between">
					<div class="d-grid gap-2 d-flex justify-content-md-end">
					  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/149TUUd1gC3bxJ8fSYubmnB8Z3x_1zZ-W/view?usp=sharing"  style="text-decoration: none; color: white ">Modelo 1</a></button>
					</div>

					<div class="d-grid gap-2 d-flex justify-content-md-end">
					  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1_jy0Cznp62iJV_r91fEEHrXk-nzx5UhN/view?usp=sharing" style="text-decoration: none; color: white ">Modelo 2</a></button>
					</div>

					<div class="d-grid gap-2 d-flex justify-content-md-end">
					  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1AlOKV0op-ccwHUBD2RK4-Y3CgJVMfTL2/view?usp=sharing" style="text-decoration: none; color: white ">Modelo 3</a></button>
					</div>
				</div>

				<h4 class="text-danger mt-5"> Ejemplo:</h4>	
				<p>Podemos usar estos flyers y videos para nuestras redes sociales.</p>
				<div class="d-grid gap-2 d-flex justify-content-md-end">
					  <button class="btn btn-outline-primary " type="button"><a href="https://drive.google.com/drive/folders/13A9HNgWcPs1xr6q4XrW-BG3a7lzw1VwB" class="text-black " target="_blank" style="text-decoration: none; color: white ">Descargar</a></button>
				</div>
				

    		</div>
    		<div class="col">
				
				<img src="../imagenes/flyerprop.jpg" style="max-width:80%;width:auto;height:auto;margin-right:20px;">	

    			
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