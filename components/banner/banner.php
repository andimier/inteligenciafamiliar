<?php
	$q_articulosbanner= "SELECT * FROM articulos ORDER BY fecha DESC LIMIT 1";
	$articulobanner = (mysqli_query($connection, $q_articulosbanner));
	while($art = mysqli_fetch_array($articulobanner)){
		$artbanner0 = $art['id'];
		$artbanner1 = $art['imagen2'];
		$artbanner2 = $art['titulo'];
		$artbanner3 = $art['contenido_id'];
	}

	$q_publicacionesbanner = "SELECT * FROM publicaciones ORDER BY fecha DESC LIMIT 1";
	$publicacionbanner = mysqli_query($connection, $q_publicacionesbanner);
	while($publi = mysqli_fetch_array($publicacionbanner)){
		$publibanner0 = $publi['id'];
		$publibanner3 = $publi['fecha'];
		$publibanner1 = $publi['imagen2'];
		$publibanner2 = $publi['titulo'];
	}

	$q_notibanner= "SELECT * FROM noticias ORDER BY fecha DESC LIMIT 1";
	$noticiasbanner = (mysqli_query($connection, $q_notibanner));
	while($noti = mysqli_fetch_array($noticiasbanner)){
		$nbanner0 = $noti['id'];
		$nbanner3 = $noti['fecha'];
		$nbanner1 = $noti['imagen2'];
		$nbanner2 = $noti['titulo'];
	}

?>