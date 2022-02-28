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

  <title>RE/MAX Rio - Asistentes</title>
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

<div class="container-fluid bg-light mt-3 p-5" > 

  <div class="shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__fadeInUp">

    <h2>ASISTENTES ADMINISTRATIVOS DE LOS AGENTES</h2>
    <div class="row">
      <div class="col mt-3">
        <h5 class="text-primary">REQUISITOS BÁSICOS QUE DEBE CUMPLIR UN AGENTE PODER TENER UN ASISTENTE:</h5>

        <ul>
          <li>Tener un año de antiguedad.</li>
          <li> Mínimo Club 100%.</li>
        </ul>
        
      </div>

      <div class="col mt-3">
        <h5 class="text-primary">OBLIGACIONES DEL AGENTE:</h5>

        <ul>
          <li>Los Asistentes que trabajen de forma regular en las oficinas deberán OBLIGATORIAMENTE estar contratados por el Agente que deberá contar con la documentación que acredite la relación de dependencia. Quedará a criterio del Agente, y bajo su entera responsabilidad, en caso que los Asistentes se desempeñen desde otros lugares.</li>
          <li> El Agente deberá pagar un fee mensual de U$S 25 a la oficina en caso de que su asistente ocupe un lugar de forma regular en la oficina.</li>
        </ul>

      </div>  
    </div>
    
  </div>

  <div class="shadow-lg p-3  bg-body rounded animate__animated animate__slideInLeft">

    <div class="row">
      <div class="col mt-3">
        <h5 class="text-danger">LOS ASISTENTES:</h5>

        <ul class="m-3">
          <li>No contarón con una tarjeta personal ni casilla de email corporativa.</li>
          <li>Deberan registrarse y capacitarse/formarse.</li>
          <li>Deberan tener conocimiento de filosofía, procesos y normas.</li>
          <li>
            Podrín realizar sólo tareas administrativas. Tareas delegables:
            <ul>
              <li>Asiste/prepara el legajo de la propiedad para entregar a la oficina.</li>
              <li>Carga de propiedad en el sistema, actualización de estados, destaques y republicaciones.</li>
              <li>Envío de la ficha de las propiedades desde www.remax.com.ar como procedimiento obligatorio al recibir una consulta por una propiedad, sistema Marketing.</li>
              <li>Solicitud de Pedido de Carteles/Colocación y Retiro.</li>
              <li>Colaboración en búsquedas.</li>
              <li>Seguimiento para nuevas búsquedas.</li>
              <li>Delegación de pagos y gestiones personales en general.</li>
              <li>Envío de reportes.</li>
              <li>Recepción y envío de documentación legal.</li>
              <li>Coordinación de visitas con las dos partes.</li>
              <li>Reconfirmación de visitas.</li>
              <li>Seguimiento posterior de la visita.</li>
              <li>Coordinar fotógrafo.</li>
              <li>Armado de kit de captación.</li>
              <li>Envío de fichas a coincidencias - tener opciones en la red.</li>
              <li>Redacción de autorizaciones, reservas y boletos.</li>
              <li>Gestión administrativa de cierres.</li>
              <li>Confección y envío de reportes, informe a las 48hs e informes quincenales.</li>
              <li>Confección ACM</li>
              <li>Seguimiento ACM entregados.</li>
              <li>Redes sociales: posteos y promoción semanal de una propiedad.</li>
              <li>Baja de precios: según el contexto, anaizar valores de propiedades activas con nuevos ACM.</li>
              <li>Publicaciones: 1 vez por semana cambiar las fotos - Mantener actualizado los valores de expnsas y ABL.</li>
              <li>Tablero comando: mantener actualizada la información y tener en cuenta porcentajes de efectividad.</li>
              <li>Actividad de fidelización (actualización BDD).</li>
              <li>Programa de fidelización: segmentado su base de datos para separar a los MEJORES y más REFERIDORES clientes.</li>
              <li>Notas personales.</li>
              <li>Agendar en el calendar los cumpleaños de los clientes. Informaci�n que se encuentra en las autorizaciones y reservas</li>
              <li>Compra de regalos para clientes.</li>
            </ul>
          </li>
        </ul>
        
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