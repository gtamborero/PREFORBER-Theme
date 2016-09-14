<?php
/**
 * Template Name: PRODUCTO
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

		<div class="width100">
			<div class="col-md-12">
			  <div class="entry-title h1 rmfont" style="position:absolute; right:40px; top:30px;" ><?php the_title(); ?></div>
			  <div class="textcenter" style="position:absolute; right:80px; top:105px; width:220px;"><?php echo get_post_meta($post->ID, "wpcf-lead", true); ?></div>
			  <?php the_post_thumbnail( 'full' ); ?>
			</div>
		</div>
	
	<div class="medpad minpadtop minpadbottom col-md-12 clearboth">
		<div class="entry-content textjustify">
		  <?php the_content(); ?>
		  <div class="darkgreen textcenter minpadtop medline rmfont" ><?php echo get_post_meta($post->ID, "wpcf-frase-de-cierre", true); ?></div>
		</div>
	</div>

  </article>
<?php endwhile; ?>

<?php if ( is_page(15) || is_page(18) || is_page(20) || is_page(21) ){ ?>

<!-- spacer -->
<div class="bglightgrey width90 floatleft minspacetop minspacebottom" style="height:1px; margin-left:5%;"></div>

<!-- TESTIMONIOS -->
<div class="testimonio text-left">
<?php 

	/* CADA TESTIMONIO VA DENTRO DE SU PRODUCTO */
	if ($post->ID == 15) $cat_testimonio = 'hipoteca-inversa';
	if ($post->ID == 18) $cat_testimonio = 'dinero-efectivo';
	if ($post->ID == 20) $cat_testimonio = 'renta-mensual';
	if ($post->ID == 21) $cat_testimonio = 'cancelar-deuda';

	wp_reset_query();
	query_posts(array('showposts' => 5, 'post_type' => 'testimonio', 'categoria-testimonio' => $cat_testimonio)); 
	while (have_posts()) { 
		the_post(); ?>
		<div class="medpad minpadtop minpadbottom width100 ">
			<div class="col-md-2">
				<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('thumbnail');
				} 
				?>
			</div>
			<div class="col-md-10">
				<div class="rmfont minpadtop minpadleft">El testimonio de <span class="colored"><?php the_title(); ?></span></div>
				<div class=" maxpadbottom minpadleft"><?php echo the_content(); ?></div>
			</div>
			
		</div>
	<?php 	
	} 
	?>
</div>
<?php } ?>
<!-- FIN TESTIMONIO -->

    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php /* comments_template('/templates/comments.php'); */ ?>