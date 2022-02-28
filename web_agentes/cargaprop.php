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

  <title>RE/MAX Rio - Carga de propiedad</title>
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
    		<h2>Carga de la propiedad</h2>
				<h4 class="text-primary text-center"> Instructivo</h4>
				<div class="d-grid gap-2 d-flex justify-content-md-start">
					  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1d19G0lvQBikfDsm3SN9mplkLYW-TfVHL/view?usp=sharing" style="text-decoration: none; color: white ">Instructivo para carga propiedad en Red RE/MAX</a></button>
				</div>


    		<div class="col ">
				<h4 class="text-primary">Proceso</h4>

				<ul>
				<li>El Agente envía a <span class="naranja">legales@remax-rio.com.ar </span>un mail con la documentación necesaria para el alta: <br><br>
					<ul>
						<li> Autorización firmada. </li>
						<li> Escritura o Boleto o Cesión de derechos + contrato que se cede o Contrato adhesión a fideicomiso.</li>
						<li> En caso de tracto abreviado, donación, titular registral una empresa, y otros casos especiales, consultar en <a href="doccap.php"><span class="rojo"> Documentos requeridos para la captación</span></a>.</li>
						<li>Si publicamos expensas, Impuesto Municipal o Provincial, los comprobantes de los mismos. Si no se publican, podemos enviar esta documentación dentro de los 15 días del alta. </li>
						<li> Si es un alquiler apto profesional o comercial, el Reglamento de copropiedad. </li>
					</ul>
				<br>En el asunto del mail colocar la dirección del inmueble. Por ejemplo: Ayacucho 1528, Recoleta, CABA<br>
								</li><br><br>
				<li> Si la documentación no es correcta o incompleta, Legales informa al Agente para subsanar el inconveniente.</li>
				<li>Si la documentación es correcta y completa, Legales enviará un mail a <span class="naranja">altas@remax-rio.com.ar</span> autorizando la activación de la publicación.
				    Si el agente considera que la publicación no está completa para la activación, debe enviar un mail a <span class="naranja">altas@remax-rio.com.ar</span> pidiendo la activación cuando está completa. 
				</li>
				<br>
			</ul>
				

    		</div>
    		
    	</div>


		
	</div>
    
    

    </div>


    <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<div class="col">
				<h4 class="text-primary text-center"> Reactivación de la propiedad</h4>
			<p class="m-5">
				Se envía mail a  <span class="naranja">altas@remax-rio.com.ar</span> pidiendo la reactivación.<br>
				Identificar ID de la propiedad. Indicar cambio realizado: por ejemplo: valor expensas, descripción, baja de valor, etc. <br>
				Si el cambio es valor de publicación por debajo de la autorización vigente, cambio de expensas, cambio de impuesto municipal, 
				se deberá adjuntar la documentación que  acredite el cambio.<br>
			</p>

			<h4 class="text-primary text-center">Consejos para la publicación</h4>
			 <ul>
				<li> Cuando ponemos medidas de ambientes, contar con un plano o haberlo medido con el medidor óptico. (La oficina tiene uno que se puede usar)</li>
				<li> Para cargar superficies debemos contar con un plano o debemos sacar los datos de la escritura.</li>
				<li> Para publicar gastos de expensas, servicios o cualquier impuesto, debemos contar con fotocopia de la boleta que acredite el valor ingresado.</li>
				<li> Cuando la oficina active la publicación, chequear la publicación en todos los portales. Recordar que en el portal <span class="rojo">RE<span class="azul">/</span>MAX</span>
				es inmediato y en los otro portales puede haber una tardanza de 24 horas.</li>
				<li> Cuando la oficina active la publicación, enviarle por mail el link para que pueda darnos su feedback. Debemos pedirle que nos indique
				que agregar, quitar o modificar. Nadie mejor que el propietario, para saber que cosas resaltar y que cosas no, de la propiedad. También tener 
				en cuenta que hay ciertos detalles que no publicamos para sorprender en la visita.</li>
			</ul>
		    		
    		
			</div>
    		
    	</div>


		
	</div>
    
    

    </div>


     <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center"> Tips</h4>
    		
    		<div class="col ">
				<h5 class="text-danger">Tips generales</h5>
				<div class="d-flex justify-content-center">
  				  <img class="centrado" src="../RedRemax/ubicarmapa.png"  style="max-width:100%";>

				 </div>
    		</div>
    		
    	</div>

    	<div class="row">
    		<h5 class="text-danger">Título</h5>
    		<div class="col">
 				<img src="../RedRemax/titulo alta.png" style="max-width:100%";>
    			
    		</div>
    		<div class="col">
				<img src="../RedRemax/titulo.jpg" class="pc"style="max-width:90%";>
    			
    		</div>
    		<ul class="m-5">
	<li>Debe tener 50 caracteres, contando los espacios. Es muy importante porque son tomados en cuenta en las búsquedas de Google</li>
	<li>Estructura:
		<ul>
		<li>Tipo de operación: Venta - Alquiler - Alquiler temporario</li>
		<li> Tipo de propiedad: Departamento - casa - PH - Lote - Oficina - Local ...</li>
		<li> Zona: Caballito - Olivos - ......</li>
		<li> Cantidad de ambientes o dormitorios</li>
		<li> Algún detalle importante: apto profesional - apto crédito - pileta - balcón - parrilla - full amenities - ....</li>
		</ul>
	</li>
</ul>
    	</div>
		
	</div>
    
    

    </div>


     <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	

    	<div class="row">
    		<h5 class="text-danger">Título</h5>
    		<div class="col">
 				<p>Separar en párrafos	la descripción del edificio o barrio, la descripción de la propiedad, la ubicación (cerca de avenidas o plazas), los medios de transporte.<br>No escribir todo el texto en mayúscula.</p>
				<div class="d-flex justify-content-center">
				<img src="../RedRemax/descri.jpg" class="pc"style="max-width:95%";>
  				 

				 </div>

				  <h5 class="text-danger">Casa</h5>
  				  <ul>
					<li> Medida del lote sobre el cual está construida.</li>
					<li> Sistema de seguridad.</li>
					<li> Aclarar si la propiedad es de estilo.</li>
					<li> Aclarar características importantes: refaccionado - de época - luminoso - a refaccionar </li>
					<li> Si hay elementos de marcas reconocidas, nombrarlas.</li>
					<li> Si tiene doble entrada, puertas blindadas.</li>
					<li> Si tiene aire acondicionado (frío o frío-calor) en todos los ambientes.</li>
					<li> Si las aberturas tiene mosquitero, tipo de abertura, DVH</li>
					<li> Descripción de la casa: podemos hacerlo de manera descriptiva o narrativa o ambos estilos. Siempre debemos tener en cuenta que 
					quien lo lee, pueda ir imaginando la propiedad.
						<ul>
						<li> Living: ventanales, salida al balcón, tipo de piso, placard de recepción, medidas</li>
						<li> Toilette</li>
						<li> Cocina: si tiene ventilación y luz natural, si está integrada, separada o si tiene barra desayunadora, espacios de guardado (bajo y sobre mesada), espacio para heladera, espacio para lavavajilla,
						si tiene anafe u horno empotrado, si el artefacto cocina es a gas o elóctrico, si tiene espacio para comedor diario.</li>
						<li>Lavadero: si está separado, si tiene bacha</li>
						<li>Dormitorios: orientación (al frente, al contrafrente, al aire y luz), salida al balcón, tipo de piso, placares (frente espejado), medidas, si es en 
						suite, vestidor</li>
						<li>Baños: si tienen bañera (hidromasaje o jacuzzi)o ducha, luz o ventilación natural, placard.</li>
						<li>Dependencia de servicio</li>
						<li> Balcón: si es aterrazado, si tiene parrilla, si es corrido</li>
						<li> Patio, terraza, jardín (si tiene sistema de riego), pileta, parrilla quincho.</li>
						</ul>	
					</li>	
					<li>Tipo de calefacción y agua caliente: caldera, calefón, caldera dual, aire acondicionado</li>
					<li> Si cuenta con cochera, cubierta o descubierta.</li>
					<li> Si ponemos valor de ABL o cualquier servicio o impuesto, aclarar entre paréntesis a que mes y año corresponde. Por ejemplo: ABL (Enero 2021)
					$3.560</li>
					<li> Si la casa está un country, los beneficios y servicios del mismo.</li>
					<li> Medios de transportes cercanos: líneas de colectivos, bocas de subtes si están cerca, estación de tren y que línea, si está cerca.</li>
					<li> Accesos: a cuantas cuadras de principales avenidas.</li>
					<li> Cercanía a Escuelas, Universidades, centro comercial.</li>
				</ul>

				<h4 class="text-danger">Oficina</h4>
				<ul>
					<li> Edificio de cuántos pisos y cuántas oficinas por piso. Cantidad de ascensores. </li>
					<li> Si tiene seguridad</li>
					<li> Ubicación de la oficina: en qué piso, frente, lateral, contrafrente.</li>
					<li> Aclarar si la propiedad es de estilo.</li>
					<li> Aclarar características importantes: refaccionado - de época - luminoso - a refaccionar </li>
					<li> Si hay elementos de marcas reconocidas, nombrarlas.</li>
					<li> Si tiene doble entrada, puertas blindadas.</li>
					<li> Si tiene aire acondicionado (frío o frío-calor) en todos los ambientes.</li>
					<li> Si las aberturas tienen  DVH</li>
					<li> tipo de piso: parquet, flotante, alfombrado, moquet, cerámico</li>
					<li> Descripción de la oficina: podemos hacerlo de manera descriptiva o narrativa o ambos estilos. Siempre debemos tener en cuenta que 
					quien lo lee, pueda ir imaginando la propiedad.
						<ul>
						<li> Recepción</li>
						<li> Cantidad de despachos</li>
						<li> Sala de reuniones</li>
						<li> Toilette y baños</li>
						<li> Kitchenette</li>
						<li> Balcón: si es aterrazado, si tiene parrilla, si es corrido</li>
						</ul>	
					</li>	
					<li>Tipo de calefacción y agua caliente: caldera, calefón, caldera dual, aire acondicionado</li>
					<li> Si cuenta con cochera, cubierta o descubierta.</li>
					<li> Si ponemos valor de ABL o cualquier servicio o impuesto, aclarar entre paréntesis a que mes y año corresponde. Por ejemplo: ABL (Enero 2021)
					$3.560</li>
					<li> Medios de transportes cercanos: líneas de colectivos, bocas de subtes si están cerca, estación de tren y que línea, si está cerca.</li>
					<li> Accesos: a cuantas cuadras de principales avenidas.</li>
					<li> Cercanía a centro comercial, tribunales, etc.</li>
				</ul>
    			
    		</div>
    		<div class="col">
				<h5 class="text-danger">Departamentos</h5>
				<ul>
					<li> Edificio de cuántos pisos y cuántos departamentos por piso. Cantidad de ascensores. </li>
					<li> Si tiene seguridad</li>
					<li> Ubicación del departamento: en qué piso, frente, lateral, contrafrente.</li>
					<li> Aclarar si la propiedad es de estilo.</li>
					<li> Aclarar características importantes: refaccionado - de época - luminoso - a refaccionar </li>
					<li> Si hay elementos de marcas reconocidas, nombrarlas.</li>
					<li> Si tiene doble entrada, puertas blindadas.</li>
					<li> Si tiene aire acondicionado (frío o frío-calor) en todos los ambientes.</li>
					<li> Si las aberturas tiene mosquitero, tipo de abertura, DVH</li>
					<li> Descripción del departamento: podemos hacerlo de manera descriptiva o narrativa o ambos estilos. Siempre debemos tener en cuenta que 
					quien lo lee, pueda ir imaginando la propiedad.
						<ul>
						<li> Living: ventanales, salida al balcón, tipo de piso, placard de recepci�n, medidas</li>
						<li> Toilette</li>
						<li> Cocina: si tiene ventilación y luz natural, si está integrada, separada o si tiene barra desayunadora, espacios de guardado (bajo y sobre mesada), espacio para heladera, espacio para lavavajilla,
						si tiene anafe u horno empotrado, si el artefacto cocina es a gas o el�ctrico, si tiene espacio para comedor diario.</li>
						<li>Lavadero: si está separado, si tiene bacha</li>
						<li>Dormitorios: orientación (al frente, al contrafrente, al aire y luz), salida al balcón, tipo de piso, placares (frente espejado), medidas, si es en 
						suite, vestidor</li>
						<li>Baños: si tienen bañera (hidromasaje o jacuzzi)o ducha, luz o ventilación natural, placard.</li>
						<li>Dependencia de servicio</li>
						<li> Balcón: si es aterrazado, si tiene parrilla, si es corrido</li>
						</ul>	
					</li>	
					<li>Tipo de calefacción y agua caliente: central - individual (caldera, calefón, caldera dual) - Aire acondicionado</li>
					<li> Si cuenta con cochera, cubierta o descubierta, en qué piso, acceso por rampa o montacarga</li>
					<li> Si cuenta con baulera, en qué piso, tipo de baulera (jaula, cerrada).</li>
					<li> Si ponemos valor de ABL o cualquier servicio o impuesto, aclarar entre paréntesis a que mes y año corresponde. Por ejemplo: ABL (Enero 2021)
					$3.560</li>
					<li> Descripción de los amenities, laundry, S.U.M.,jardines.</li>
					<li> Medios de transportes cercanos: líneas de colectivos, bocas de subtes si están cerca, estación de tren y que línea, si está cerca.</li>
					<li> Accesos: a cuantas cuadras de principales avenidas.</li>
					<li> Cercanía a Escuelas, Universidades, centro comercial.</li>
				</ul>
				<h4 class="text-danger">PH</h4>
				<ul>
					<li> Si tiene entrada propia </li>
					<li> Cantidad de UF</li>
					<li> Ubicación de la unidad: frente, lateral, contrafrente.</li>
					<li> Sistema de seguridad.</li>
					<li> Aclarar si la propiedad es de estilo.</li>
					<li> Aclarar características importantes: refaccionado - de época - luminoso - a refaccionar </li>
					<li> Si hay elementos de marcas reconocidas, nombrarlas.</li>
					<li> Si tiene doble entrada, puertas blindadas.</li>
					<li> Si tiene aire acondicionado (frío o frío-calor) en todos los ambientes.</li>
					<li> Si las aberturas tiene mosquitero, tipo de abertura, DVH</li>
					<li> Descripción del PH: podemos hacerlo de manera descriptiva o narrativa o ambos estilos. Siempre debemos tener en cuenta que 
					quien lo lee, pueda ir imaginando la propiedad.
						<ul>
						<li> Living: ventanales, salida al balc�n, tipo de piso, placard de recepción, medidas</li>
						<li> Toilette</li>
						<li> Cocina: si tiene ventilación y luz natural, si está integrada, separada o si tiene barra desayunadora, espacios de guardado (bajo y sobre mesada), espacio para heladera, espacio para lavavajilla,
						si tiene anafe u horno empotrado, si el artefacto cocina es a gas o eléctrico, si tiene espacio para comedor diario.</li>
						<li>Lavadero: si está separado, si tiene bacha</li>
						<li>Dormitorios: orientación (al frente, al contrafrente, al aire y luz), salida al balcón, tipo de piso, placares (frente espejado), medidas, si es en 
						suite, vestidor</li>
						<li>Baños: si tienen bañera (hidromasaje o jacuzzi)o ducha, luz o ventilación natural, placard.</li>
						<li>Dependencia de servicio</li>
						<li> Balcón: si es aterrazado, si tiene parrilla, si es corrido</li>
						<li> Patio, terraza. Si es de uso exclusivo o común.</li>
						</ul>	
					</li>	
					<li>Tipo de calefacción y agua caliente: caldera, calefón, caldera dual, aire acondicionado</li>
					<li> Si cuenta con cochera, cubierta o descubierta.</li>
					<li> Si ponemos valor de ABL o cualquier servicio o impuesto, aclarar entre paréntesis a que mes y año corresponde. Por ejemplo: ABL (Enero 2021)
					$3.560</li>
					<li> Descripción de espacios comunes, jardines.</li>
					<li> Medios de transportes cercanos: líneas de colectivos, bocas de subtes si están cerca, estación de tren y que línea, si está cerca.</li>
					<li> Accesos: a cuantas cuadras de principales avenidas.</li>
					<li> Cercanía a Escuelas, Universidades, centro comercial.</li>
				</ul>

				<h4 class="text-danger">Local</h4>
				<ul>
				<li> Si es a la calle </li>
				<li> Si está dentro de una galería ubicar su posición dentro de la misma.</li>
					<li> Si tiene seguridad</li>
					<li> tipo de piso: parquet, flotante, alfombrado, moquet, cerámico</li>
					<li> Descripción del local: podemos hacerlo de manera descriptiva o narrativa o ambos estilos. Siempre debemos tener en cuenta que 
					quien lo lee, pueda ir imaginando la propiedad.
						<ul>
						<li> Si es de una planta, o más, si tiene subsuelo. Colocar superficies de cada planta</li>
						<li> Kitchenette y baños</li>
						</ul>	
					</li>	
					<li>Tipo de calefacción y agua caliente: caldera, calefón, caldera dual, aire acondicionado</li>
					<li> Si ponemos valor de ABL o cualquier servicio o impuesto, aclarar entre paréntesis a que mes y año corresponde. Por ejemplo: ABL (Enero 2021)
					$3.560</li>
					<li> Medios de transportes cercanos: líneas de colectivos, bocas de subtes si est�n cerca, estación de tren y que línea, si está cerca.</li>
					<li> Accesos: a cuantas cuadras de principales avenidas.</li>
					<li> Cercanía a centro comercial, etc.</li>
					<li> Que habilitaciones tuvo</li>
				</ul>
				<h4 class="text-danger">Lote</h4>
				<ul>
				<li> Medidas </li>
				<li> Si es de C.A.B.A., zonificación, metros a construir, metros vendibles. Se recomienda hacer un estudio de prefactibilidad</li>
				<li> Si es de P.B.A. F.O.T. y F.O.S. y zonificación</li>
				<li> Medios de transportes cercanos: líneas de colectivos, bocas de subtes si están cerca, estación de tren y que línea, si está cerca.</li>
					<li> Accesos: a cuantas cuadras de principales avenidas.</li>
					<li> Cercanía a centro comercial, etc.</li>
				<li> Si el lote está dentro de un country, ubicarlo en un plano.</li>
				</ul>	
    			
    		</div>
    		
	</li>
</ul>
    	</div>
		
	</div>
    
    

    </div>

    

 

    

 
<!--============================
=            FOOTER            =
=============================-->

  <?php include "../footer.php" ?>
</body>


</html>