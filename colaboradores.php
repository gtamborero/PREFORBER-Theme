<?php
/**
 * Template Name: COLABORADORES
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div class="medpad minpadtop minpadbottom col-md-12">
	<div class="entry-content textjustify">
		 <?php the_content(); ?>
	</div>
</div>

<?php endwhile; ?>