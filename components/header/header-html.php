<?php
	require_once("includes/connection.php");
	require_once("header.php");
?>

<div id="cabezote">
	<div id="contenido_cabezote">
		<div id="logo"><img src="diseno/inicio/logosombra.png"  /></div>

		<div id="contenedortitulos"><br />
			<div id="titulointeligencia">Inteligencia Familiar</div>
			<div id="nombremel">María Elena López</div>

			<div class="flotador-redes">
				<div class="contenedorfloatleft3">
					<a href="http://www.facebook.com/pages/Maria-Elena-L%C3%B3pez-Inteligencia-Familiar/288095567972282" target="_blank">
					<img src="diseno/cabezote/facebook.png" />
					</a>&nbsp;
				</div>
				<div class="contenedorfloatleft3">
					<a href="http://twitter.com/inteligenciafam" target="_blank">
					<img src="diseno/cabezote/twitter.png" />
					</a>
				</div>
			</div>
		</div>

		<div id="noticiascabezote">
			<div id="ganchocabezote">
				<img src="diseno/inicio/ganchocabezote.png" />
			</div>

			<div id="colgajocabezote">
				<img src="cms/<?php echo $headerData['imageInfo']['image']; ?> " width="70" />
				<br />
				<br />
			</div>

			<div class="textos12">
				<a href="noticias.php">
					<?php echo substr($headerData['imageInfo']['title'], 0, 40); ?>...
				</a>
			</div>
		</div>

		<div id="noticiacabezote">
			<div id="titulo-noticias"><a href="noticias.php">NOTICIAS</a></div>
		</div>
	</div>
</div>
