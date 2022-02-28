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

  <title>RE/MAX Rio - Seguimiento al cliente</title>
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
        <h2>Seguimiento al cliente</h2>
    		<div class="col-4 ">

          <img src="../imagenes/cliente.jpg" style="max-width:160%;width:auto;height:auto;" >

    		</div>

        <div class="col-8">
          <h4 class="text-primary">Durante la operación</h4>

          <p>Es fundamental la comunicación con el cliente. Debemos conocerlo, para saber de qué manera, cada cuánto necesita tener información.<br>
          Cuando la propiedad fue activada, RIO le envía un mail dando la BIENVENIDA con copia al agente captador.<br>
          Luego de las visitas elevar al propietario un informe, para que conozca la opinión de los interesados.<br>
          Si no hubo visitas en una semana, también informar al cliente,y luego de un mes pedir una reunión,en forma personal, para evaluar precio, 
          condiciones de muestra de la propiedad,fotos,etc.<br>
          Una vez por mes enviarle el informe de cantidad de visitas en los portales.<br></p>

        </div>
    		
    	</div>


		
	</div>
    
    

</div>


<div class="container-fluid badge-light p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3  bg-body rounded">
      <div class="row">
        <div class="col ">

          <h4 class="text-primary">Siempre</h4>
          <p>Recordemos que los clientes son para toda la vida. Debemos mantener contacto con ellos para que nos tengan presentes. Nos sobran motivos para hacerlo, por ejemplo:</p>
          <ul>
            <li>Cumpleaños</li>
            <li>Avisando los aumentos dentro del contrato de alquiler</li>
            <li>Dia de la madre, padre, Pascuas, Fin de año</li>
            <li>Día según la profesión</li>
            <li>Datos de interés por algún hobby</li>
            <li>Sorteo de entradas a un espectáculo</li>
            <li>Sorteo de una cena</li>
            <li>Invitación a eventos organizados por la oficina o propios</li>
            <li>información legal acerca de las operaciones inmobiliarias.</li>

          </ul>


        </div>

        <div class="col">
          <h4 class="text-primary">Notas personales</h4>
          <p>Enviar una nota escrita a puño y letra es una de las maneras de impactar en el cliente. </p>
          <h4 class="text-primary">Obsequios</h4>
          <p>Visita pop by: Pasamos simplemente por su casa, oficina, lugar de trabajo, para acercarle algún presente. Y nunca debemos quedarnos, es sólo 
          entregar algo e irnos, ya que si accedemos a tomar un café o lo que fuere, se pierde la intención que es: "pasó por acá y me acordé de vos, 
          tengo una reunión en media hora".<br>
          Es también recomendable, que para su cumpleaños, le hagamos llegar un regalo a su lugar de trabajo.<br>
          Debemos evaluar previamente al cliente. No hacer esto con todos los clientes, sino solo con los clientes A+, porque nuestro tiempo también vale.</p>  

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