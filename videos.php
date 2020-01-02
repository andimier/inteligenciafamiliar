<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="description" content="Describe la formación y experiencia de la autora y creadora del proyecto de Inteligencia Familiar.">
		<!--<meta name="keywords" content="HTML,CSS,XML,JavaScript">-->
		<meta name="author" content="Maria Elena Lopez Jordan">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Videos - María Elena López Jordán - Inteligencia Familiar</title>
		<link rel="stylesheet" href="estilos/fuentes.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="estilos/estilos.css" type="text/css" media="screen" />
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	</head>

	<body>
		<?php include_once('analyticstracking.php');?>
		<?php require_once('cabezote.php');?>

		<div class="cnt-gris">
			<h1>VIDEOS</h1>
		</div>

		<div class="contenedor2">
			<div class="contenidos">
				<div id='cnt-videos'>

				</div>
				<div class="vacio"></div>
			</div>
		</div>

		<div id="fondo-video"></div>
		<div id="reproductor">
			<iframe id="video-player" width="100%" height="100%" src=""></iframe>
			<div id="btn-cerrar-video"><img src="diseno/btn-cerrar.png" /></div>
		</div>

		<?php require_once('footer.php');?>
		<script src="js/videos-script.js" type="text/javascript"></script>
	</body>
</html>
