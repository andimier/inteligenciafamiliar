<?php
require_once("includes/connection.php");
$mensaje = "";
//afecto ID = 9
//padres seguros ID = 10
//disciplina positiva ID = 11
//inteligencia emocional ID = 12
$id_contenido = 12;

require_once('qs/q-noticias.php');


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $noti_titulo[0] ;?> - Noticias - Inteligencia Familiar</title>
<?php require_once('requeridos.php');?>
</head>

<body>
	<?php include_once('analyticstracking.php');?>
	<?php require_once('cabezote.php');?>
    <?php require_once('cuerpos/cuerponoticias.php');?>
    <?php require_once('cuerpos/masnoticias.php');?>
    
    
</body>
</html>