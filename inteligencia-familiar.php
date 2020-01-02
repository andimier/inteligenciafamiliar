<?php require_once("qs/q_inteligencia.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta name="description" content="Proyecto orientado a desarrollar y poner en práctica estrategias efectivas para fortalecer la familia haciendo uso de la inteligencia emocional. Se fundamenta en cinco claves: Afecto, Padres seguros, disciplina positiva, inteligencia emocional, vida en pareja. ">
	<!--<meta name="keywords" content="HTML,CSS,XML,JavaScript">-->
	<meta name="author" content="Maria Elena Lopez Jordan">

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Inteligencia Familiar</title>
	<?php require_once('requeridos.php');?>


	</head>
<body>
	<?php include_once('analyticstracking.php');?>
	<?php require_once('cabezote.php');?>


    <div class="cnt-gris">
		<h1>INTELIGENCIA FAMILIAR</h1>
	
    </div>
	
	<div id="cnt-ttclaves">
		
		<h1>Las 5 Claves de la Inteligencia Familiar</h1>
       
    </div>
    <div id="etqa_ganancias">+ Ganancias de la Inteligencia Familiar</div>
    
    <!--<div class="contenedor">
    	<div class="contenidos"> 
        	<div class="contenedorcontenidos">
            	<br />      
            	<div class="textoint"><? echo $contenidos[0]; ?></div>
                <div class="vacio"><br /></div>
        	</div>
     	</div>
	</div>-->
    
     <!-- ===================================== GANANCIAS ===================================-->
     
    
	
 
    
    <div id="cnt_ganancias">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
            	<div class="titulosminusculasgrises">
                	<div class="separadorcolgajos"></div>
                    <div class="separadorcolgajos"></div>
                    <?php echo $contenidos[1]; ?><br />
                </div>
        	</div><!-- cierre contenedorcontenidos -->
         </div>
    </div>
    
    
    <!-- ===================================== LAS CINCO CLAVES ===================================-->
    <div id="cnt-claves">

		<!--<div class="titulosblancosgrandes">
			las 5 <?php echo substr($titulos[2],9,100); ?>
		</div>-
		
		<h2>las 5 <?php echo substr($titulos[2],9,100); ?></h2>
		-->

    </div>

	 <div class="contenedor"> 
    	<div class="contenidos"> 
        	<div class="contenedorcontenidos"> 
            	
                <?php require_once('cuerpos/cuerpointeligencia1.php'); ?>
                
            	<div class="vacio"><br /></div>
          	</div><!-- cierre contenedorcontenidos -->
      	</div>
    </div>
          
          
   <div class="contenedor"> 
    	<div class="contenidos"> 
        	<div class="contenedorcontenidos">
             
            	<div class="separadorcolgajos"></div>
                <div class="separadorcolgajos"></div>
                <div class="separadorcolgajos"></div>
                
                <?php require_once('cuerpos/cuerpointeligencia2.php'); ?>
                
            	<div class="vacio"></div>
          	</div><!-- cierre contenedorcontenidos -->
      	</div>
    </div>
    
    
    
    
    <!-- ===================================== ILUSTRACION ===================================-->
    <div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div id="grafico"></div>
            </div><!-- cierre contenedorcontenidos -->
        </div>
    </div>
    
    <?php require_once('footer.php'); ?>

</body>
</html>