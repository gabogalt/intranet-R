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

  <title>RE/MAX Rio - Mails, links, y usuarios-contraseñas</title>
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

  
    <div class="row ">
      <div class="col mt-3">
		
		<div class="container mt-3">
		  <h3 class="text-danger d-flex justify-content-center mb-3">Mails RIO</h3>

		  <table class="table">
		    <thead>
		    	
		    </thead>
		    <tbody>
		      <tr>
		        <td class="text-gray-dark ">Asistente Administrativa: Vanina Falcione</td>
		        <td>vaninafalcione@remax.com.ar</td>
		      </tr>
		      <tr>
		        <td>Capacitación e Intranet:Diana Falicoff</td>
		        <td>escuela@remax-rio.com.ar</td>
		      </tr>
		      <tr>
		        <td>Área contable (cobros y pagos): Guillermo Di Florio</td>
		        <td>guillermodf@remax.com.ar</td>
		      </tr>
		      <tr>
		        <td>Recepción:Karen Accunzi</td>
		        <td>recepcion@remax-rio.com.ar</td>
		      </tr>
		      <tr>
		        <td>Calidad: Nora Chilo</td>
		        <td>calidad@remax-rio.com.ar</td>
		      </tr>
		      <tr>
		        <td>Legales y Alta de propiedades (env�o de documentación): Dra. Amneris Diaz</td>
		        <td>legales@remax-rio.com.ar</td>
		      </tr>
		      <tr>
		        <td>Reactivación de propiedades (luego de un cambio):</td>
		        <td>rio@remax.com.ar</td>
		      </tr>
		       <tr>
		        <td>Broker y Martillera: Andrea Oliveri</td>
		        <td>aoliveri@remax.com.ar</td>
		      </tr>
		    </tbody>
		  </table>
		</div>
        
      </div>

      <div class="col  mt-3 mb-5" >
		<div class="container mt-3">
		  <h3 class="text-danger d-flex justify-content-center mb-3">Links - Usuarios y contraseñas</h3>
		  
		  <table class="table ">
		    
		    <tbody>
		    <thead>
		    	
		    </thead>
		      <tr>
		        <td>Dropbox</td>
		        <td>
		        	<a href="https://www.dropbox.com/es/login" style="text-decoration: none;" target="blank">Enlace a Dropbox</a>
		        </td>
		        <td>
		        	<span>Usuario: rio@remax.com.ar</span>
		        	<br>
		        	<span>Contraseña: 1545Rio</span>
		        </td>
		      </tr>
		      <tr>
		        <td>Reporte Inmobiliario</td>
		        <td>
					<a href="https://www.reporteinmobiliario.com/nuke/index.php" style="text-decoration: none;" target="blank">Enlace a Reporte Inmobiliario</a>
		        </td>
		        <td>
		        	<span>Usuario: rrio19</span>
		        	<br>
		        	<span>Contraseña: rrio19</span>
		        </td>
		      </tr>
		       <tr>
		        <td>Zoom sala RE/MAX RIO</td>
		        <td>
					<a href="https://www.google.com/url?q=https://zoom.us/j/7092389208&sa=D&source=calendar&usd=2&usg=AOvVaw1WwERYBq2ryVbRIYFdd3tO" style="text-decoration: none;" target="blank">Enlace a Zoom sala RE/MAX RIO</a>
		        </td>
		        <td>
		        	<span>ID de reunión: 709 238 9208 </span>
		        	<br>
		        </td>
		      </tr>
		      <tr>
		        <td>Página RE/MAX RIO</td>
		        <td>
					<a href="https://remax-rio.com.ar/" style="text-decoration: none;" target="blank">Enlace a RE/MAX RIO</a>
		        </td>
		        
		      </tr>

		       <tr>
		        <td>Red RE/MAX RIO</td>
		        <td>
					<a href="https://www.redremax.com/" style="text-decoration: none;" target="blank">Enlace a Red RE/MAX</a>
		        </td>
		        <td>
		        	<span>Usuario:  (el mail de cada agente)  </span>
		        	<br>
		        	<span>Contraseña: (la informada por mail a cada agente)</span>
		        </td>
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