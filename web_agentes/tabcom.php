<?php
  require_once('../control_sesion.php');
  header('Content-Type: text/html; charset=UTF-8');
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>RE/MAX Rio - Honorarios</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
   <script>

</script>




  <script src="../js/funciones.js"></script>

  <title>RE/MAX Rio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    

  <style>
 

.animate__animated.animate__slideInRight{
  --animate-duration: 1.5s; 
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
    <li class="breadcrumb-item p-3"><a href="index1.php">Home</a></li>
  </ol>
</nav>


<!--============================
=          CONTENIDO         =
=============================-->

<div class="container-fluid bg-white" style="border-top-style: solid; border-top-width: 15px; border-color: #EEEEEE; border-bottom-width: 15px; border-bottom-style: solid; ">

	<div class="container  mt-3">
	  <h2 class="m-3">HONORARIOS A COBRAR EN LAS OPERACIONES</h2>
	  <p class="m-3">El corredor matriculado percibe honorarios por las operaciones inmobiliarias realizadas, conforme pautas arancelarias establecidas en la respectiva jurisdicci�n.
	  Consultar en operaciones compartidas: <a href="opecom.php">Operaciones compartidas</a></p>            
	  <table class="table table-bordered mt-5 mb-5 animate__animated animate__slideInRight">
	    <thead>
	      <tr>
	        <th></th>
	        <th>CABA</th>
	        <th>PBA</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td><strong>VENDEDOR RESIDENCIAL</strong></td>
	        <td>
	        	- 3%  (Ocasionalmente 2%)
	           	<br>
	            - 1% (+ de 12 unidades funcionales)
	        </td>
	        <td class="p-3">- Idem CABA</td>
	      </tr>
	      <tr>
	        <td><strong>COMPRADOR RESIDENCIAL</strong></td>
	        <td class="p-3">- 4% </td>
	        <td class="p-3">- 3% + 1% Gastos</td>
	      </tr>
	      <tr>
	        <td><strong>VENDEDOR COMERCIAL</strong></td>
	        <td>
	        	- 3% al 5%
	           	<br>
	            - 1% (+ de 12 unidades funcionales)
	        </td>
	        <td>
	        	- 3% 
	           	<br>
	            - 1% (+ de 12 unidades funcionales)
	        </td>
	      </tr>
	      <tr>
	        <td><strong>COMPRADOR COMERCIAL</strong></td>
	        <td class="p-3">- 5% </td>
	        <td class="p-3">-Idem CABA</td>
	      </tr>
	      <tr>
		      <td><strong>FONDO DE COMERCIO</strong>
		        	<br>
		        	<strong>VENDEDOR/COMPRADOR</strong>
		      </td>
		      <td class="p-3">- 6% a cada parte</td>
		      <td class="p-3">-Idem CABA</td>
	      </tr>
          <tr>
	        <td><strong>LOCACION RESIDENCIAL</strong></td>
	        <td>
	        		
				- Locador: 4,15% del total del contrato
	           	<br>
	            - Locatario: exento honorarios inmobiliaria
	        </td>
	        <td>
	        		
				- Locador: 4% del total del contrato
	           	<br>
	            - Locatario: 4% total del contrato
	        </td>
	        
	      </tr>
	      <tr>
		      <td><strong>LOCACION COMERCIAL</strong></td>
		      <td class="p-3">- 5% del total del contrato, a cada parte</td>
		      <td class="p-3">-Idem CABA</td>
	      </tr>
	      <tr>
		      <td><strong>LOCACIÓN TEMPORARIA</strong></td>
		      <td>
	        		
				- 5 % al locador
	           	<br>
	            - 20% al locatario
	        </td>
		     <td>
	        		
				- 10 % al locador
	           	<br>
	            - 10% al locatario
	        </td>
	      </tr>
	      <tr>
		      <td><strong>ADMINISTRACION DE ALQUILER</strong></td>
		      <td class="p-3">- 4% al 6% del valor mensual alquiler al locador</td>
		      <td class="p-3">-Idem CABA</td>
	      </tr>

	      
	    </tbody>
	  </table>
	</div>

</div>



<!--============================
=            FOOTER            =
=============================-->

  <?php include "../footer.php" ?>
</body>


</html>