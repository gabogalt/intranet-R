<?php
  require_once('../control_sesion.php');
	header('Content-Type: text/html; charset=UTF-8');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>RE/MAX Rio</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  
   <script>
      addEventListener("load", function () {
      	setTimeout(hideURLbar, 0);
      }, false);
      
      function hideURLbar() {
      	window.scrollTo(0, 1);
      }
    </script>

   <!--stylesheets-->
    <link href="../css/styleHome.css" rel='stylesheet' type='text/css' media="all">
    
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

  </head>

<body>




<div class="main-top" id="home">
      <!-- header -->
      <div class="headder-top">
        <div class="container-fluid">
          <!-- nav -->
          <nav >
            <div id="logo">
              <img src="../images/logo.png" style=" max-width: 15%;">
              <!-- <span>
                <img src="../imagenes/logoremax.png" alt="">
              </span> -->
            </div>
            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop">
            <ul class="menu mt-2">
              <!-- <li class=""><a href="index.html"></a></li> -->
              <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle toogle-2">RE/MAX<span class="fa fa-angle-down" aria-hidden="true"></span>
                </label>
                <a href="#">RE/MAX<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2">
                <ul style="z-index: 20;">
                   <li> <a href="formacion.php" class="drop-text">Formación inicial</a> </li>
                   <li> <a href="adn.php" class="drop-text">ADN RE/MAX</a> </li>
                   <li> <a href="tabcom.php" class="drop-text">Honorarios a cobrar en las operaciones</a> </li>
                   <li> <a href="refe.php" class="drop-text">Operaciones referidas</a> </li>
                   <li> <a href="refagen.php" class="drop-text">Agentes para referir</a> </li>
                   <li> <a href="opecom.php" class="drop-text">Operaciones compartidas en la Red</a> </li>
                   <li> <a href="califi.php" class="drop-text">Calificación interna de agentes</a> </li>
                   <li> <a href="asiagen.php" class="drop-text">Asistentes de Agentes</a> </li>
                   <li> <a href="reuniones.php" class="drop-text">Networking </a> </li>
                   <li> <a href="exprem.php" class="drop-text">Experiencia RE/MAX  </a> </li>
                   <li> <a href="premios.php" class="drop-text">Premiación RE/MAX</a> </li>
                </ul>
              </li>
              <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                <!-- Second Tier Drop Down -->
                <label for="drop-2" class="toggle toogle-2">RE/MAX RIO<span class="fa fa-angle-down" aria-hidden="true"></span>
                </label>
                <a href="#">RE/MAX RIO<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2">
                <ul>
                     <li> <a href="claves.php" class="drop-text">Mails, links, usuarios y contraseñas</a> </li>
                     <li> <a href="convivencia.php" class="drop-text">Reglas de convivencia  </a> </li>
                     <li> <a href="agente.php" class="drop-text">Los SI y los NO de un Agente</a> </li>
                     <li> <a href="imaper.php" class="drop-text">Imagen personal</a> </li>
                     <li> <a href="madpad.php" class="drop-text">Madrina/Padrino</a> </li>
                     <li> <a href="objetivos.php" class="drop-text">Objetivos</a> </li>
                     <li> <a href="proprio.php" class="drop-text">Propiedades RIO</a> </li>
                     <li> <a href="proveedores.php" class="drop-text">Proveedores</a> </li>
                     <li> <a href="guardias.php" class="drop-text">Guardias  </a> </li>
                     <li> <a href="pizza.php" class="drop-text">Pizarra  </a> </li>
                     <li> <a href="clasagen.php" class="drop-text">Ingresos e inversión</a> </li>
                     <li> <a href="conneg.php" class="drop-text">Control del negocio - Tablero comando</a> </li>
                     <li> <a href="reurio.php" class="drop-text">Reuniones</a> </li>
                     <li> <a href="vacaciones.php" class="drop-text">  Vacaciones de los Agentes</a> </li>
                  
                </ul>
              </li>
              <!-- <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="#about">RE/MAX RIO</a></li> -->
             
              <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle toogle-2">Herramientas <span class="fa fa-angle-down" aria-hidden="true"></span>
                </label>
                <a href="#">Herramientas <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2">
                <ul>
                   <li> <a href="base.php" class="drop-text">Base relacional</a> </li>
                   <li> <a href="agenda.php" class="drop-text">Uso de agenda</a> </li>
                   <li> <a href="progapps.php" class="drop-text">Programas y apps</a> </li>
                   <li> <a href="redsoc.php" class="drop-text">Redes sociales</a> </li>
                   <li> <a href="flyprop.php" class="drop-text">Flyers propiedades y Flyers/Videos institucionales</a> </li>
                   <li> <a href="disc.php" class="drop-text">DISC</a> </li>
                   <li> <a href="acventas.php" class="drop-text">Acciones de Venta</a> </li>
                   <li> <a href="bajaprecio.php" class="drop-text">Baja de precio</a> </li>
                   <li> <a href="calrio.php" class="drop-text">Calendario RIO</a> </li>
                   <li> <a href="merchan.php" class="drop-text">Merchandising</a> </li>
                </ul>
              </li>

              <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle toogle-2">Documentos <span class="fa fa-angle-down" aria-hidden="true"></span>
                </label>
                <a href="#">Documentos <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2">
                <ul>
                    <li> <a href="hojlog.php" class="drop-text">Hoja con LOGO</a> <li>
                    <li> <a href="planmark.php" class="drop-text">Plan de Marketing</a> <li>
                    <li> <a href="prelist.php" class="drop-text">Prelisting: Primera entrevista y Datos a releva</a> <li>
                    <li> <a href="acm.php" class="drop-text">Informe ACM</a> <li>
                    <li> <a href="presacm.php" class="drop-text">Presentación del ACM</a> <li>
                    <li> <a href="repac.php" class="drop-text">Reporte de actividades </a> <li>
                    <li> <a href="autori.php" class="drop-text">Autorizaciones  </a> <li>
                    <li> <a href="muestra.php" class="drop-text">Muestra de la propiedad y Planilla de visitas</a> <li>
                    <li> <a href="coti.php" class="drop-text">Formulario Pedido de COTI</a> <li>
                    <li> <a href="recaba.php" class="drop-text">Reservas, refuerzos y prórrogas en C.A.B.A. </a> <li>
                    <li> <a href="repba.php" class="drop-text">Reservas, refuerzos y prórrogas en P.B.A.  </a> <li>
                    <li> <a href="reyre.php" class="drop-text">Recibos, Reintegros y autorización uso de reservas</a> <li>
                    <li> <a href="redrepresentados.php" class="drop-text">Redacción: mandato  </a> <li>
                    <li> <a href="docloc.php" class="drop-text">Contratos y Documentos tipo LOCACIÓN</a> <li>
                    <li> <a href="docven.php" class="drop-text">Contratos y Documentos tipo VENTA</a> <li>
                    <li> <a href="uif.php" class="drop-text">UIF  </a> <li>
                    <li> <a href="rendi.php" class="drop-text">Rendición - Planilla</a> <li>
                   
                </ul>
              </li>
              <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle toogle-2">Ventas <span class="fa fa-angle-down" aria-hidden="true"></span>
                </label>
                <a href="#">Ventas <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2">
                <ul>
                  <li> <a href="prospe.php" class="drop-text">Prospectos/Clientes</a> </li>
                  <li> <a href="acprop.php" class="drop-text">Prospección: Acciones</a> </li>
                  <li> <a href="tipcli.php" class="drop-text">Generar confianza con el cliente</a> </li>
                  <li> <a href="marquet.php" class="drop-text">Acciones de Marketing</a> </li>
                  <li> <a href="segcli.php" class="drop-text">Seguimiento a Clientes</a> </li>
                   
                </ul>
              </li>
              
           
            
             
              <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle toogle-2">Procesos <span class="fa fa-angle-down" aria-hidden="true"></span>
                </label>
                <a href="#">Procesos <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2">
                <ul>
                  <li> <a href="proven.php" class="drop-text">Proceso general de VENTA</a> </li>
                  <li> <a href="proalq.php" class="drop-text">Proceso general de LOCACIÓN</a> </li>
                  <li> <a href="objcli.php" class="drop-text">Objeciones del cliente</a> </li>
                  <li> <a href="fotvid.php" class="drop-text">Producción visual - Plano</a> </li>
                  <li> <a href="doccap.php" class="drop-text">Captación: Documentos requeridos</a> </li>
                  <li> <a href="cargaprop.php" class="drop-text">Alta de propiedades y tips </a> </li>
                  <li> <a href="cartel.php" class="drop-text">Cartel - Formulario pedido</a> </li>
                  <li> <a href="reserva.php" class="drop-text">Reservas - Refuerzos</a> </li>
                  <li> <a href="gasven.php" class="drop-text">  Firma de escritura / boleto - Gastos</a> </li>
                  <li> <a href="dialoc.php" class="drop-text">Firma del contrato de locación - Gastos</a> </li>
          
                </ul>
              </li>
              <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle toogle-2">Material de Consulta <span class="fa fa-angle-down" aria-hidden="true"></span>
                </label>
                <a href="#"> Consulta <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2">
                <ul>
                  <li><a href="conceptos.php" class="drop-text">Conceptos legales que debemos conocer</a> <li>
                  <li><a href="prosus.php" class="drop-text">Temas de interés</a> <li>
                  <li><a href="biblio.php" class="drop-text">Biblioteca</a> <li>
                  <li><a href="taller.php" class="drop-text">Talleres - Videos capacitación</a> <li>
                  <li><a href="refresh.php" class="drop-text">Refresh</a> <li>
                  <li><a href="estadi.php" class="drop-text">Estadísticas</a> <li>
                  <li><a href="laboratorio.php" class="drop-text">Laboratorio</a> <li>
      
          
                </ul>
           
                <?php if($_SESSION['TIPO'] == "STAFF"):?>
  
                <li style="position:relative; top:0;left:0" > <a  href="../web_staff/menustaff.php">Intranet Staff</a> </li> 
              <?php endif; ?>
              <li>
                    <form class="w-5 "   action="_busqueda.php" method="get">
                  
                  <div class="input-group  " >
                    <input type="search" name="TEXTO" class="form-control" placeholder="Search..." aria-label="Search">
                  <div class="input-group-append">
                    <button class="input-group-text">
                      <i class="fas fa-search p-1"></i>
                    </button>
                  </div>
                </div> 
          
                <select hidden name="TIPO">
                  <option value="EXACTO">Frase exacta</option>
          
                  <option value="TODAS">Todas las palabras</option>
                </select>
     
              </li>
              
             
            </ul>
          </nav>
          <!-- //nav -->
        </div>
      </div>
      <!-- //header -->
      <!-- banner -->
      <div class="slider-img img-fluid one-img text-center">
        <div class="container">
          <div class="slider-info">
            <!-- <h5>Use our site to find your home</h5> -->
            <div class="slider-banner">
              <h4>Todos los temas que necesitás.</h4>
            </div>
            <div class="outs_more-buttn">
              <a href="#service">Click</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //banner -->
    <!-- <div class="clearfix"></div> -->
    <!-- //banner -->
   
    <!--service-->	
    <section class="service pt-lg-4 pt-md-3 pt-sm-3 pt-3" id="service">
      <div class="container pt-lg-5 pt-md-5 pt-sm-4 pt-3">
        <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
          <h3 class="title mb-2"></h3>
        </div>
        <div class="row pt-lg-5 pt-md-5 pt-sm-4 pt-3">
          <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">
            <div class="service-position">
              <div class="icon-wthree-top">
                <span class="fas fa-home" aria-hidden="true"></span>
              </div>
              <div class="ser-text-wthree">
                <h4>
                  <a href="remax.php">RE/MAX</a>
                </h4>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">
            <div class="service-position">
              <div class="icon-wthree-top">
                <span class="fas fa-home" aria-hidden="true"></span>
              </div>
              <div class="ser-text-wthree">
                <h4>
                  <a href="remax_rio.php" style="color: red">RE/MAX RIO</a>
                </h4>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">
            <div class="service-position">
              <div class="icon-wthree-top">
                <span class="fas fa-toolbox" aria-hidden="true"></span>
              </div>
              <div class="ser-text-wthree">
                <h4>
                  <a href="herramientas.php">Herramientas</a>
                </h4>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">
            <div class="service-position">
              <div class="icon-wthree-top">
                <span class="fas fa-store-alt" aria-hidden="true"></span>
              </div>
              <div class="ser-text-wthree">
                <h4>
                  <a href="ventas.php" style="color: red">Ventas</a>
                </h4>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section 2 -------------------------------------->
    <section class="service " id="service">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        
        <div class="row pt-lg-5 pt-md-5 pt-sm-4 pt-3">
          <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">
            <div class="service-position">
              <div class="icon-wthree-top">
                <span class="fas fa-file" aria-hidden="true"></span>
              </div>
              <div class="ser-text-wthree">
                <h4>
                  <a href="documentos.php">Documentos</a>
                </h4>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">
            <div class="service-position">
              <div class="icon-wthree-top">
                <span class="fas fa-chalkboard-teacher" aria-hidden="true"></span>
              </div>
              <div class="ser-text-wthree">
                <h4>
                  <a href="procesos.php" style="color: red">Procesos</a>
                </h4>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">
            <div class="service-position">
              <div class="icon-wthree-top">
                <span class="fas fa-asterisk" aria-hidden="true"></span>
              </div>
              <div class="ser-text-wthree">
                <h5>
                  <a href="consultas.php" >Material de Consulta</a>
                </h5>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">
            <!-- <div class="service-position">
              <div class="icon-wthree-top">
                <span class="fas fa-store-alt" aria-hidden="true"></span>
              </div>
              <div class="ser-text-wthree">
                <h4>
                  Ventas
                </h4>
                
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!--//service-->
  
   
    <!--map-->	
    <section class="map bg-light">
      <div class="address_mail_footer_grids">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4648.661955111089!2d-58.48729915833568!3d-34.52568440641791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb14a664738b1%3A0x6e222bd8a4d9052e!2sGral.%20Jos%C3%A9%20de%20San%20Mart%C3%ADn%201545%2C%20B1602BWA%20Florida%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1643903067615!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>
    <!--//map-->

<?php include "../footer.php" ?>
</body>
</html>