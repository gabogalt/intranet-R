<?php
	require_once('../control_sesion.php');
  header('Content-Type: text/html; charset=UTF-8');
	
?>

<!DOCTYPE html>
<html>
<head>
<link rel="STYLESHEET" href="../estilos.css">
<link rel="stylesheet" href="../css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../js/funciones.js"></script>
<title>RE/MAX Rio - Planilla de rendición</title>
	<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<nav class="nav">
<a href="index1.php" alta="logo"><img alt="Logo" src="../imagenes/logo.png" class="logo"></a>
<img alt="Menu" src="../imagenes/menu.png" class="menu_mobile">
<div class="nav1">
 <?php include("../botonera.php"); ?>   
</div>
<div class="nav2">
 <?php include("../botonera.php"); ?>   
</div>
</nav>
<header class="header">
	<div class="area1">
    <img src="../imagenes/header.jpg" class="pc" align="top" style="max-width:100%;width:auto;height:auto;">
    <img src="../imagenes/header_mobile.jpg" class="mobile" align="top" style="max-width:100%;width:auto;height:auto;">
  </div>
	
</header>
<main class="main">
<div class="estoy"><a href="index1.php">Home</a> </div>

<div class="area3">
<h1>planilla de rendición</h1> 
Debemos completarla al finalizar una operación.<br><br>
<a href="https://drive.google.com/file/d/1kfp3pB0VSaWJYqREX3EVLFmtgl92zeSZ/view?usp=sharing" class="btn azul" style="display: inline-flex">Descargar "Planilla de Rendición"</a>
<br><br>


</div>
	
   </main>
<footer class="footer">

Martillera: ANDREA OLIVERI CSI 6401 / CUCICBA 7190<br>
Av. Gral. San Martin 1545 - Florida, Vicente Lopez, Argentina

</footer>   
</body>
</html>