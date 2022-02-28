<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>RE/MAX Rio</title>
  <link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/funciones.js"></script>
</head>

<body>
	<br><br>
		
		<table width="500" align="center" bgcolor="#FFFFFF">
			<tr>
				<td>
					<p style="text-align: center; padding-bottom: 10px;"><img src="imagenes/logo.png" width="200px" alt=""></p>
				</td>
			</tr>
		<tr>
			<td style="text-align: center; padding-bottom: 30px; padding-top: 10px;">
			<?php
				require_once('usuarios.php');
				$USER_STAFF = [
					"EMAIL" => $_POST['EMAIL'],
					"PASS" => $_POST['PASS'],
					"TIPO" => "STAFF"
				];
				$USER_AGENTE = [
					"EMAIL" => $_POST['EMAIL'],
					"PASS" => $_POST['PASS'],
					"TIPO" => "AGENTE"
				];
				if(in_array($USER_STAFF,$USUARIOS)){
					session_start();
					$_SESSION['EMAIL'] = $_POST['EMAIL'];
					$_SESSION['TIPO'] = "STAFF";
					header("Location: index.php");
				}elseif(in_array($USER_AGENTE,$USUARIOS)){
					session_start();
					$_SESSION['EMAIL'] = $_POST['EMAIL'];
					$_SESSION['TIPO'] = "AGENTE";
					header("Location: index.php");
				}else{
					echo "<p>Email y/o contraseña incorrectos.</p><br>
					<a href='http://remax-rio.com.ar/intranet1/login.php'><button>Volver</button></a>";
				}

			?>
			</td>
		</tr>
	</table>
	
</body>
</html>