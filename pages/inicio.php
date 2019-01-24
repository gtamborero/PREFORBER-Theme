<?php
/**
 * Template Name: INICIO
 */

 if(ICL_LANGUAGE_CODE != 'es'){ 
		layerslider(1); 
	} else { 
		layerslider(3); 
	} 
?>

</div></div>
<div style="width:100%;">

	<?php if(ICL_LANGUAGE_CODE != 'es'){ ?>
	<a href="https://www.preforber.com/producte/vestidor-sanitari/">
		<picture>
		  <source media="(max-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/vestidor-sanitari-obligatori-movil.jpg">
		  <source media="(min-width: 801px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/vestidor-sanitari-obligatori.jpg">
		  <img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/dist/images/vestidor-sanitari-obligatori.jpg">
		</picture>
	</a>
	<?php } else { ?>
	<a href="https://www.preforber.com/es/producte/vestidor-sanitario/">
		<picture>
		  <source media="(max-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/vestidor-sanitario-obligatorio-movil.jpg">
		  <source media="(min-width: 801px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/vestidor-sanitario-obligatorio.jpg">
		  <img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/dist/images/vestidor-sanitario-obligatorio.jpg">
		</picture>
	</a>
	<?php } ?>	
	
</div>

<!-- PRODUCTOS -->
<a name="PRODUCTES"></a>
<div class="container text-center medpadtop maxpadbottom">
<div class="headTitle"><?php _e("PRODUCTES", "sage"); ?></div>
<div class="microLine"></div>

	<?php
		wp_reset_query();
		$args = array(
			'post_type'             => 'producte',
			'post_status'           => 'publish',
			'posts_per_page'        => '8',
			'cache_results' => false, // para mejorar rendimiento en dev o prod
			'update_post_term_cache' => false,
			'update_post_meta_cache' => false,
			'no_found_rows' => true, // para mejorar rendimiento si no existe paginacion
		);		
		$productos = new WP_Query($args);
		
		while ( $productos->have_posts() ) { 
			$productos->the_post();
			//var_dump ($productos->the_post());
			iproRenderProductos ($post);
		}
	?>
</div>
<!-- FIN PRODUCTOS -->

</div>

<div class="width100 bgcolorwhite ">
<a name="PROJECTES"></a>
	<div class="container medpadtop medpadbottom text-center bgcolorwhite">
	<div class="headTitle"><?php _e("PROJECTES", "sage"); ?></div>
	<div class="microLine"></div>
		<?php iproNoticias(); ?>
	</div>
</div>

<div class="width100" style="background-color:#f8f9fb;">
<a name="CONTACTE"></a>
	<div class="container minpadtop minpadbottom">
		<div class="col-md-6 col-sm-6 col-xs-12 minpadtop">
			<img src="<?= get_template_directory_uri(); ?>/dist/images/mapa-preforber-contacte.jpg">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 minpadtop textcenter">
			<div class="headTitle responsivecontacttop"><?php _e("CONTACTE", "sage"); ?></div>
			<div class="microLine"></div>
			<div class="color1 productTitle" style="width:70%; margin:5% 15%; padding:5%;  background-color:white; border:1px solid #2375a1; -webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;">
			Pol. Ind. Camp dels Pals s/n.<br />
			Bassacs, 08680 GIRONELLA
			</div>
		</div>	
	</div>
</div>	


<div class="width100 bgcolor1">
	<div style="text-transform:uppercase;" class="container minpadtop minpadbottom text-center white productTitle">
	<?php _e("SI NECESSITES MÉS INFORMACIÓ TRUCA'NS AL ", "sage"); ?> <strong><?php printTel(); ?></strong> <br />
	<?php _e("O completa", "sage");?> <strong><?php _e("EL SEGÜENT FORMULARI", "sage"); ?></strong>
	</div>
</div>

<div class="width100 bgcolorwhite minpadtop medpadbottom">
<div class="container minpadtop text-center bgcolorwhite">
	<?php 
	if(ICL_LANGUAGE_CODE != 'es'){
		iproRenderForm1(); 
	}else{
		iproRenderForm1_es();
	}
	?>
</div>
</div>
<?php wp_footer(); 

	