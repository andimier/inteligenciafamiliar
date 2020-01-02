<?php 
require_once("includes/sesion.php");
require_once("includes/connection.php");
require_once("includes/functions.php");
encontrar_seccion_y_contenido_seleccionados();
require_once("editor.php");

$mensaje = "";

if(isset($_POST['insertarnoticia'])){
	$titulo = $_POST['titulo'];
	
	$errores = array();
	$required_fields = array('titulo');
	$imagenprovisional = "imagenes/pequenas/camara_01.png";
	
	foreach($required_fields as $fieldname){
		if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])  && !is_numeric($_POST[$fieldname]))){
			$errores[] = $fieldname;	
		}
	}
	
	if(empty($errores)){
		$query = "INSERT INTO noticias (titulo, imagen1, imagen2, imagen3) VALUES ('$titulo', '$imagenprovisional', '$imagenprovisional', '$imagenprovisional')";
		if($result = mysql_query($query, $connection)){
			$mensaje = "La publicacion se ha creado correctamente";	
		}
	}else{
			$mensaje = "Debes ingresar un titulo!!";
		}
	
}
	
require_once("cabeza.php");?>    

<div class="col2">
	<h3>Noticias</h3>
	
	Has click sobre el titulo del contenido para editarlo <br />
	
    <div class="mensaje" style="color:#F00"> <?php echo $mensaje; ?></div>
    <br />
   
	<?php
	$grupo_noticias = todas_las_noticias();
	
	
    while($not = mysql_fetch_array($grupo_noticias)){
		echo "<a href=\"editar-noticia.php?noticia_id=" . urlencode($not["id"]) . "\">{$not["fecha"]} &nbsp;&nbsp; {$not["titulo"]}</a><br /><br />";
	}
	?>
   
    <hr />
    <h3>Insertar nueva Publicacion</h3>
    Titluo:
    <form enctype="multipart/form-data" method="post">
        <input type="hidden" name="tabla"   value="imagenes_publicaciones" />
        <input type="text"   name="titulo"  value="" size="50" maxlength="50" />
        <input type="submit" name="insertarnoticia" value="Insertar Noticia"/>
  	</form>

</div>


</div>
<?php require("includes/footer.php");?>
