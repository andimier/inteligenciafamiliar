<?php require_once('banner.php'); ?>

<div id="colgajoprincipal">
    <div id="cuerpocolgajo">
        <a href="noticias.php"><img id="banner" src="cms/<?php echo $nbanner1; ?>" width="300" /></a>
    </div>
    <div id="textocolgajoprincipal"><?php echo substr($nbanner2, 0, 35); ?></div>
</div>

<div class="datosbanner">
    <div class="item">
        <div class="imagen" >
            <a href="articulo.php?articulo=<?php echo $artbanner0; ?>&contenido=<?php echo $artbanner3 ?>" ><img id="imagen" src="cms/<?php echo $artbanner1; ?>"/></a>
        </div>
        <div class="caption"><?php echo substr($artbanner2, 0, 35); ?>...</div>
    </div>

    <div class="item">
        <div class="imagen" >
            <a href="publicacion.php?publicacion=<?php echo $publibanner0; ?>&fecha=<?php echo $publibanner3; ?>">
            <img id="imagen" src="cms/<?php echo $publibanner1; ?>"/>
            </a>
        </div>
        <div class="caption"><?php echo substr($publibanner2, 0,35); ?>...</div>
    </div>

    <div class="item">
        <div class="imagen" >
            <a href="noticia.php?noticia=<?php echo $nbanner0; ?>"><img id="imagen" src="cms/<?php echo $nbanner1; ?>"/></a>
        </div>
        <div class="caption"><?php echo substr($nbanner2, 0, 35); ?></div>
    </div>
</div>