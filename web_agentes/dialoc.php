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

<div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3  bg-body rounded">
    	<div class="row">
    		<h2>Gastos Locaci�n</h2>
				<h4 class="text-primary text-center"> Locación  vivienda</h4>

    		<div class="col ">
				<h5>C.A.B.A</h5>
				<p class="text-danger">LOCADOR</p>
				<ul>
					<li>Honorarios inmobiliarios</li>
				</ul>
				<p class="text-danger">LOCATARIO</p>.
				<ul>
					<li>
					Si es garant�a real:
					<ul>
					<li>Informe de inhibición garantes</li>
					<li>Informe dominio de la propiedad de garante</li>
					<li> Informe de frecuencia</li>
					</ul></li>
					<li>Si la garantía es un seguro de caución, el costo del mismo, que abona a la seguradora.</li>
					<li>Certificación de firmas: del locatario y garantes, que abona al escribano.</li>
				</ul>



    		</div>
    		<div class="col">
				
				<h5>P.B.A</h5>	
				<p class="text-danger">LOCADOR</p>
				<ul>
					<li>Honorarios inmobiliarios</li>
					<li>Impuesto a los sellos: 50% del 0.5% valor contrato</li>
				</ul>
				<p class="text-danger">LOCATARIO</p>
				<ul>
					<li>Honorarios inmobiliarios</li>

					<li>
					Si es garantía real:
					<ul>
					<li>Informe de inhibición garantes</li>
					<li>Informe dominio de la propiedad de garante</li>
					<li> Informe de frecuencia</li>
					</ul></li>
					<li>Si la garantía es un seguro de caución, el costo del mismo.</li>
					<li>Certificación de firmas: suyo y garantes.</li>
					<li>Impuesto a los sellos: 50% del 0.5% valor contrato</li>
				</ul>

    			
    		</div>
    	</div>


		
	</div>
    
    

    </div>


    <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center"> Locación  temporaria</h4>
    		
    		<div class="col ">
				<h5>C.A.B.A</h5>
				<p class="text-danger">LOCADOR</p>
				<ul>
					<li>Honorarios inmobiliarios</li>
					<li>Impuesto a los sellos: 50% del 0.5% valor contrato</li>
				</ul>
				<p class="text-danger">LOCATARIO</p>.
				<ul>
					<li>Honorarios inmobiliarios.</li>
					<li>Certificación de firmas: suyo y garantes.</li>
					<li>Impuesto a los sellos: 50% del 0.5% valor contrato</li>
				</ul>

    		</div>
    		<div class="col">
				
				<h5>P.B.A</h5>	
				<p class="text-danger">LOCADOR</p>
				<ul>
					<li>Honorarios inmobiliarios</li>
					<li>Impuesto a los sellos: 50% del 0.5% valor contrato</li>
				</ul>
				<p class="text-danger">LOCATARIO</p>
				<ul>
				<li>Honorarios inmobiliarios</li>
				<li>Impuesto a los sellos: 50% del 0.5% valor contrato</li>
				<li>Certificación de firmas
				</ul>

    			
    		</div>
    	</div>


		
	</div>
    
    

    </div>


     <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center"> Locación  comercial</h4>
    		
    		<div class="col ">
				<h5>C.A.B.A</h5>
				<p class="text-danger">LOCADOR</p>
				<ul>
					<li>Honorarios inmobiliarios</li>
					<li>Impuesto a los sellos: 0.5% valor del contrato</li>
				</ul>
				<p class="text-danger">LOCATARIO</p>.
				<ul>
					<li>Honorarios inmobiliarios.</li>
					<li>
					Si es garantía real:
					<ul>
					<li>Informe de inhibición garantes</li>
					<li>Informe dominio de la propiedad de garante</li>
					<li> Informe de frecuencia</li>
					</ul></li>
					<li>Si la garantía es un seguro de caución, el costo del mismo.</li>
					<li>Certificación de firmas: suyo y garantes.</li>
					<li>Impuesto a los sellos: 0.5% valor del contrato</li>
				</ul>

    		</div>
    		<div class="col">
				
				<h5>P.B.A</h5>	
				<p class="text-danger">LOCADOR</p>
				<ul>
					<li>Honorarios inmobiliarios</li>
					<li>Impuesto a los sellos: 50% del 1.2% valor contrato</li>
				</ul>
				<p class="text-danger">LOCATARIO</p>
				<ul>
					<li>Honorarios inmobiliarios</li>
					<li>
					Si es garantía real:
					<ul>
					<li>Informe de inhibición garantes</li>
					<li>Informe dominio de la propiedad de garante</li>
					<li> Informe de frecuencia</li>
					</ul></li>
					<li>Si la garantía es un seguro de caución, el costo del mismo.</li>
					<li>Impuesto a los sellos: 50% del 1.2% valor contrato</li>
					<li>Certificación de firmas</li>
				</ul>

    			
    		</div>
    	</div>


		
	</div>
    
    

    </div>

    <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center mb-5"> Día de la firma del contrato de locación</h4>
    		
    		<div class="col ">
				<img src="../imagenes/escritura.jpg"  style="max-width:100%;width:auto;height:auto;margin-right:40px;" >
    		</div>
    		<div class="col">
				
				<p>
					Es un día importante para todas las partes. 
					LLegar a la firma con tiempo, sin olvidar nada, hará que sea un momento distendido e inolvidable, para nosotros y, especialmente, 
					para nuestros clientes.<br>
					Comencemos a organizarlo una semana antes. Descargó el Check List.
					<br><br>

					
					<div class="d-grid gap-2 d-flex justify-content-md-end">
					  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1DBQ9U7R8vh3ALN35qw7OKjt6sACebk7m/view?usp=sharing"style="text-decoration: none; color: white ">Descargar Check List Firma Contrato locación</a></button>
					</div>

					<br><br>
					Regalos para los clientes: Podemos llevar un presente que les quede de recuerdo, por ejemplo, un reloj para colgar en la cocina, o un voucher para una cena, un día de spa.<br> 
					Tambin podemos hacerles llegar al domicilio un desayuno, deseándoles mucha felicidad para este día
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