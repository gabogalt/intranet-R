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

  <title>RE/MAX Rio - ADN</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../estilos4.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    

  <style>
 

.animate__animated.animate__slideInUp {
  --animate-duration: 1.5s;
}

.animate__animated.animate__slideInLeft{
  --animate-duration: 3s;

}

.animate__animated.animate__slideInRight{
  --animate-duration: 5s; 
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
    <li class="breadcrumb-item p-3"><a href="index1.php">Home</a></li>
  </ol>
</nav>


<!--============================
=          CONTENIDO         =
=============================-->
<div class="container bg-light p-5 animate__animated animate__slideInUp" style="border-radius: 30px; 
  border-top-style: solid;
  border-width: 18px;
  border-color: #023da5;
  " >
    <h1>EL ADN RE/MAX</h1>
    <h5>Son los principios que orientan nuestra conducta.</h5>
    <h5>Los 14 principios positivos revelan las acciones a fomentar</h5>
    <h5>Los 14 principios negativos revelan las acciones que no debemos practicar.</h5>
    <br>
    <a href="../imagenes/ADN1.jpg"><img src="../imagenes/ADN1.jpg" align="top" style="max-width:100%;width:auto;height:auto; "></a>
</div>

<div class="container-fluid bg-light mt-5 p-5 animate__animated animate__slideInLeft" style="border-top-style: solid; border-top-width: 15px; border-color: #EEEEEE; border-bottom-width: 15px; border-bottom-style: solid;  " > 
  <h3 style="color: black">Principios POSITIVOS</h3>
  <h5 class="pt-3 text-primary">Tu negocio sin estar solo:</h5>
  <p class="p-3"><span class="rojo">RE<span class="azul">/</span>MAX</span> te ofrece la oportunidad de crear y desarrollar un negocio fructífero con todo el apoyo de una estructura y una red, sin la necesidad de hacer una gran inversión. </p>


  <h5 class="pt-3 text-primary">Ser diferente:</h5>
  <p class="p-3">Ser diferente pasa por el modo único e innovador de estar en el negocio, empezando por el énfasis en la promoción personal que permite al Agente Inmobiliario promoverse usando la marca <span class="rojo">RE<span class="azul">/</span>MAX.</p>

  <h5 class="pt-3 text-primary">Principio de la Comisión Máxima:</h5>
  <p class="p-3">El principio más importante, siendo elevado al cubo en la fórmula. El concepto de Comisión Máxima es la piedra angular del modelo de negocio <span class="rojo">RE<span class="azul">/</span>MAX</span>. 
  Este principio nace con el objetivo de premiar el desempeño de los mejores equipos.
  </p>

  <h5 class="pt-3 text-primary">Clientes para toda la vida:</h5>
  <p class="p-3">Entender el valor futuro de un cliente del equipo. Es fundamental realizar contactos regulares con todos los clientes, eliminando la mentalidad que lleva a efectuar una �nica interacci�n.</p>

  <h5 class="pt-3 text-primary">Responsabilidad personal:</h5>
  <p class="p-3">Asumir responsabilidades es lo que hace que el sistema <span class="rojo">RE<span class="azul">/</span>MAX</span> funcione: adueñarse del negocio, ser una persona de palabra y cumplir con lo que se promete. Es el marco en el cual la interdependencia puede generar resultados que beneficien a todos.</p>

  <h5 class="pt-3 text-primary">Dependemos Unos de Otros:</h5>
  <p class="p-3">Es el principio que complementa el escenario del espíritu <span class="rojo">RE<span class="azul">/</span>MAX</span>, donde "Todos Ganan". Como uno de los catalizadores del liderazgo en el mercado, la interdependencia ocurre en el intercambio de negocios, conocimientos, información y procedimientos. En <span class="rojo">RE<span class="azul">/</span>MAX</span> es vital que todos los Asociados compartan el esp�ritu sano de Ganar/Ganar.</p>

  <h5 class="pt-3 text-primary">Aplicar un sistema que funciona:</h5>
  <p class="p-3"><span class="rojo">RE<span class="azul">/</span>MAX</span> es un modelo de negocio basado en un sistema en el cual, el Agente Inmobiliario, bajo la supervición y dirección del Corredor, dirige su propio negocio, rigiendo su conducta de acuerdo al Código de Ética y los procedimientos de la marca, así como los sistemas operativos de la oficina a la cual está afiliado y los de <span class="rojo">RE<span class="azul">/</span>MAX</span> Argentina-Uruguay. También es importante que los Agentes Inmobiliarios comprendan que son empresarios autónomos que necesitan tener su propio plan de negocios, sistema de trabajo y presupuesto.</p>

  <h5 class="pt-3 text-primary">Involucrarse en la Comunidad:</h5>
  <p class="p-3">Damos importancia a la Responsabilidad Social en nuestra forma de ser y en la vida de la empresa.</p>

  <h5 class="pt-3 text-primary">Pasarlo bien:</h5>
  <p class="p-3">Forma parte de nuestro espíritu de aventura y actitud de equipo que nos caracteriza.</p>

  <h5 class="pt-3 text-primary">Garantía de Calidad:</h5>
  <p class="p-3">Garantía de Calidad</font color> <span class="rojo">RE<span class="azul">/</span>MAX</span>: Se traduce en la prestación de un servicio 5 estrellas. Sólo clientes altamente satisfechos recomendarón al equipo a otros potenciales clientes.</p>

  <h5 class="pt-3 text-primary">Liderazgo:</h5>
  <p class="p-3">Es una gran fortaleza en el sistema </font color> <span class="rojo">RE<span class="azul">/</span>MAX</span> que se pone de manifiesto, no sólo por el continuo y sostenido crecimiento de la marca, sino por el desarrollo de liderazgo en todos los niveles de la empresa a nivel nacional e internacional, provocandouna revolución en el sector inmobiliario.</p>

  <h5 class="pt-3 text-primary">Reconocimiento:</h5>
  <p class="p-3">Premiar el éxito es crucial en el sistema de valores de </font color> <span class="rojo">RE<span class="azul">/</span>MAX</span>. Creemos firmemente en el reconocimiento y en la celebración de los logros en todos los niveles. Los Agentes Inmobiliarios tienen la oportunidad de acceder a varios premios de acuerdo a su rendimiento.</p>

  <h5 class="pt-3 text-primary">Disciplina financiera:</h5>
  <p class="p-3">Es un factor clave para construir un negocio rentable en el entorno </font color> <span class="rojo">RE<span class="azul">/</span>MAX</span>.</p>

  <h5 class="pt-3 text-primary">Pasión por </font color> <span class="rojo">RE<span class="azul">/</span>MAX</span>:</h5>
  <p class="p-3">El emprendedor requiere de una enorme dosis de pasión que alimenta el sueño de cada uno. En </font color> <span class="rojo">RE<span class="azul">/</span>MAX</span> 
la pasi�n es la "sangre" que corre por nuestras venas.</p>

</div>

  
<div class="container-fluid bg-light mt-5 p-5 animate__animated animate__slideInRight" style="border-top-style: solid; border-top-width: 15px; border-color: #EEEEEE; border-bottom-width: 15px; border-bottom-style: solid;  " > 
  <h3 style="color: black">Principios NEGATIVOS</h3>
  <h5 class="pt-3 text-danger">Las personas incorrectas:</h5>
  <p class="p-3">No todas las personas tienen el perfil para estar y convivir en <font color="red"> RE</font color><font color="blue">/</font color><font color="red">MAX</font color>. Estar asociado a ellos es un error.</p>

  <h5 class="pt-3 text-danger">Mal uso de la marca:</h5>
  <p class="p-3">Una de las razones por el éxito continuo de <span class="rojo">RE<span class="azul">/</span>MAX</span> es la proyección de la marca y lo que representa. Con esto en mente, el mal uso de la marca sirve como un recordatorio para que todos cuiden su buen uso. El uso incorrecto de las marca puede producirse de diversas formas, desde el uso indebido del logotipo a un comportamiento contrario al Código de ética.</p>

  <h5 class="pt-3 text-danger">No facilitar o compartir referidos:</h5>
  <p class="p-3">El sistema de compartir referidos en <span class="rojo">RE<span class="azul">/</span>MAX</span>es el único en el mercado que posibilita la expansión de tus logros. Negar este sistema va en contra de todos los valores de <span class="rojo">RE<span class="azul">/</span>MAX</span>.</p>

  <h5 class="pt-3 text-danger">Ganancia/Individualismo:</h5>
  <p class="p-3">Cuando permitimos que controle nuestras acciones, pensamientos y voluntad, r�pidamente destruye el principio fundamental de "Depender Unos de Otros".</p>

  <h5 class="pt-3 text-danger">Agentes sin control:</h5>
  <p class="p-3">Promueven comportamientos y actitudes anti-productivos para el sistema de valores de <span class="rojo">RE<span class="azul">/</span>MAX</span> en el que "Todos Ganan".</p>

  <h5 class="pt-3 text-danger">No salir en la fotografía:</h5>
  <p class="p-3">Este principio plantea el riesgo de que se derrumbe la comunicación entre unos y otros. Sirve como un recordatorio continuo para evaluar y mejorar nuestras habilidades de comunicación, tanto siendo oradores como oyentes.</p>

  <h5 class="pt-3 text-danger">Actitudes negativas:</h5>
  <p class="p-3">La actitud mental hace toda la diferenca en el desrrollo y el rendimiento. Las mentes llenas de obstáculos y limitaciones ven el vaso medio vacío, promoviendo energ�a negativa dentro del equipo.</p>

  <h5 class="pt-3 text-danger">Formación inadecuada:</h5>
  <p class="p-3">El entrenamiento y la formación encuadran la necesidad continua de desarrollar aptitudes y conocimentos. No invertir en la formación compromete tu crecimiento y es un claro indicador de no pensar en el futuro de tu empresa.</p>

  <h5 class="pt-3 text-danger">Formación inadecuada:</h5>
  <p class="p-3">Desperdician energía que estará mejor empleada en actividades productivas tales como el servicio al cliente y la promoción personal.</p>

  <h5 class="pt-3 text-danger">Mala presentación:</h5>
  <p class="p-3">Mala imagen en marketing y publicidad así como la apariencia personal de uno.</p>


  <h5 class="pt-3 text-danger">Víboras:</h5>
  <p class="p-3">Con su veneno destruyen la sinergia  </font color> <span class="rojo">RE<span class="azul">/</span>MAX</span> y perjudican personal y profesionalmente a todos los que están a su alrededor.</p>
  
  <h5 class="pt-3 text-danger">Resultados debajo de la media:</h5>
  <p class="p-3">Es el camino más rápido para impedir el principio positivo "Ser diferente". La tendencia a la complacencia y el comportamiento mediocre son contrarios al espíritu  </font color> <span class="rojo">RE<span class="azul">/</span>MAX</span> y constituyen un obstáculo para el éxito.</p>

  <h5 class="pt-3 text-danger">No participan:</h5>
  <p class="p-3">Falta de participación y de trabajo en equipo es crucial. ¡No vivimos en una isla!. </p>

   <h5 class="pt-3 text-danger">Deshonestidad y conducta NO profesional:</h5>
  <p class="p-3">¡¡Intolerable!! No es negociable.</p>

</div>




<!--============================
=            FOOTER            =
=============================-->

  <?php include "../footer.php" ?>
</body>


</html>