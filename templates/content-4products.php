<!-- PRODUCTOS -->
<div class="producto text-center">
<?php 
	$contador =1;
	query_posts(array('showposts' => 4, 'post_parent' => 24, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC')); 
	while (have_posts()) { 
		the_post(); ?>
		<div class="medpad medpadtop minpadbottom col-md-3 col-xs-6 bgcolor<?php echo $contador; ?>">
			<div class="medpadbottom rmfont"><?php the_title(); ?></div>
			<div class="small maxpadbottom"><?php echo get_post_meta($post->ID, "wpcf-lead", true); ?></div>
			<a href="<?php the_permalink(); ?>"><div class="rmbutton<?php echo $contador; ?> small medspacebottom"><?php echo get_post_meta($post->ID, "wpcf-texto-boton-portada", true); ?></div></a>
		</div>
	<?php 	

	$contador++;
	}  
	?>
</div>
<!-- FIN PRODUCTOS -->