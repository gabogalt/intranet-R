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

  <title>RE/MAX Rio - Imagen personal</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style>
  	
	.animate__animated.animate__flipInX  {
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

  <div class="shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__slideInLeft">
  	<h2 class=" mb-3">Imagen personal</h2>
    <div class="row ">
      <div class="col-7 mt-3">
		
		<div class="container mt-3">
		<h4>No nos compran lo que vendemos sino <span class="rojo">como lo vendemos</span></h4>
		  <p>La primera impresión que causamos, depende en gran medida, de la imagen personal.</p>
		  <p>La imagen personal es algo más que la apariencia:</p>
		    <ul>
				<li>La ropa que vestimos.</li>
				<li>El perfume que usamos.</li>
				<li>El maquillaje.</li>
				<li>El pelo bien peinado.</li>
				<li>Nuestra actitud.</li>
				<li>Nuestra forma de expresarnos.</li>
				<li>El tono y volumen de nuestra voz.</li>
				<li>Nuestros gestos y la sonrisa con la que llegamos.</li>
			</ul>
		 
		</div>
        
      </div>

      <div class="col-5  mt-3 mb-5" >
		<div class="container mt-3">
			
			<img src="../imagenes/imaper.jpg" class=" animate__animated animate__flipInX" style="max-width:100%" >
	  
		 	
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