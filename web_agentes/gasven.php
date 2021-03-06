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

  <title>RE/MAX Rio - Firma escritura/boleto - Gastos </title>
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
    		<h2>Gastos de escritura</h2>
			

    		<div class="col ">
			
				<p>
				Por usos y costumbres, cada parte paga sus gastos. Al vendedor le corresponden los gastos de "entregar la propiedad" y al comprador le corresponden los gastos de "recibir la propiedad" y los honorarios del escribano.
			</p>

			<ul>
				<li><b>ITI:</b> Es el Impuesto a la transferencia Inmobiliaria. Para propiedades compradas hasta el 31/12/17.Es un impuesto nacional, esto significa que es igual en todo el pa??s y se abona sobre 
				el monto de escrituraci??n.<br> 
				Este impuesto corresponde en su totalidad a la parte VENDEDORA siempre que sea una persona f??sica y es el 1.5% del valor de escrituraci??n.<br>
				Si se trata de vivienda ??nica y ser?? reemplazada dentro del a??o, se puede pedir certificado de no retenci??n en AFIP y el escribano no cobrar?? 
				este impuesto (en caso de encontrarse la propiedad presentada en la Declaraci??n de Bienes Personales el tr??mite se puede realizar online en 
				el momento, caso contrario hay que hacer el tr??mite presencial y el mismo puede tardar 20 d??as corridos).
				En el caso que venda una persona que no resida en el pa??s, no corresponde retener el 1,5 % y se debe solicitar el certificado de retenci??n en la AFIP que le va a informar
				al escribano cuanto debe retenerle al no residente. Este tr??mite puede durar hasta 3 meses.</li>  
				<li><b>Ganancias:</b> Si la parte VENDEDORA es una persona jur??dica, el impuesto a la transferencia no se aplica, en su lugar el Escribano interviniente 
				retiene un 3% a cuenta del Impuesto a las Ganancias que pague la sociedad por esta venta. Exenciones: Sociedades que presenten certificado contable 
				de reemplazo de bien de uso o sociedades que posean exenci??n de dicho impuesto.</li>
				<li><b>Ganancias:</b> Para propiedades adquiridas despu??s del 01/01/2018 y recae sobre las personas f??sicas y sucesiones indivisas y personas jur??dicas.<br> 
				Si se trata de vivienda ??nica y ser?? reemplazada dentro del a??o, no corresponde pagar. Se paga el  
				15 % sobre la diferencia entre el valor de venta y el de compra actualizado por el ??ndice de precios al consumidor (IPC).<br>
				No hay retenci??n ni pago al momento de la operaci??n, sino que se liquida con la DDJJ anual.</li> 
				<li><b>Impuesto al sello:</b> Es un impuesto local. La alicuota var??a seg??n la jurisdicci??n.<br>
					<ul>
						<li>C.A.B.A.
							<ul>
								<li>Al??cuota: seg??n el hecho imponible. Por usos y costumbres abona 50% cada parte.</li>
								<li>Base imponible: Precio, Valuaci??n Fiscal o V.I.R. el que sea mayor.</li>
								<li>Exenci??n: Inmueble destinado por el Comprador a vivienda ??nica, familiar, de ocupaci??n permanente, y ??nica
									propiedad en CABA, hasta $ 6.250.000 de monto imponible. Si excede el mismo, paga la al??cuota citada por
									el excedente.</li>
								<li>Hecho imponible: Boleto de compraventa (pago a cuenta 1%), Boleto de compraventa con entrega de posesi??n
									(3,6%), Escritura traslativa de dominio (3,6%). Las cesiones de Boletos pagan el 1%.</li>
							</ul>
						</li>
						<li>Provincia de Buenos Aires
							<ul>
								<li>Al??cuota: seg??n el hecho imponible. Por usos y costumbres abona 50% cada parte.</li>
								<li>Base imponible: Precio, Valuaci??n Fiscal o Valor imponible al acto, el que sea mayor.</li>
								<li>Exenci??n: Inmueble destinado a vivienda ??nica, familiar y de ocupaci??n permanente, cuya valuaci??n no
									supere $ 1.154.400.</li>
								<li>Hecho imponible: Boleto de compraventa (pago a cuenta 1,2%), Escritura traslativa de dominio (2%). Las cesiones de Boletos 
								pagan el 1,2% (sin importar si hubo posesi??n).</li>
							</ul>
						</li>
					</ul>
				<li><b>Gastos de escriban??a:</b> reposici??n y diligenciamiento de certificados, liberaci??n de los mismos, Estudio de T??tulos, Gastos de inscripci??n, 
				aportes notariales, folios, honorarios del escribano que son abonados por el comprador. En promedio, representan aproximadamente el 1,2% (sin los honorarios del escribano) del valor 
				de escrituraci??n, pero en el caso de propiedades m??s caras el porcentaje es menor ya que algunos de estos conceptos son valores fijos y otros 
				tienen topes, por lo que no todos se elevan por el mayor valor de la propiedad. </li>
				<li><b>Comisi??n inmobiliaria.</b> Lleva IVA</li>
			</ul>


    		</div>
    		
    	</div>


		
	</div>
    
    

    </div>


    <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center"> Resumen gastos del vendedor</h4>
    		
    		<div class="col ">
				<ul>
					<li> ITI: Si corresponde, el 1,5% del valor de escritura. Se paga en pesos, seg??n la cotizaci??n oficial	del	d??lar del d??a anterior de la firma.</li>
					<li> Ganancias: si corresponde, se paga con la DDJJ</li>
					<li> Sellos: <br>En C.A.B.A. el 1.8% del valor de escritura. Si	 la	 vivienda	 es	 familiar,	 de	 ocupaci??n	 permanente,	 y	 ??nica	 propiedad	 del	
				comprador,	este	impuesto	se	exime	hasta	los	$6.250.000	del	Valor	de	Escritura,	si	supera	este	
				valor,	tributa	solo	sobre	el	excedente.<br>	  
						En P.B.A. el 1% del valor de escritura. Si	 la	 vivienda	 es	 familiar,	 de	 ocupaci??n	 permanente,	 y	 ??nica	 propiedad	 del	
				comprador,	este	impuesto	se	exime	hasta	los	$1.154.400. Si supera este valor, tributa	sobre el total.</li>
					<li> Gastos	Notariales: 1,2% aproximadamente. Estos gastos se calculan sobre el valor de	
				escrituraci??n,	 seg??n	 la	 cotizaci??n	 oficial	 del	 d??lar	 del	 d??a	 de	 la	 firma	 y	 se	 abona	 en	 Pesos	
				Argentinos.</li>
				<li>Comisi??n inmobiliaria </li>
				</ul>
    		</div>
    		
    	</div>


		
	</div>
    
    

    </div>


     <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center"> Resumen gastos del comprador</h4>
    		
    		
    		<div class="col">
				
				<ul>
					<li> Sellos: <br>En C.A.B.A. el 1.8% del valor de escritura. Si	 la	 vivienda	 es	 familiar,	 de	 ocupaci??n	 permanente,	 y	 ??nica	 propiedad	 del	
				comprador,	este	impuesto	se	exime	hasta	los	$6.250.000	del	Valor	de	Escritura,	si	supera	este	
				valor,	tributa	solo	sobre	el	excedente.<br>	  
						En P.B.A. el 1% del valor de escritura. Si	 la	 vivienda	 es	 familiar,	 de	 ocupaci??n	 permanente,	 y	 ??nica	 propiedad	 del	
				comprador,	este	impuesto	se	exime	hasta	los	$1.154.400. Si supera este valor, tributa	sobre el total.</li>
					<li> Gastos	Notariales: 1,2% aproximadamente. Estos gastos se calculan sobre el valor de	
				escrituraci??n,	 seg??n	 la	 cotizaci??n	 oficial	 del	 d??lar	 del	 d??a	 de	 la	 firma	 y	 se	 abona	 en	 Pesos	
				Argentinos.</li>
				<li> Honorarios Escribano: 2% aproximadamente.</li>
				<li>Comisi??n inmobiliaria</li>
				</ul>
				<p>Podemos utilizar un simulador para conocer los gastos de cada parte:</p>
				<div class="d-grid gap-2 d-flex justify-content-md-end">
					  <button class="btn btn-primary " type="button"><a href ="https://docs.google.com/spreadsheets/d/1gL9yO-mh7vvbl1HU4k5s2YOrRrbkH6NY0ScgfWBOVZg/edit?usp=sharing" style="text-decoration: none; color: white " >Descargar Simulador</a></button>
				</div>


    			
    		</div>
    	</div>


		
	</div>
    
    

    </div>

         <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center"> TRACTO ABREVIADO</h4>
    		
    		
    		<div class="col">
				
				
    			<p>En el caso de que haya un tracto abreviado, van a haber gastos extras dependiendo si el inmueble est?? ubicado en C.A.B.A. o
			en Provincia.<br>
			En ambos casos, van a haber gastos de inscripci??n y honorarios, que en C.A.B.A. se establece un monto equivalente al 20%
			del 2% de los honorarios por la compra. Asimismo en caso de que la venta se realice en la P.B.A. adem??s de los gastos y honorarios por el 
			tracto abreviado, habr?? que pagar el impuesto de sellos.</p>
    			
    		</div>
    	</div>


		
	</div>
    
    

    </div>

    <div class="container-fluid bg-light mt-3  animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    	<div class="row">
    		
			<h4 class="text-primary text-center mb-5"> D???a de la firma del contrato de locaci??n</h4>
    		
    		<div class="col ">
				<img src="../imagenes/escritura.jpg"  style="max-width:100%;width:auto;height:auto;margin-right:40px;" >
    		</div>
    		<div class="col">
				
				<p>
					Es un d??a importante para todas las partes. 
					LLegar a la firma con tiempo, sin olvidar nada, har?? que sea un momento distendido e inolvidable, para nosotros y, especialmente, 
					para nuestros clientes.<br>
					Comencemos a organizarlo una semana antes. Descarg?? el Check List.
				</p>
				<div class="d-flex justify-content-between mb-5">
					<div class="d-grid gap-2 d-flex justify-content-md-end">
					  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/10nW62rBTHPF1GCX-wtuRYXXn8_x-KXZE/view?usp=sharing"style="text-decoration: none; color: white ">Descargar Check List Firma escritura</a></button>
					</div>

					<div class="d-grid gap-2 d-flex justify-content-md-end">
					  <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1emXGf-Q3KBvpzbUkvGm7etb1wqm_Kqj7/view?usp=sharing"style="text-decoration: none; color: white ">Descargar Check List Firma Boleto</a></button>
					</div>


				</div>
				<p>
					Regalos para los clientes: Podemos llevar un presente que les quede de recuerdo, por ejemplo, un reloj para colgar en la cocina, o un voucher para una cena, un d??a de spa.<br> 
					Tambi??n podemos hacerles llegar al domicilio un desayuno, dese???ndoles mucha felicidad para este d??a
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