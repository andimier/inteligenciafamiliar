<div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
            	<div class="etiquetanegra1">+ noticias &nbsp;</div>
            	<br /><br />
                <?php if(!empty($z)): ?>
            		<?php while($noticias = (mysql_fetch_array($z))): ?>
                    	
					<div class="vacio2">
                    
                		<div class="contenedorfloatleft"><div class="marconegromini">
							<?php if(empty($noticias['imagen1'])): ?>
								<?php // ?>	
							<?php else: ?>
								<img src="cms/<?php echo $noticias['imagen1']; ?>"  width="100"/>
							<?php endif; ?>
                    	</div></div>
                    
                   	 	<div class="contenedorfloatleft">
                    		<div class="titulosnegrosminusculas">
                        		<a href="noticia.php?noticia=<?php echo $noticias['id']; ?>">
								<?php echo $noticias['titulo']; ?>
                            	</a>
                        	</div>
                    		<div class="titulosminusculasgrises"><?php echo $noticias['fecha']; ?></div>
                        	<div class="textos4"><?php echo substr($noticias['contenido'], 0, 150); ?>.....
                        		<a href="noticia.php?noticia=<?php echo $noticias['id']; ?>">leer más</a>
                        	</div>
                    	</div>
                    	<div class="vacio2"></div>
                        
                	</div><!-- CIERRE VACIO 2 -->
                	<?php endwhile ?>
                <?php else: ?>
                	<?php echo $mensaje; ?>
                <?php endif; ?>
        	</div><!-- cierre contenedorcontenidos -->
      	</div><br /><br />
    </div>