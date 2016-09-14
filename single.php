<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

		<div class="text-center bg2container">
			<div class="medpad col-md-12">
			<?php catNoticias(); ?>

			  <div class="headTitle textleft"><?php the_title(); ?></div>
			  <div class="textleft grey minpadbottom" style="margin-top:-1.7%;"><?= get_the_date(); ?></div>
			  
			  
			  <div class="col-md-12 col-xs-12 textleft">
			  <?php 
				  if (has_post_thumbnail()) { 
					echo '<img class="imgnoticia" src="' . get_site_url();
					echo the_post_thumbnail_url() . '" />'; 
				  } 
				?>
				<div class="minpadbottom strong medline" style="text-transform:uppercase;"><?= get_post_meta($post->ID, 'wpcf-lead', true); ?></div>
				<div class="darkgrey" ><?php the_content(); ?></div>
			  </div>
			</div>
		</div>
		
    <?php /* comments_template('/templates/comments.php'); */ ?>
	
	<?php iproInformes(); ?>
	
	<div class="text-center bg0container"><div class="headTitle textleft grey" style="margin-bottom:0%;">NOTICIAS RELACIONADAS</div></div>
	<?php 
	/* Cojo la categoria de la noticia y la paso a noticias relacionadas */
	$categorias = get_the_category($post->ID);
	iproNoticias($categorias[0]->slug, $post->ID); ?>
	
  </article>
<?php endwhile; ?>


