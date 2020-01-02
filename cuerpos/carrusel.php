<?php
$querypublicaciones= "SELECT * FROM publicaciones LIMIT 4";
$publicaciones = (mysql_query($querypublicaciones, $connection));

?>

<div class="my_carousel">
	<div class="carousel_container">
		<div id="carousel"></div>
		<img src="diseno/inicio/carrusel1/izquierda.png" class="anterior"/>
		<img src="diseno/inicio/carrusel1/derecha.png" class="siguiente"/>
	</div>
	
	<div class="caption_container">
		<div id="captions"></div>
	</div> 

	<div class="carousel_data">
		<?php while($publicacion = mysql_fetch_array($publicaciones)): ?>
    	<div class="carousel_item">
			<div class="imagen" ><img src="cms/<?php echo $publicacion['imagen2']; ?>"/></div>
			<div class="caption">
        		<a href="publicacion.php?publicacion=<? echo $publicacion['id']; ?>&fecha=<?php echo $publicacion['fecha'];?>">
				<?php echo $publicacion['titulo'];  ?>
            	</a>
        	</div>
		</div>
		<?php endwhile; ?>

	</div> 
</div>

