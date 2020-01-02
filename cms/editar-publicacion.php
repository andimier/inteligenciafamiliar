<?php
	require_once("includes/requeridos.php");
	
	$mensaje = "";
	$mensaje2 = "";
	$imagen = "";
	$mensajeimagen = "";
		
	if(intval($_GET['publicacion_id']) == 0){
		header("Location: content.php");	
		exit;
	}else{
		$id = $_GET['publicacion_id'];
		$grupo_imagenes = traer_imagenes_publicacion_por_id($id); 
	}
	
	require_once('edicion/cambioimagen1.php');
	require_once("edicion/actucont_publicacion.php");
	
	traer_publicacion_seleccionada(); 
	//S� esto se pone al inicio del documento, al actualizar no se ven los cambios, pero s� se hacen 
	
	//========== PARAMETROS FORMULARIO ACTUALIZACION DE CONTENIDOS =================//
	
	$tabla      = "publicaciones";
	$id        	= $publicacion_seleccionada['id'];
	$fecha     	= $publicacion_seleccionada['fecha'];
	$titulo    	= $publicacion_seleccionada['titulo']; 
	$contenido 	= $publicacion_seleccionada['contenido'];
	$ficha_tecnica = $publicacion_seleccionada['ficha_tecnica'];
	
	$imagenprincipal = $publicacion_seleccionada['imagen1'];
	
	$tituloboton = "Eliminar Publicacion";

	require_once("cabeza.php");

?>

<div class="col2">

	Editar Publicaci�n: <?php echo $publicacion_seleccionada['titulo'];?>
    <br /><br />
      
	<?php $archivo_eliminar = 'edicion/eliminarpublicacion.php'; ?>
	<?php echo $mensaje; ?>
	
    <?php require_once("edicion/formularioedicion1.php"); ?>
	<?php require_once("edicion/formularioeliminar1.php"); ?>
    <div class="etiquetagris"><a href="editar-ficha.php?publicacion_id=<?php echo $id; ?>">Editar Ficha T�cnica</a></div>
    <br />
    <!-- ============================= IMAGENES DE PUBLICACIONES ==========================-->
    
  	<?php require_once('edicion/imagenespublicaciones.php'); ?>
  
</div>
   
<div class="col3" >
    <!-- ======================== IMAGEN PRINCIPAL DE LA PUBLICACION =====================-->
	<?php require_once('edicion/imagenprincipal.php'); ?>
</div>
