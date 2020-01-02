<?php 
    $q_publicacion = "SELECT * FROM publicaciones WHERE id = " . $publicacion_id;
	$x = mysql_query($q_publicacion, $connection);

	while($publicacion = mysql_fetch_array($x)){
		$publi_titulo[]    = $publicacion['titulo'];
		$publi_fecha[]     = $publicacion['fecha'];
		$publi_contenido[] = $publicacion['contenido'];
		$publi_ficha[]     = $publicacion['ficha_tecnica'];
		$publi_imagen[]    = $publicacion['imagen2'];
	}

	$q_publicaciones = "SELECT * FROM publicaciones ORDER BY fecha DESC";
	$y = (mysql_query($q_publicaciones, $connection));

	$q_imagenes_publicaciones = "SELECT * FROM imagenes_publicaciones WHERE publicacion_id = $publicacion_id";
	$z = (mysql_query($q_imagenes_publicaciones, $connection));
    
?>