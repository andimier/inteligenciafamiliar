<?php
	require_once("includes/connection.php");

	$query = "SELECT * FROM secciones";
	$secciones = (mysqli_query($connection, $query));

	$querycont1 = "SELECT * FROM contenidos WHERE seccion_id = 1 AND contenido_id = 8";
	$contenidos1 = (mysqli_query($connection, $querycont1));

	while($contenido1 = mysqli_fetch_array($contenidos1)){
		$titulos[] = $contenido1['titulo'];
		$parrafo[] = $contenido1['contenido'];
	}

	$querycont3 = "SELECT * FROM contenidos WHERE seccion_id = 3";
	$contenidos3 = (mysqli_query($connection, $querycont3));

	$queryperfil= "SELECT * FROM contenidos WHERE seccion_id = 4";
	$contenidoperfil = (mysqli_query($connection, $queryperfil));

	$q_articulos= "SELECT * FROM articulos ORDER BY fecha DESC LIMIT 5";
	$articulos = (mysqli_query($connection, $q_articulos));
?>