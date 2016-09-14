<!-- HEADER TITLE -->
<?php // Preparo foto de cabecera
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$fullPhoto = $thumb['0']; 
?>
		<!-- VERSION PC HEAD-->
		<div class="width100 visible-md-block visible-lg-block hidden-sm hidden-xs">
			<div class="col-md-12 fullPhoto" style="background-color:#DFEEF3; background-image:url(<?php echo $fullPhoto; ?>);">
			  <?php  /* the_post_thumbnail( 'full' ); */  ?>
			  <div class="entry-title h2 rmfont textright medpad medpadtop"><?php the_title(); ?></div>
			  <div class="textright medpad minpadbottom" ><?php echo get_post_meta($post->ID, "wpcf-lead", true); ?></div>
			</div>
		</div>

		<!-- VERSION MOBILE HEAD-->		
		<div class="width100 visible-sm-block visible-xs-block hidden-md hidden-lg">
			<div class="entry-title h2 rmfont textcenter medpad minpadtop"><?php the_title(); ?></div>
			<div class="textcenter medpad minpadbottom" ><?php echo get_post_meta($post->ID, "wpcf-lead", true); ?></div>
			<div class="col-md-12 fullPhoto" style=background-image:url(<?php echo $fullPhoto; ?>);">
			</div>
		</div>
<!-- FIN HEADER TITLE -->