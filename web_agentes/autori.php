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

  <title>RE/MAX Rio - Autorizaciones</title>
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

    
    <div class="shadow-lg p-3  bg-body rounded">
    	<div class="row">
    		<div class="col ">
      			<h2>Autorizaciones</h2>
  			    <p>La autorización es el documento que habilita al Corredor Inmobiliario a comercializar un inmueble.</p>
            <ul>
              <li>Se debe imprimir en una hoja doble faz y se firma al final del documento. De imprimir dos hojas de debe cruzar el dorso la carilla que está vacía y 
              se deben 
              firmar ambas hojas.</li>
              <li>Se debe realizaruna autorización por inmueble y por tipo de operación. </li>
              <li>En caso de haber comentarios, agregados, o más titulares de los previstos en la autorización se pueden agregar al pie de la misma agregando
              Observaciones:. 
              Estos agregados deben estar siempre ARRIBA de las firmas de las partes. </li>
              <li>En caso de tener que eliminar alguna cláusula o parte de ella por pedido del cliente se deberá contar con autorización previa de la Martillera.</li>
            </ul>
  				

    		</div>
        

    		
    	</div>

	</div>

</div>


<div class="container-fluid bg-light  p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3  bg-body rounded">
      <div class="row">
        <div class="col ">
            <h3>Autorizaciones para venta</h3>
            <h5 class="text-danger">Importante</h5>
            <ul>
                <li>Si la venta se efectúa con renta hay que quitar que se entregará "libre de ocupantes".</li>
                <li>Si la propiedad o el dueño están embargados / inhibidos / hipotecados / etc. la cláusula se mantiene porque al momento de la venta el 
                gravamen debe ser levantado.</li>
                <li>Se nos autoriza a tomar reserva. Esto significa que las reservas las toma y las custodia la inmobiliaria en carácter de DEPOSITARIO. LA RESERVA ES DE LA OPERACI�N, NO ES DEL PROPIETARIO NI DE LA INMOBILIARIA. 
                En casos especiales, el dador dela reserva autoriza a que se entregue la misma al propietario. </li>
                <li>La comisión se cobra en la firma del boleto, si lo hubiere.</li>
                <li>La comisión es siempre con IVA ya que los corredores son responsables inscriptos.</li>
                <li>La comisión se factura a quien figura como titular del inmueble.</li>
                <li>La autorización tiene un plazo y vence automáticamente. No existe pr�rroga automática. Si dentro del plazo que dura la autorización se toma una reserva se extiende la validez de la autorización hasta que esa reserva se perfeccione. </li>
                <li>Como la autorización es EXCLUSIVA, si vende la propiedad mientras la autorización está vigente sin nuestra intervención, deberá pagar la comisión de las dos partes.</li>
                <li>Si ofertan el precio mínimo de venta que el cliente nos estableció durante la vigencia de la autorización y añn así no quiere vender, deberá pagar la comisión de las dos partes ya que la tarea encomendada está realizada.</li>
                <li>Si el cliente vende la propiedad una vez vencida la autorización a alguien que llegó a la visita a travás del agente, deberá abonar la comisión de las dos partes. </li>
                <li>Si el cliente decide unilateralmente terminar con la autorización antes de tiempo, habiendo el agente realizado inversiones en marketing de la propiedad, deberá abonarle la comisión de ambas partes.</li>
                <li>Si bien dice que el cliente se compromete a sacar el C.O.T.I., es la oficina quien lo hace. </li>
            </ul>
        </div>

        <div class="col">
          <h5 class="text-danger">Quién firma:</h5>
          <ul>
            <li>Los titulares registrales: figuran en la escritura.</li>
            <li>Si fallecieron, firman quienes figuran en la declaratoria de herederos.</li>
            <li>Si es un bien ganancial (fue comprado por una persona con estado civil casado) y sólo figura uno de los cónyuges en la escritura, 
            el otro cónyuge también debe firmar. </li>
            <li>Si es un bien propio (la propiedad fue comprada por una persona siendo soltera o le fue donada) y hoy es vivienda conyugal, también debe firmar el cónyuge o el conviviente si la 
            convivencia está registrada.</li>
            <li>Si la propiedad es de una sociedad anónima (S.A.) la debe firmar el Presidente de la Sociedad y si se trata de una S.R.L. la debe firmar 
            el gerente. En ambos casos puede firmar un apoderado (Personas físicas o jurídicas con facultades para disponer).</li>
            <li>Si hay usufructo, las personas que lo tienen junto con el titular registral.</li>
            <li>Si es un menor, el representante legal.</li>
            <li>Si es un incapaz, el curador.</li>
          </ul>
          <h5 class="text-danger">Documentos</h5>
          <h6>AUTORIZACIÓN DE VENTA EXCLUSIVA</h6>
          <p>Se usa para autorizaciones de vivienda o comercial.<br> Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y seleccionar las opciones que están resaltadas en amarillo.</p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1wPiQkK4RwXNiH5PFDB3C2uYXpmCXB9BB/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>

          <h6 class="pt-3">AUTORIZACIÓN DE VENTA EXCLUSIVA AD REFERENDUM REUBICACIÓN DEL PROPIETARIO</h6>
          <p >Se usa para autorizaciones de vivienda cuando el propietario puede concretar la venta, si antes hizo una reserva de otra propiedad. Tener en cuenta el tema de comodato .<br> Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y seleccionar las opciones que están resaltadas en amarillo.<br> </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1EjA85AeV38mK8PhTZNGi5HTUs6fqLPYQ/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>

          <h6 class="pt-3">AUTORIZACIÓN DE VENTA EXCLUSIVA FIDEICOMISO</h6>
          <p >Se usa para autorizaciones de unidades en desarrollo.<br> Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y seleccionar las opciones que están resaltadas en amarillo. </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/14JEXv7qaTBmJOgrjKe-Ycl1oZvxFrekO/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>

          <h6 class="pt-3">AUTORIZACIÓN DE VENTA FONDO DE COMERCIO</h6>
          <p >Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y seleccionar las opciones que est�n resaltadas en amarillo.<br> Esta autorización incluye venta del local. Modificar si no corresponde.</p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1CK_mh5u6M089Y9Ak-tJlCloDyGUMAp0_/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
        </div>
        
      </div>

  </div>

</div>

<div class="container-fluid bg-light  p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
      <div class="row">
        <div class="col ">
            <h3>Autorizaciones para locación</h3>
            <h5 class="text-danger">Quién firma:</h5>
            <ul>
              <li>Los titulares registrales: figuran en la escritura.</li>
              <li>Si fallecieron, firman quienes figuran en la declaratoria de herederos.</li>
              <li>Si es un bien ganancial (fue comprado por una persona con estado civil casado) y sólo figura uno de los cónyuges en la escritura, 
              el otro cónyuge también debe firmar. </li>
              <li>Si la propiedad es de una sociedad anónima (S.A.) la debe firmar el Presidente del Directorio y si se trata de una S.R.L. la debe firmar 
              el gerente. En ambos casos puede firmar un apoderado (Personas físicas o jurídicas con facultades para administrar).</li>
              <li>Si hay usufructo, las personas que lo tienen. Si fallecieron, acta de defunción.</li>
              <li>Si es un menor, el representante legal.</li>
              <li>Si es un incapaz, el curador.</li>
            </ul>

            <h5 class="text-danger">Documentos</h5>
          
            <h6>AUTORIZACIÓN DE LOCACIÓN EXCLUSIVA PARA VIVIENDA</h6>
            <p>Se usa para autorizaciones de locación de viviendas. <br>
              Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y seleccionar las opciones que están resaltadas en amarillo.<br> </p>
            <div class="d-grid gap-2 d-flex justify-content-md-end">
              <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1WbiNCoOXt2CV3KXpgf9nSNv_hIg9MRYX/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
            </div>

        </div>

        <div class="col">
          
          <h6 class="pt-3">AUTORIZACIÓN DE LOCACIÓN EXCLUSIVA TEMPORARIO</h6>
          <p > usa para autorizaciones de locación temporaria. <br> Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y seleccionar las opciones que están resaltadas en amarillo.</p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1-vV4mXQ8ix7YiLIzNe49GfQ-wsOWukws/view?usp=sharing"style="text-decoration: none; color: white ">Descargar</a></button>
          </div>

          <h6 class="pt-3">AUTORIZACIÓN DE LOCACIÓN EXCLUSIVA COMERCIAL</h6>
          <p >Se usa para autorizaciones de locación comercial. <br> Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y seleccionar las opciones que están resaltadas en amarillo. </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1q8gs-DwL-9DE3uKlxJoIHZPCoOtiB1gF/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>

          <h6 class="pt-3">AUTORIZACIÓN DE VENTA FONDO DE COMERCIO</h6>
          <p >Se debe seleccionar si se refiere a C.A.B.A. o P.B.A. y seleccionar las opciones que están resaltadas en amarillo.<br> Esta autorización incluye venta del local. Modificar si no corresponde.</p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1CK_mh5u6M089Y9Ak-tJlCloDyGUMAp0_/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
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