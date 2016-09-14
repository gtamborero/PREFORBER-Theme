<?php get_template_part('templates/page', 'header'); ?>


<!-- NOTICIAS -->
<div class="text-center bg2container">

	<?php
	catNoticias();
		//echo '<pre>' . var_export($posts, true) . '</pre>';
		foreach ( $posts as $post ) {   
			iproRenderNoticiasCat ($post);
		}
	?>
</div>
<!-- FIN NOTICIAS -->
<?php iproNewsletterEmpresa(); ?>
