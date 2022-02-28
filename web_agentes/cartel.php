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

  <title>RE/MAX Rio - Colocación o retiro de cartel</title>
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
          <h2>Colocación/retiro de cartel</h2>
    			<img src="../imagenes/cartel.jpg" align="left" style="max-width:100%;width:auto;height:auto;margin-right:40px;">
          Colocar cartel es una forma muy importante de promoción. <br>
          Debemos tener en cuenta que sea colocado en un lugar que lo vean o la gente que pasa caminando, o los autos que pasan, o bien vecinos de 
          otros edificios.<br><br>

          El costo de colocación/retiro debemos pagarlo al momento de solicitarlo.<br>
          Llevar la contabilidad de cuántos carteles tenemos en stock y de que medida son. Saber cu�ntos y cuáles tenemos colocados.<br><br>
          <u><b>Cartel nuevo</u></b>: Hasta el primer año como agentes, la oficina nos presta carteles. Sólo deberemos abonar la faja con nuestros datos, 
          la colocación y el retiro. Luego del primer año, debemos encargar nuestro carteles, abonando el valor de cartel nuevo, la colocación y el retiro.<br>
          En todos los casos, si queremos agregar una faja con el tipo de operación (VENTA, ALQUILER) o de la propiedad (LOTE, CASA, PH) debemos abonar la colocación de la misma.
          <br><br>
          <span class="rojo">IMPORTANTE:</span><br>
          Debemos estar atentos que nuestro pedido, tanto de colocación como de retiro de cartel, se haya concretado.<br>
          48 horas después de haberlo hecho corroboremos que el cartel haya sido colocado o retirado. En el caso que no se hubiera realizado, efectuar el 
          reclamo a través de Administración. <br>
          <h4 class="text-primary">Formulario colocación / retiro de cartel</h4>
          Para solicitar colocación o retiro de cartel, enviar el formulario:<br>
          <a class="btn azul" href="https://forms.gle/Mp1DnCVV9DpJRjd49" target="blank" class="btn azul">Formulario colocación/retiro de cartel</a>

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