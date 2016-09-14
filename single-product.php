<?php get_template_part('templates/page', 'header'); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	
	while ( have_posts() ) : the_post(); ?>

	<?php /* Busco content-single-product dentro de woocomerce o plantilla.
	Guillermo se lo salta y va directo ...
	wc_get_template_part( 'content', 'single-product' ); */ ?>			


		<?php
			/**
			 * woocommerce_before_single_product hook.
			 *
			 * @hooked wc_print_notices - 10
			 */
			 do_action( 'woocommerce_before_single_product' );

			 if ( post_password_required() ) {
				echo get_the_password_form();
				return;
			 }
		?>

		<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="bg2container icsaproduct">
				<div class="col-md-6 col-xs-12">
					<div class="productTitle"><?php echo get_the_title(); ?></div>
					<div class="minpadtop iproText"><?php echo get_the_content(); ?></div>
				</div>
				<div class="col-md-6 col-xs-12 bgcolor2" style="padding:0px;">
					<?php if(has_post_thumbnail()): ?><img src="<?= the_post_thumbnail_url(); ?>"><?php endif; ?>
					<?php do_action( 'woocommerce_single_product_summary' );
								
					?>
				</div>	
			</div>
			
			<div class="bg1container icsaproduct">			
				<?php echo do_shortcode('[related_products per_page="8"]'); ?>
			</div>
			
			<meta itemprop="url" content="<?php the_permalink(); ?>" />

		</div><!-- #product-<?php the_ID(); ?> -->

<?php   if ((get_the_ID() == 36) || (get_the_ID() == 136)){ iproNewsletterCandidatos(); }else{ iproNewsletterEmpresa(); } ?>

		<?php do_action( 'woocommerce_after_single_product' ); ?>			
					
			
	<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		//do_action( 'woocommerce_after_main_content' );
	?>
