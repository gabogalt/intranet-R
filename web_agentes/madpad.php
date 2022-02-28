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

  <title>RE/MAX Rio - Madrina/Padrino</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style>
  	
	.animate__animated.animate__flipInX  {
	  --animate-duration: 2s;
	}

	.animate__animated.animate__slideInLeft{
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

<div class="container-fluid bg-light mt-3 p-5" > 

  <div class="shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__slideInUp">
  	<h2 class=" mb-3">Madrina/padrino</h2>
    <div class="row ">
      <div class="col " style="margin-left: 30px">
		<img src="../imagenes/padrino.jpg" align="left" class="animate__animated animate__flipInX " style="max-width:90%;margin-right: 40px;">
        
      </div>

      <div class="col  mt-3 mb-5" >
		<div class="container mt-3">
			
			<p>Cuando ingresamos, nuestra broker nos designa un padrino/madrina.</p>
			<p>La idea es que acompañemos a nuestro padrino/madrina a un prelisting, veamos cómo se arma un ACM, cómo se presenta el ACM, cómo se muestra una propiedad.</p>
			<p>Es altamente productivo ver trabajar a los agentes que tienen mayor antigüedad, siempre que sea posible.</p>
	  
		 	
		</div>
      </div>  
    </div>
    
  </div>

  <div class="shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__slideInLeft">
    <div class="row ">
      <div class="col mt-3 " style="margin-left: 30px">
		<img src="../imagenes/Diapositiva1.JPG"  style="max-width:100%">
		
        
      </div>

      <div class="col  mt-3 " >

		<img src="../imagenes/Diapositiva2.JPG" align="right"style="max-width:100%">
		

      </div> 

      <div class="d-grid gap-2 d-flex justify-content-md-end p-3">
		  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1NwZDEUD2ElJk79EEbUxzQi0sdJNTBN5v/view?usp=sharing" style="text-decoration: none; color: white ">Descargar ChecK List</a></button>
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