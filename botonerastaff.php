<?php
require_once('control_sesion.php');
	if($_SESSION['TIPO'] != "STAFF"){
		header("Location: index.php");
		exit;
	header('Content-Type: text/html; charset=UTF-8');

	}
//	header('Content-Type: text/html; charset=iso-8859-1');
?>

	<meta charset="iso-8859-1">

<ul style="letter-spacing: 0.5px; font-size: 12px;">
	
	<li> Responsabilidades y Procesos
		<ul>
			<li><a href="listdiana.php">Responsabilidades del equipo</a></li>
			<li><a href="selalt.php">Procesos</a></li>
			<li><a href="indintr.php">Índice páginas Intranet</a></li>
			<li><a href="legales.php">Legales</a></li>
			<li><a href="premiados.php">Diplomas</a></li>
			
		</ul>
	</li>
	<li>Agentes en formación
		<ul>
		
			<li><a href="manuinfo.php">Carpeta informativa</a></li>
			<li><a href="manubien.php">Manual de bienvenida</a></li>
			<li><a href="planing.php">Planilla de ingreso</a></li>
			<li><a href="plancapa.php">Planilla de capacitación</a></li>
			<li><a href="planind.php">Planilla individual de cada agente</a></li>
			<!--<li><a href="proveedores.php">Proveedores</a></li>
			<li><a href="marchan.php">Merchandising</a></li>-->
		</ul>
	</li>
	<li>Planillas
				<ul>
					<li><a href="plancie.php">Planilla de altas / cierres</a></li>
					<li><a href="carteles.php"> Planilla Carteles</a></li>
					<li><a href="documentos.php">Planilla Documentos</a></li>
					<li><a href="cvinteresados.php">Planilla CV interesados</a></li>
					<li><a href="planguargeneral.php">Planilla guardia general</a></li>
				</ul>
	</li>
	
	<li> Pendientes
		<ul>
			<li> <a href="pendian.php">Pendientes Diana</a></li>
		</ul>
	</li>
	
	 
    <!--<li>Herramientas
		<ul>
			
			<li><a href="base.php">Base relacional</a></li>
			<li><a href="agenda.php">Uso de agenda</a></li>
			<!--<li><a href="mail.php">Mail</a></li>
			<li><a href="calendar.php">Google Calendar</a></li>
			<li><a href="redsoc.php">Redes sociales</a></li>
			<li><a href="mapinter.php">Mapa Interactivo</a></li>
			<li><a href="redrex.php">Red RE/MAX</a></li>
			
			
		</ul></li>
    <li>Procesos
			<ul> 
			<li>Prospecci�n<span class="flecha">&#9658;</span>
				<ul>
					<li><a href="prospe.php">Prospectos/Clientes</a></li>
					<li><a href="acprop.php">Acciones</a></li>
				</ul>
			</li>
			<li><a href="proven.php">Proceso general para la Venta</a></li>
			<li><a href="proalq.php">Proceso general para la Locaci�n</a></li>
			<li>Prelisting<span class="flecha">&#9658;</span>
				<ul>
					<li><a href="prelist.php">Primera entrevista</a></li>
					<li><a href="listdat.php">Datos a relevar</a></li>
					<li><a href="acm.php">ACM</a></li>
					<li><a href="presacm.php">Presentaci�n del ACM</a></li>
					
				</ul>
			</li>
			<li><a href="objcli.php">Objeciones del cliente</a></li>
			<li>Captaci�n<span class="flecha">&#9658;</span>
				<ul>
					<li><a href="doccap.php">Documentos requeridos</a></li>
					<li><a href="fotvid.php">Producci�n visual - Plano</a></li>
					<li><a href="cargprop.php">Carga de la propiedad</a></li>
					<li><a href="cartel.php">Colocaci�n de cartel</a></li>
				</ul>
			</li>
			<li><a href="muestra.php">Muestra de la propiedad</a></li>
			<li><a href="reserva.php">Reserva/Refuerzo</a></li>
			<li>Venta<span class="flecha">&#9658;</span>
				<ul>
					
					<li><a href="gasven.php">Gastos de escritura</a></li>
					<li><a href="diaven.php">D�a de escritura</a></li>
				</ul>
			</li>
			<li>Locaci�n<span class="flecha">&#9658;</span>
				<ul>
					
					<li><a href="gasalq.php">Gastos de locaci�n</a></li>
					<li><a href="dialoc.php">D�a de firma de contrato</a></li>
					<!--<li><a href="impalq.php">Tratamiento impositivo de locaciones</a></li>
				</ul>
			</li>
			<li><a href="rendi.php">Rendici�n</a></li>
			<li><a href="segcli.php">Seguimiento a clientes</a></li>
			<li><a href="marquet.php">Acciones de marketing</a></li>
			<!--<li><a href="conpub.php">Control de publicaciones</a></li>-->
			<!--<li><a href="busca.php">B�squedas</a></li> 
						
		</ul></li>
	<li>Material de consulta
		<ul>
			<li><a href="conceptos.php">Conceptos que debemos conocer</a></li>
			<li><a href="prosus.php">Temas de inter�s</a></li>
			<li><a href="biblio.php">Biblioteca</a></li>
			<li><a href="flyer.php">Flyers y videos</a></li>
			<li><a href="taller.php">Talleres</a></li>
			<li><a href="tipcli.php">Generar confianza con el cliente</a></li>
			<!--<li><a href="mains.php">MAX Center</a></li>
		</ul></li>
	<?php if($_SESSION['TIPO'] == "STAFF"):?>
	<li><a href="menustaff.php">Menu Staff</a>
	</li>
	
	
	<?php endif; ?>-->

</ul>