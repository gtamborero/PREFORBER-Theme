<?php get_template_part('templates/page', 'header'); ?>

<style>
.col2 {width:50%; float:left; padding:2%; box-sizing: border-box;}
@media (max-width:880px){
	.col2 {width:100%;}
}
strong { color: var(--color1) !important; }

.flickity-page-dots {
	position:relative !important;
	padding-top: 10px !important;
    float: left;
	bottom:0px;
}

.flickity-prev-next-button {
    width: 30px;
    height: 40px;
   border-radius: 0px;
}

.ipro-li ul {padding-inline-start: 0px; padding-top:8px;}

.ipro-li ul {
    list-style-type: none;
}

.ipro-li ul li::before {   
    content: '';   
    display: inline-block;   
    height: 16px;   
    width: 16px;    
    background-size: 16px;   
    background-image: url('https://www.preforber.com/wp-content/themes/sage-master/dist/images/check.png'); 
    background-repeat: no-repeat;   
    margin: 8px;
    background-position: center center;
    vertical-align: middle;
}

.ipro-li > div { padding:0px;}

</style>

	<div style="float:left; position:relative; width:100%; padding: 1%; box-sizing: border-box;">
		
		<div style="width:100%; float:left; padding:2%; box-sizing: border-box; ">
			<div class="headTitle text-center"><?php the_title(); ?></div>
			<div class="microLine"></div>
			<div class="text-center" style="font-size:24px; color:var(--color1); font-weight:bold; margin:20px 0 15px;"><?php echo nl2br( get_field("subtitol")); ?></div>
			<div class="text-center col-xs-12 col-md-8 col-md-offset-2" style="font-size:18px;"><?php echo nl2br( get_field("lead")); ?></div>
		</div>
		<div class="col2">
		<?php the_content(); ?>
		</div>
	 
		<div class="col2"> 
			<?php
			echo '<strong>Tamany:</strong> '; the_field("tamany");
			echo "<br><br>";
			echo '<strong>Preu:</strong> '; the_field("preu");
			echo "<br><br>";
			
			$file = get_field('pdf');
			if( $file ){ ?>
				<a target="_NEW" href="<?php echo $file['url']; ?>"><img src="<?php echo content_url(); ?>/themes/sage-master/dist/images/pdf-download.png" style="width:25px;"> <strong><?php echo nl2br( get_field("pdf-label")); ?></strong></a>
			<?php } ?><br><br>
			<?php echo nl2br( get_field("contenido")); ?><br>
			<strong><?php echo nl2br( get_field("label-addicional")); ?></strong><br>
			<div class="ipro-li" style="float:left; width:100%; font-size:14px;"><?php echo get_field("info-addicional"); ?></div><br>
		</div>
	</div>
	

</div></div>

<div class="width100 bgcolor1">
	<div style="text-transform:uppercase;" class="container minpadtop minpadbottom text-center white productTitle">
	<?php _e("SI NECESSITES MÉS INFORMACIÓ TRUCA'NS AL ", "sage"); ?> <strong><?php printTel(); ?></strong> <br />
	<?php _e("O completa", "sage");?> <span style="font-face:bold;"><?php _e("EL SEGÜENT FORMULARI", "sage"); ?></span>
	</div>
</div>

<div class="width100 bgcolorwhite minpadtop medpadbottom">
<div class="container minpadtop text-center bgcolorwhite">
	<?php 
	if(ICL_LANGUAGE_CODE != 'es'){
		iproRenderForm1(); 
	}else{
		iproRenderForm1_es();
	}
	?>
</div>
</div>
<?php wp_footer(); 