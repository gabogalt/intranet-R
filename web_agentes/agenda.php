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

  <title>RE/MAX Rio - Agenda</title>
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

<div class="container-fluid bg-light mt-3 p-5" > 

  <div class="shadow-lg p-3  bg-body rounded animate__animated animate__slideInUp">
  	<h2>Usar agenda</h2>
    <div class="row ">
      <div class="col mt-3">
		
		<div class="container mt-4">
		  
			<h4 class="text-primary">Actividades Importantes y Urgentes</h4>

				<p>Gestionar el tiempo de manera eficiente, es ocupar las horas disponibles entre las tareas que debemos realizar, mejorando nuestra productividad y nuestra calidad de vida.</p>

				<h6 class="text-danger">Tareas urgentes</h6>

				<p>
					La urgencia es una cualidad asociada al <b>tiempo</b>. Tareas que requieren de nuestra acción inmediata. Tienen una fecha límite muy pr�xima. Lo urgente se reconoce por su necesidad, por el apremio que implica o por las consecuencias que su falta puede causar.
				</p>

				<h6 class="text-danger">Tareas importantes</h6>
				<p>
					La importancia es una cualidad asociada a las <b>consecuencias</b>. una tarea es importante si las consecuencias que sufriremos al no hacerla son graves.
				</p>

				<p>
					La matriz de Eisenhower, o matriz de lo urgente-importante, es una técnica que ayuda en la gesti�n del tiempo y planificación de tareas en el trabajo para evitar esas listas de tareas pendientes y tareas que nunca se cumplen a tiempo.
				</p>

				<p>
					Consiste en una tabla o cuadro en el que, jugando con las filas y las columnas, se organizan las tareas en torno a 4 conceptos o estados: urgente y no urgente; importante y no importante
				</p>.
				<div class="d-flex justify-content-center"><img src="../imagenes/impurg.jpg" ></div>
				
				<h6 class="text-danger">Urgentes e importantes </h6>
				<p>
					Acciones  inmediatas que traen consecuencias negativas no hacerlo.<br>
					Cumplir con las fechas de entrega de ACM, preparar documentación para firmas.
				</p>
				<br>
				<h6 class="text-danger">No urgentes pero importantes</h6>
				<p>
					Hay tiempo, es ideal para planificar estrategias. Es el plano de la excelencia.<br>
					Seguimiento a clientes, prospectar, publicar en las redes.
				</p>
				<h6 class="text-danger">Urgentes pero no importantes</h6>
				
				<p>
					Búsquedas a clientes no fidelizados. 
				</p>

				<h6 class="text-danger">No urgentes y no importantes</h6>
				<p>
					En general todo cuanto signifique ocio, entretenimiento y placer. Es un cuadrante al que se debe prestar atención porque muchas veces se subestima lo mucho que puede quitar tiempo útil para hacer actividades realmente importantes.
				</p> 

		 
		</div>
        
      </div>

      
    </div>
    
    
  </div>

 
  
</div>



<div class="container-fluid bg-light p-5" > 

  <div class="shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__slideInLeft">
    <div class="row ">
      <div class="col mt-3">
		
		<div class="container mt-4">
		  
			<h4 class="text-primary"> ¿Cómo gestionar el tiempo?</h4>
			<ul>
				<li> Organizar la agenda.</li>
				<li>Siempre dejar espacios para imprevistos.</li>
				<li>Planificar: delimitar en el tiempo las tareas.</li>
				<li>Concentración en lo que estamos haciendo, evitando interrupciones.</li>
				<li>Ser asertivo: aprender a decir NO.</li>
				<li>Mantener orden. El desorden puede generar pérdida de tiempo.</li>
				<li> Programá a largo, mediano y corto plazo.</li>
			</ul>
				
		</div>
        
      </div>

      <div class="col  mt-3 " >
		<div class="container mt-3">
		  	<h4 class="text-primary">Método semáforo</h4>
			<p>
				Este sistema es muy fácil de seguir. Como su nombre lo indica, se usan los tres colores del sem�foro: verde si la tarea está hecha, amarillo si está sin completar y rojo si no lo has cumplido.
			</p>
			<p>
				El día anterior anotamos todas las tareas y rutinas a realizar (ir al gimnasio, presentar un ACM, etc.). Y al final del día, subrayamos o ponemos los colores que correspondan.
			</p>
			<p>
				Todas las tareas en amarillo las anotamos inmediatamente al principio del siguiente día para no dejar nada a medias y a continuación las que quedaron en rojo.
			</p>

		
			
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