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

  <title>RE/MAX Rio - Agente RE/MAX</title>
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
		  <h3 class="text-primary mb-3">Qué debe hacer un agente RE/MAX?</h3>
			<ul>
				<li><strong>FIDELIZAR CLIENTES</strong></li>
				<li>Ser proactivo</li>
				<li>Armar y clasificar constantemente su base relacional</li>
				<li>Cuidar siempre su imagen profesional</li>
				<li>Recordar que lo más importante son los clientes</li>
				<li>Capacitarse continuamente</li>
				<li>Asesorar en Marketing - Los agentes promocionan inmuebles</li>
				<li>Armar publicaciones profesionales</li>
				<li>Mantener actualizadas las publicaciones</li>
				<li>Cooperar y compartir con sus colegas</li>
				<li>Brindar un servicio extraordinario</li>
				<li>Elaborar un plan de Marketing para cada propiedad</li>
				<li>Cumplir con las normas establecidas en el Manual de Normas y procedimientos y las Prácticas del Código de ética y con las del mercado</li>
						
			</ul>
		 
		</div>
        
      </div>

      <div class="col  mt-3 mb-5" >
		<div class="container mt-3">
		  <h3 class="text-primary mb-3 ">Que no debe hacer un agente RE/MAX?</h3>
		  
		 	<ul>
				<li>
					No vende ni realiza operaciones inmobliarias. Estos son actos a cargo del corredor inmobiliario matriculado.
				</li>
				<li>
					No publica propiedades sin consignar los datos de la oficina a la cual está asociado, los datos del Corredor responsable de la misma y los disclaimers legales:<br>
					"En cumplimiento de la normas legales aplicables, informamos que los Agentes NO ejercen el Corretaje Inmobiliario. Todas las operaciones inmobiliarias son concluidas por los Corredores matriculados responsables de cada oficina".
				</li>
				<li>No puede firmar autorizaciones, reservas, boletos, ACM.</li>
				<li>No realiza asesoramiento inmobiliario.</li>
				<li>No puede publicar los premios con explicación como: 1ro en Ventas, 1ro en captaciones, etc.</li>
				<li>
					No puede promocionar inmuebles que no tengan autorización firmada y cargadas y activadas en Red RE/MAX.
				</li>
				<li>No puede usar logotipos propios.</li>
				<li>No puede realizar campañas de Marketing sin autorización del Corredor matriculado.</li>
				<li>No puede referirse a si mismos como profesionales.</li>
						
			</ul>
		</div>
      </div>  
    </div>
    
  </div>

 
  
</div>



 
<!--============================
=            FOOTER            =
=============================-->

  <div class="container-fluid ">
    <?php include "../footer.php" ?>
  </div>
</body>


</html>