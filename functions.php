<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/nav-walker.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// EXCERPT LENGHT
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// DELETE COMMENTS BUTTON ON ADMIN
add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

// REMOVE POST FORMAT SUPPORT
add_action('after_setup_theme', 'remove_post_formats', 11);
function remove_post_formats() {
    remove_theme_support('post-formats');
}

function iproRenderProductos($post){
?>
		<div class="col-md-3 col-sm-6 col-xs-12 minpadtop">
			<div class="iproRenderProductos">
			<div class="textright strong minpadbottom"><?php $terms = get_the_term_list($post->ID,'categoria');  echo strip_tags( $terms );?></div>
				<?php if(has_post_thumbnail()): ?><img src="<?= the_post_thumbnail_url(); ?>"><?php endif; ?>
				<div class="iproProductoInner">
					<div class="medpadbottom medpadtop productTitle"><?php echo get_the_title(); ?></div>
					<div class="iproText"><?php echo get_the_excerpt(); ?></div>	
				</div>
			</div>
		</div>
<?php
} 

function iproRenderNoticias($post){
?>
		<div class="col-md-6 col-sm-6 col-xs-12 minpadtop">

			<!--<div style="float:right; color:#777;  padding-bottom:8px;"><?php echo get_the_date(); ?></div>-->
			
			<div class="iproRenderNoticias">
			
				<?php if(has_post_thumbnail($post->ID)): ?><img src="<?= the_post_thumbnail_url($post->ID); ?>"><?php endif; ?>
				<div class="iproProductoInner">
					<div class="medpadbottom medpadtop productTitle textcenter darkgrey" style="text-transform:uppercase;"><?php echo get_the_title($post->ID); ?></div>
					<div class="iproText color1"><?php if (has_excerpt( $post->ID )) echo get_the_excerpt($post->ID); ?><br />&nbsp;</div>
					<!--<div class="iproDown color1 strong">LEER MÁS ></div>-->
				</div>
			</div>
		</div>
<?php
}

function iproNoticias($categoria = 'destacadas', $excludePostId = ''){ ?>
	<!-- NOTICIAS -->
<div class="text-center bg1container">
	<?php
	
		wp_reset_query();
		$args = array(
			'post_type'             => 'post',
			'post_status'           => 'publish',
			'category_name'         => $categoria,
			'posts_per_page'        => '2',
			'post__not_in'			=> array($excludePostId),
			'cache_results' => false, // para mejorar rendimiento en dev o prod
			'update_post_term_cache' => false,
			'update_post_meta_cache' => false,
			'no_found_rows' => true, // para mejorar rendimiento si no existe paginacion
		);		
		$noticias = new WP_Query($args);
		
		while ( $noticias->have_posts() ) { 
			$noticias->the_post();
			iproRenderNoticias ($noticias);
		}
		
	?>
</div>
<!-- FIN NOTICIAS -->
<?php
}

function iproRenderForm1(){
?>
<!-- CONTACT FORM 1 -->
<div class="text-center bg1container iproForm">
	<?php echo do_shortcode('[contact-form-7 id="41" title="Form portada"]'); ?>
</div>
<!-- FIN FORM  -->

<?php }

function iproRenderForm1_es(){
?>
<!-- CONTACT FORM 1 -->
<div class="text-center bg1container iproForm">
	<?php echo do_shortcode('[contact-form-7 id="1017" title="Form portada_ES"]'); ?>
</div>
<!-- FIN FORM  -->

<?php }


function printTel(){
echo '<a class="white" href="tel:+34 93 822 82 50">93 822 82 50</a>';
}


// Allow shortcodes in Contact Form 7
function shortcodes_in_cf7( $form ) { 
	$form = do_shortcode( $form ); 
	return $form; 
} 
add_filter( 'wpcf7_form_elements', 'shortcodes_in_cf7' );

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

// Enqueue if !Home page
function iproLightSlider() {
      wp_enqueue_script( 'lightSlider', get_template_directory_uri() . '/dist/scripts/lightslider.min.js', array( 'jquery' ), null, false );
}
add_action( 'wp_enqueue_scripts', 'iproLightSlider' );