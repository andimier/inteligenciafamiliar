	
	
	<div class="contenedor2">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
            	<div class="cont_titulotodaspublicaciones">
					<div class="titulosminusculas">Todas las Publicaciones</div>
                </div>
                <?php while ($publicaciones = (mysql_fetch_array($y))): ?>
					<div class="marconegropequeno">
                    	<a href="publicacion.php?publicacion=<?php echo $publicaciones['id']; ?>&fecha=<?php echo $publicaciones['fecha'];?>">
                        <img src="cms/<?php echo $publicaciones['imagen2']; ?>" width="140" />
                        </a>
                    </div>
				<?php endwhile; ?>
               
            </div>
            
            <div class="vacio"></div>
      	</div><!-- cierre contenedorcontenidos -->
    </div>