<?php
  // For use with Sagextras (https://github.com/storm2k/sagextras)
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVJDZ2T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  
	<div style="background-color:#2375a1; color:#fff; padding:6px;" >
		<div class="container">
			<div class="headbutton2 floatright white" style="margin-right:30px;">
			T. <?php printTel(); ?>
			</div>
		</div>
	</div> 
	<div class="width100">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a href="<?= esc_url(home_url('/')); ?>"><img id="preforberlogo" src="<?= get_template_directory_uri(); 
		?>/dist/images/preforber.png"></a>
			</div>

			<nav class="collapse navbar-collapse navbar-right" role="navigation">

			  <?php
			  if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
			  endif;
			  ?>
			</nav>
		</div>
	</div>	
		
</header>