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

  <title>RE/MAX Rio - Presentación ACM</title>
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
          <h2>Presentación del acm</h2>
          <p>Presentamos nuestro informe de ACM.</p>
          <div class="d-grid gap-2 d-flex justify-content-md-end">
	          <button class="btn btn-primary " type="button"><a href="https://drive.google.com/file/d/1meYz1GqUP4bBY2xJiAFk3IP_U6lO-q9c/view?usp=sharing"  style="text-decoration: none; color: white ">Descargar "Presentación de ACM"</a>
			  </button>
	       </div>
        
        </div>
        
      </div>


    
  </div>
   
  <div class="container-fluid bg-light mt-3 p-5 animate__animated animate__slideInLeft" > 

    
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
      <div class="row">
        <div class="col ">
          <h4 class="text-center ">Explicamos:</h4>
          <ul>
			<li>Para llegar al precio hemos investigado todas las ofertas similares (en los portales más utilizados) y las vendidas/alquiladas dentro de la base de </font color> <span class="rojo">RE<span class="azul">/</span>MAX</span></li>
			<li>Hemos ponderado algunas características como por ejemplo, la relación dormitorio/baño, si ha sido reciclada, la antiguedad, el valor de expensas. </li>
			<li>La diferencia del valor del metro cuadrado en superficie cubierta, descubierta y semicubierta.</li>
		  </ul>

		  <h4 class="text-primary">Importante</h4>
		  <ul>
			<li>Mostrar seguridad, empatía, y profesionalismo.</li>
			<li>Llevar siempre la autorización. Debemos lograr la firma de la autorización.<br>
			Consultar <a href="autori.php"> Autorizaciones</a> para chequear quien debe firmar la autorización 
			y en <a href="doccap.php"> Documentos necesarios</a> que documentación nos deben entregar<br></li>
			<li>Debemos estar preparados para contestar las objeciones del cliente. (Ver cuáles son algunas de esas objeciones en: <a href="objcli.php">Objeciones del cliente</a>)</li>
			<li>Prometamos calidad de servicio. </li>
		  </ul>

         
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