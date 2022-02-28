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

  <title>RE/MAX Rio - Acciones de marketing</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    

  <style>
 
  		.animate__animated.animate__flipInX {
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

<div class="container-fluid bg-light mt-3 p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3  bg-body rounded">
    	<div class="row">
    		<div class="col ">
    			<h2>Acciones de marketing</h2>
          <p>Debemos ser nuestros propios promotores. 
            No sólo de las propiedades que tenemos en cartera, sino de nuestro trabajo, valor agregado.<br>
            Debemos lograr visibilidad en la redes, medios gr�ficos.</p> 

			   <h4 class="text-primary">Redes sociales</h4>
         <p>Facebook/ instagram / Estados de whatsApp: Podemos crear en IG y FB una cuenta profesional para publicitar. Que sea una cuenta
        armada exclusivamente para nuestro trabajo, pero recordó incluir notas personales.<br>
        No olvidar que en cada pulicación que incluya la difusión de propiedades NO podemos poner en primera persona que vendemos, o alquilamos.
        Siempre es el "Equipo RE/MAX RIO" y debe incluir los datos de nuestra Martillera:
        Andrea Oliveri CUCICBA 7190 / CMCPSI 6401</p>
        <h4 class="text-primary"> Publicidad en revistas</h4>
        <p>Revistas Barriales, Revistas Escolares, Revistas de clubes</p>
        <h4 class="text-primary"> Publicidad en revistas</h4>
        <p>Folletos en los edificios donde estamos vendiendo</p>
          <p>Adjuntamos nuestra tarjeta.</p>

        <div class="d-grid gap-2 d-flex justify-content-center">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1P5njnk3xJPUupMkQwYlBzhxEEh5zPhYl/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
        </div>

        <h4 class="text-primary"> Folletos en los edificios donde vendimos</h4>
        
        <div class="d-grid gap-2 d-flex justify-content-center">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1ldLgajokY1rLVFpasX7qwHlifjxi96vf/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
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