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

  <title>RE/MAX Rio - Redacción: Representación</title>
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
    		<h2 class="mb-2">Redacción: Mandato</h2>

    		<div class="col ">
    			<h4 class="text-primary text-center">MANDATO SIN REPRESENTACIÓN (SIN PODER)</h4>
			    <p>	Contrato de mandato (puede ser escrito o tácito), en estos casos el representante actúa en nombre propio pero en interés ajeno y la redacción es:<br>
				<br><i>" (nombre completo), dni ................., estado civil..................,
				domicilio.................., quien actúa en mandato sin representación de (nombre completo), dni......................., estado civil..................., domicilio ...............,
				quien en interés de su mandante viene a reservar en (alquiler/
				compra), el inmueble ubicado en.............."</i>
				</p>

				<h4 class="text-primary text-center">MANDATO CON REPRESENTACIÓN (CON PODER)</h4>
				<p>
					<i>.................., D.N.I.: ..............., en nombre y representación y en su
					carácter de apoderado/a, a mérito del Poder General Amplio de
					Administración y Disposición de fecha XX de XX de XXXX, .....,
					escritura número...................., otorgado en la Ciudad de.................
					autorizado por escribano/a.......titular del registro............., de/el/la
					Sr./Sra........................, DNI......................., estado civil.......................,
					domicilio......................., en su calidad de
					Propietaria/heredera/cedente...etc.............</i>

				</p>

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