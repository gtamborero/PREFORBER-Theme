<div class="iproSidebar col-md-4">
<div class="iproTitle underline maxspacebottom"><strong><?php echo $ancestorTitle; ?></strong></div>
<?php
	
	//el array es cero pinto el $post->ID, sino el que me devuelva el resultado (que es lo mismo)
	if ( is_page() && $post->post_parent )
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $parentId . '&echo=0' );
	else
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	if ( $childpages ) {
		$string = '<ul>' . $childpages . '</ul>';
	}
	echo $string;
?>

<div class="iproLinks">
<?php 
	// LOOP DE ENLACES
	$titulos = get_post_meta( $post->ID, 'wpcf-titulo-del-enlace-de-descarga', false); 
	$enlaces = get_post_meta( $post->ID, 'wpcf-enlace-de-descarga', false);
	foreach ($titulos as $key=>$titulo){
		if ($titulo != ''){
		echo '<a href="' . $enlaces[$key] . '"><div class="download"><img src="' . get_template_directory_uri() . '/dist/images/pdf.png" />' . $titulo . '</div></a>';	
		}
	}
?>
</div>
<?php if (get_post_meta( $post->ID, 'wpcf-texto-del-sidebar', true) != ''){ ?>
<a class="text-center" href="<?php echo get_post_meta( $post->ID, 'wpcf-enlace-del-texto-sidebar', true); ?>"><div class="button sidebar"><?php echo get_post_meta( $post->ID, 'wpcf-texto-del-sidebar', true); ?></div></a>
<?php } ?>
</div>