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

  <title>RE/MAX Rio - Reservas y refuerzos CABA</title>
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
          <h2>Reservas, refuerzo  y prorróga C.A.B.A.</h2>
          <h4 class="text-primary text-center">Reserva</h4>
          <ul>
              <li> Para eliminar contenido de las reservas deberám contar con autorización de la Martillera.</li>
              <li>Deben ser impresas en doble faz. Todas las hojas deben estar firmadas por el oferente y la oficina.</li>
              <li>Debe ser tomada en la oficina que tenga la capatación. Se toma con documentación de la oficina captadora y el dinero quedará allá. 
              La oficina que lleva al comprador/locatario debe darle a la Administrción de su oficina una copia de la reserva. </li>
              <li>Si participa en la operación otra oficina u otra inmobiliaria, en la reserva deben figurar los datos de los dos martilleros. </li>
              <li>La reserva NO PUEDE SER FIRMADA POR EL AGENTE EN NING�N CASO. </li>
              <li>Puede ser realizada por quien no vaya a figurar como propietario en la escritura. </li> 
          </ul>

           <h4 class="text-danger"> Cláusulas de las Reservas de Compra</h4>
            <ul>
              <li> Cláusula 2: En caso de firmarse un boleto, se debe modificar esta cláusula indicando qué suma se abona en el boleto y cuál es su fecha tope, 
              y cuál es el saldo que se abona en la escritura y cuál es su fecha tope.<br>
              Los plazos establecidos son para que las partes y los agentes sepan aproximadamente en qué tiempo deberán tener resuelto 
              y documentada la negociación. Pueden tardarse unos días más siempre y cuando el agente se encuentre en control de la operación. 
              En caso de estar venciándose los plazos y no poder comunicarse con alguna de las partes deberán dar aviso a legales para que tome las medidas 
              que resulten necesarias.<br>
              Si el vendedor paga ITI y tiene residencia en el extranjero, el trámite dura mucho tiempo. Esto debe ser informado también al dador 
              de la reserva y hacerlo constar en la reserva.<br>

              Si la venta es de una propiedad en sucesión se debe dejar por escrito que está en sucesión. Tarda alrededor de 3 meses que salga la declaratoria 
              de herederos. Si se hace por tracto abreviado debe constar en este punto. <br>
              Si existe una hipoteca se debe dejar aclarado.
              </li>
              <li>Cláusula 3: Si el inmueble se entrega con ocupantes deben corregirse. <br>
              Si se tiene conocimiento que sobre el cliente vendedor o el inmueble pesa algún gravamen debe manifestarse en este punto. </li>
              <li>Cláusula 6: Arrepentimiento. Si una de las partes unilateralmente se retira del negocio estando conformada la operación, deberá indemnizar a 
              la otra y pagar la comisión de las dos partes. El arrepentimiento DEBE estar por escrito para que sea válido. En caso de arrepentirse 
              la compradora pierde a favor de la vendedora las sumas entregadas. En caso de arrepentirse la vendedora se le devuelven las sumas entregadas 
              a la compradora, y esta deberá reclamar a la vendedora el 100% que le va a adeudar. NOSOTROS NO PAGAMOS LA PENALIDAD POR EL ARREPENTIMIENTO 
              DEL VENDEDOR. La parte que se arrepienta debe pagar a la inmobiliaria la comisión de ambas partes.</li>  
              <li>Cláusula 9:Si la operación es en dólares, la renuncia a los artículos que se mencionan hace referencia que en caso de una devolución la parte que compra no podrá decir que no posee los dólares suficientes.</li>
              <li> Cláusula 11: El escribano, por usos y costumbres lo designa la parte compradora ya que es quien paga sus honorarios.<br>
              El lugar de la firma de escritura, por uso y costumbres,  lo elige el vendedor quien es que se queda con el dinero. </li>
              <li>Cláusula 12: El refuerzo se toma para asegurar más aún la operación, ya que en caso de arrepentirse las sumas con las que las partes 
              deben indemnizarse son mayores. Se intenta tener en la oficina el total de la comisión sin IVA de las dos partes. Para tomar refuerzo, se 
              deben pedir los informes de dominio e inhibición previamente.</li>
              <li>Cláusula 13: Si sabemos que el vendedor necesita un comodato, completamos con los días que serán necesarios. Si no necesita un comodato, esta 
              cláusula se borra (CUIDADO: corregir la numeración de las Cláusula siguientes).</li>
              <li>ACEPTACIÓN / CONTRAOFERTA / RECHAZO
                <ul>
                  <li>De precio</li>
                  <li>De condiciones</li>
                  <li>Debe ser firmada por todos aquellos que firmaron la autorización </li>
                </ul></li>
              <li>NOTIFICACI�N A LA PARTE COMPRADORA / LOCATARIA<br>
              - Quien hace la reserva debe notificarse que su propuesta ha sido aceptada, rechazada o contraofertada. <br>
              - En caso de haber una contra oferta puede aceptarla, rechazarla o contraofertarla.<br>
              </li>
            </ul>
            <h4 class="text-danger">Cláusulas de Reserva de locación</h4>
            <ul>
              <li>Informe N° 5 de frecuencia. Es un informe que se solicita para ver cuántas veces una propiedad fue ofrecida en garantía. 
              En general una propiedad que ha sido ofrecida varias veces suele ser una "garantía comprada". Se usa sólo cuando se da garantía REAL.</li>
              <li>Se pueden agregar condiciones, pedidos, etc. que solicite el oferente. Se encontrarón a consideración del propietario. Si pueden quedar impreso, 
               mejor. Sino se agrega al final ANTES de las firmas como "Observaciones".</li>
            </ul>

            <p class="text-danger">IMPORTANTE: La reserva para locación debe ser equivalente al valor del primer mes locativo</p>

           
       </div>
        
      </div>


    
  </div>
    
    

</div>


<div class="container-fluid bg-light mt-3 p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
      <div class="row">
        <div class="col ">

          <h4 class="text-primary text-center">REFUERZO</h4>
            <ul>
              <li>En operaciones de compraventa, se toma el refuerzo luego de haber pedido los informes de dominio e inhibición.</li>
              <li>El proceso sobre la documentación que se utiliza y dónde se deja el dinero es igual que con la reserva.</li>
              <li>En caso de haber habido contra ofertas se aprovecha el refuerzo para dejar prolijamente explicitado cuál es el negocio cerrado.</li>
              <li>No se pueden cambiar condiciones que no hayan sido previamente negociadas y que ya están cerradas.</li>
              <li>El refuerzo básicamente es un recibo de dinero que remite al documento anterior (reserva) ratificando todos sus términos y condiciones.</li>
              <li>Las firmas necesarias son las mismas de la reserva.</li>
              <li>NOTIFICACIÓN DEL REFUERZO: El propietario debe notificarse ya que caso contrario en caso de arrepentirse puede aducir no saber que habían entregado dinero en refuerzo y pretender devolver únicamente el dinero de la reserva que estaba con conocimiento de que se había dejado.</li>
            </ul>

       </div>
        
      </div>


    
  </div>
    
    

</div>


<div class="container-fluid bg-light mt-3 p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
      <div class="row">
        <div class="col ">

          <h4 class="text-primary text-center">DOCUMENTOS</h4>
          <h4 class="text-danger">IMPORTANTE: REDACCIÓN MANDATO</h4>
          <h6>MANDATO SIN REPRESENTACI�N (SIN PODER)</h6>
          <p>
            Contrato de mandato (puede ser escrito o tácito), en estos casos el representante actúa en nombre propio pero en interés ajeno y la redacción es:<br><br><i>" (nombre completo), dni _______________, estado civil______________________,
            domicilio_________________________, quien actúa en mandato sin representación de (nombre completo), dni________, estado civil_______________, domicilio ..............., quien en interés de su mandante viene a reservar en (alquiler/ compra), el inmueble ubicado en_______________."</i>
          </p>
            
          <h6>MANDATO CON REPRESENTACI�N (CON PODER)</h6>
          <p>
            <i> .................., D.N.I.: ..............., en nombre y representación y en su
            carácter de apoderado/a, a mérito del Poder General Amplio de
            Administrción y Disposición de fecha XX de XX de XXXX, .....,
            escritura número_________________________, otorgado en la Ciudad de_________________________..
            autorizado por escribano/a.......titular del registro............., de/el/la
            Sr./Sra........................, DNI......................., estado civil.......................,
            domicilio......................., en su calidad de
            Propietaria/heredera/cedente...etc.</i>
            <br><br>
          </p>

          <h4 class="text-danger">RESERVAS C.A.B.A. RESIDENCIALES</h4>
          <p>
            Tener en cuenta que lo resaltado es opcional. En el caso que se venda con renta, eliminar "48hs. antes de la firma de la escritura traslativa  de dominio el ¡DADOR DE LA RESERVA!, verificará que el inmueble se encuentra deshabitado."
          </p>
          <h6>RESERVA COMPRAVENTA</h6>
          <p>Se usa cuando se toma una reserva de compraventa de una vivienda en C.A.B.A. </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1BGQKX0XBwa3ro7fhUWuLJIODN6RhbqI2/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>

          <h6>RESERVA COMPRAVENTA AD REFERENDUM DE VENTA PARTE COMPRADORA</h6>
          <p>Se usa cuando se toma una reserva de compraventa de una vivienda en C.A.B.A. y el comprador debe vender su propiedad primero.  </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1V3rl5pDx_lPM1AgwfiFoECb2HnF4f-AV/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>

          <h6>RESERVA COMPRAVENTA AD REFERENDUM REUBICACIÓN PARTE VENDEDORA</h6>
          <p>Se usa cuando se toma una reserva de compraventa de una vivienda en C.A.B.A. y el vendedor debe comprar otra propiedad para poder concretar la venta de su propiedad. Las dos escrituras pueden hacerse simultáneamente.
            Tener cuidado con la autorización que nos dio el propietario, por el tema de comodato. 
          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1M084onIgTLvcexXHp4SEiyKqYK_yZOn2/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
          
           <h6>RESERVA COMPRAVENTA AD REFERENDUM CRÉDITO BANCARIO</h6>
          <p>Se usa cuando se toma una reserva de compraventa de una vivienda en C.A.B.A. y el comprador hace la operación con crédito bancario
          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1LO_yt8i47asLO3l_csM-zHa8FJm-6KHj/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
          
          <h6>RESERVA COMPRAVENTA FIDEICOMISO</h6>
          <p>Se usa cuando se toma una reserva de compraventa de una vivienda en C.A.B.A. adheriendo a un fideicomiso y a pagar una parte en efectivo y cuotas
          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1iW-KS_ggpKQZ8ch-MBAzucTIZIVa_A20/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>

          <h6>RESERVA COMPRAVENTA CON RENTA</h6>
          <p>Se usa cuando se toma una reserva de compraventa de una vivienda en C.A.B.A. que se vende con renta
          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1U7PdvHE6eysAPzpmt8B-qIHjIRaVGZf7/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
          
           <h6>RESERVA LOCACIÓN</h6>
          <p>Se usa cuando se toma una reserva de locación de una vivienda en C.A.B.A..<br>
          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1hITMjOyounvX5ARQV8m6vxFyo1J59aZN/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
          
           <h6>RESERVA LOCACIÓN TEMPORARIA</h6>
          <p>Se usa cuando se toma una reserva de locación de una vivienda en C.A.B.A. en modalidad temporario.
          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1HkRiQX4pmzfRTGhWgykAnBbrJQk0vrHW/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
           
          <h4 class="text-danger">RESERVAS C.A.B.A. COMERCIALES</h4>

           <h6>RESERVA COMPRAVENTA</h6>
          <p>Se usa cuando se toma una reserva de compraventa comercial en C.A.B.A.. 
          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/106-gQ6_iR3IjGepDWNpXQpicN5yemF_h/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>

          <h6>RESERVA LOCACIÓN COMERCIAL</h6>
          <p>Se usa cuando se toma una reserva de locación comercial en C.A.B.A.. 
          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/16jnQ2Y5VKGBD4hGaEFmCCYiOjZSaMOcZ/view?usp=sharing"  style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
          
          <h4 >REFUERZO Y PRORROGA</h4>
         
          <h6 class="text-primary">REFUERZO DE ALQUILER C.A.B.A.</h6>
          <p>Se usa para tomar refuerzo de reserva de alquiler y se puede aprovechar para prorrogar fechas tope para firma de contrato, y/o hacer aclaraciones que surjan de com�n acuerdo entre las partes luego de la firma de la Reserva. 

          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1qRPkSkRqik7ggnHKoWQXt74CL-8WUDrf/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
           
            <h6 class="text-primary">REFUERZO DE COMPRA C.A.B.A.</h6>
          <p>Se usa para tomar refuerzo de reserva de compra y se puede aprovechar para prorrogar fechas tope para firma de escritura / boleto de compra/venta, y/o hacer aclaraciones que surjan de común acuerdo entre las partes luego de la firma de la Reserva.  

          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/17Nn4huX_a-jMH3CzIRX7Qq4GCKjiOXop/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
          </div>
          
          <h6 class="text-primary">PRÓRROGA DE RESERVA</h6>
          <p>Se usa cuando los refuerzos fueron firmados y por algún motivo se debe prorrogar la fecha tope de escritura o boleto o de firma del contrato de locación.<br>
          Se recomienda hacerlo 1 semana antes que venza. 
          </p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
            <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1C-bwjCRvXVQbz5hgwVlkeArn20WbdqAa/view?usp=sharing" style="text-decoration: none; color: white ">Descargar</a></button>
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