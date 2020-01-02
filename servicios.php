<?php

	require_once("includes/connection.php");

	$numero = 1;

	$q_servicios1= "SELECT * FROM contenidos WHERE seccion_id = 3 AND indice = 0";
	$x = (mysql_query($q_servicios1, $connection));
	$y = (mysql_query($q_servicios1, $connection));

	while($servicios2 = (mysql_fetch_array($y))){
		$titulos2[] = $servicios2['titulo'];
		$contenidos2[] = $servicios2['contenido'];
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="description" content="Productos ofrecidos para dar asesoría y apoyo profesional en la implementación de estrategias orientadas a desarrollar la inteligencia familiar a individuos, empresas, instituciones públicas y privadas y a la comunidad educativa. Tiene como objetivo mejorar el funcionamiento familiar para incrementar el bienestar y los niveles de satisfacción de la familia. ">
		<!--<meta name="keywords" content="HTML,CSS,XML,JavaScript">-->
		<meta name="author" content="Maria Elena Lopez Jordan">

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Servicios - Inteligencia Familiar</title>
		<title>Inteligencia Familiar</title>
		<?php require_once('requeridos.php');?>

	</head>
	
	
	<body>
	
	
	
		<?php include_once('analyticstracking.php');?>
		<?php require_once('cabezote.php');?>
		
		
		<div class="cnt-amarillo">
			<h1>SERVICIOS</h1>
		</div>
		
		<!--<div class="contenedoramarillo">
			
			
			<div class="contenidos">
			
				<div class="contenedorcontenidos">
					--><!--<div class="etqta_negra2"><a href="#otros">  + OTROS SERVICIOS</a></div>-->
					<!--<div class="tts_blancoscentrados">SERVICIOS</div>
					 
				</div>
			</div>

			<div class="vacio"></div>
		</div>
		-->
		
		
		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div class="contenedorfloatleft">
						<div class="numerosnegros">1</div>
					</div>
					
					<div id="servicio1">
						<div class="titulosnegros"><a name="<?php echo $titulos2[0]; ?>" ><?php echo $titulos2[0]; ?></a></div><br />
						<div class="textos2"><?php echo $contenidos2[0]; ?></div><br />
					</div>
					<div class="vacio"></div>
				</div><!-- cierre contenedorcontenidos -->
			</div>
		</div>
		
		
		
		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">
				
					<div class="contenedorfloatleft">
						<div class="numerosnegros">2</div>
					</div>
					
					<div class="contenedorfloatleft">
						<div class="barranegra">
							<div class="titulosblancosgrandes">&nbsp;&nbsp;<a name="<?php echo $titulos2[1]; ?>" ><?php echo $titulos2[1]; ?></a></div>
						</div>
						<div class="textos2"><?php echo $contenidos2[1]; ?></div><br />
					</div>
					<div class="vacio"></div>
				</div><!-- cierre contenedorcontenidos -->
			</div>
		</div>
		
		
		
		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div class="contenedorfloatleft">
						<div class="numerosnegros">3</div>
					</div>
					
					<div id="servicio1">
						<div class="titulosnegros"><a name="<?php echo $titulos2[2]; ?>" ><?php echo $titulos2[2]; ?></a></div><br />
						<div class="textos2"><?php echo $contenidos2[2]; ?></div><br />
					</div>
					<div class="vacio"></div>
				</div><!-- cierre contenedorcontenidos -->
			</div>
		</div>
		
		
		
		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					
					<div class="contenedorfloatleft">
						<div class="numerosnegros">4</div>
					</div>
					
					<div class="contenedorfloatleft">
						<div class="barranegra">
							<div class="titulosblancosgrandes"><a name="<?php echo $titulos2[3]; ?>" ><?php echo $titulos2[3]; ?></a></div>
						</div>
						
						<div class="textos2"><?php echo $contenidos2[3]; ?></div><br />
					</div>
					<div class="vacio"></div>
				</div><!-- cierre contenedorcontenidos -->
			</div>
		</div>
		
		<!--================================  OTROS SERVICIOS   ===========================-->
		
		<!--<div class="cnt_azul">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<br />
					<div class="tituloblancoarticulos"><a name="otros">OTROS SERVICIOS</a></div>
					<div class="vacio"></div>
				</div>
			</div>
			
		</div>
		
		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					
					 <div class="titulosnegros">
						<?php echo $titulos2[0]; ?><br />
						<?php echo $titulos2[1]; ?><br />
						<?php echo $titulos2[2]; ?><br />
						<?php echo $titulos2[3]; ?>
					 </div>
					 <div class="vacio"></div>
				</div>
			</div>
			
		</div>-->
		
		<?php require_once('footer.php'); ?>
		
	</body>
</html>