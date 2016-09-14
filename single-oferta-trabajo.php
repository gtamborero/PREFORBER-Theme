<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

		<div class="text-center bg2container">
			<div class="medpad col-md-12">
			

			  <div class="headTitle textleft"><?php the_title(); ?></div>
			  <div class="textleft grey minpadbottom" style="margin-top:-1.7%;"><?= get_the_date(); ?></div>
			  
			  
			  <div class="col-md-12 col-xs-12 textleft">
			  <?php 
				  if (has_post_thumbnail()) { 
					echo '<img class="imgnoticia" src="' . get_site_url();
					echo the_post_thumbnail_url() . '" />'; 
				  } 
				?>
				<div class="strong medline" style="text-transform:uppercase;"><?= get_post_meta($post->ID, 'wpcf-lead', true); ?></div>
				<div class="darkgrey" ><?php the_content(); ?></div>
				<div class="minpadtop pull-right minpad minpadtop minpadbottom text-right bglightgrey" >Contacte con el consultor que gestiona esta oferta:<br /><a href="mailto:<?php echo get_post_meta($post->ID, "wpcf-correo-de-contacto", true); ?>"><strong><?php echo get_post_meta($post->ID, "wpcf-correo-de-contacto", true); ?></strong></a></div>
			  </div>
			</div>
		</div>
		
	<?php iproNewsletterCandidatos(); ?>
	
  </article>
<?php endwhile; ?>


