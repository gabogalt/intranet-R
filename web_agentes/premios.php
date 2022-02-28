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

  <title>RE/MAX Rio - Premiación RE/MAX</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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

    <h2 class="m-3">Premiación<span class="rojo"> RE<span class="azul">/</span>MAX</h2>
    <div class="row">
    	<div class="col d-flex justify-content-center">
    		<img class="centrado" src="../imagenes/premios.jpg" style="max-width:100%;width:auto;height:auto;">
    	</div>
    </div>

    <div class="row ">
      <div class="col mt-3">
		
		<div class="container mt-3">
		  <h2 class="text-primary d-flex justify-content-center mb-3">PREMIACIÓN ANUAL</h2>

		  <table class="table">
		    
		    <tbody>
		      <tr>
		        <td>Rookie (el primer año)	</td>
		        <td>22.000</td>
		      </tr>
		      <tr>
		        <td>Executive Club	</td>
		        <td>55.000</td>
		      </tr>
		      <tr>
		        <td>Club 100 %	</td>
		        <td>75.000</td>
		      </tr>
		      <tr>
		        <td>Platinum Club	</td>
		        <td>120.000</td>
		      </tr>
		      <tr>
		        <td>Chairman's Club	</td>
		        <td>165.000</td>
		      </tr>
		      <tr>
		        <td>Titan Club	</td>
		        <td>215.000</td>
		      </tr>
		      <tr>
		        <td>Diamond Club	</td>
		        <td>265.000</td>
		      </tr>
		    </tbody>
		  </table>
		</div>
        
      </div>

      <div class="col  mt-3 mb-5" >
		<div class="container mt-3">
		  <h2 class="text-primary d-flex justify-content-center mb-3">PREMIACIÓN DE CARRERA</h2>
		  <table class="table ">
		    
		    <tbody>
		      <tr>
		        <td>Hall of Fame	</td>
		        <td>1.000.000</td>
		      </tr>
		      <tr>
		        <td>Lifetime Achievement	</td>
		        <td>3.000.000</td>
		      </tr>
		      
		    </tbody>
		  </table>
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