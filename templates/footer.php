	<div class="width100" style="background-color:#f8f9fb;">
		<div class="container prefooter darkgrey textcenter minpadtop medpadbottom">
			<div style="margin:0% 6%;">
				<div class="col-sm-3 col-xs-6">
				<img id="footerlogo" src="<?= get_template_directory_uri(); ?>/dist/images/certificats-homologacions.png">
				<div class="productTitle strong">CERTIFICATS</div>
				<!--<div class="iproText">Lorem ipsim Lorem ipsim Lorem ipsim Lorem ipsim </div>-->
				</div>
				<div class="col-sm-3 col-xs-6">
				<img id="footerlogo" src="<?= get_template_directory_uri(); ?>/dist/images/qualitat-prefabricados-hormigon.png">
				<div class="productTitle strong">QUALITAT</div>
				
				</div>
				<div class="col-sm-3 col-xs-6">
				<img id="footerlogo" src="<?= get_template_directory_uri(); ?>/dist/images/profesionalitat-formigo.png">
				<div class="productTitle strong">PROFESIONALITAT</div>
			
				</div>
				<div class="col-sm-3 col-xs-6">
				<img id="footerlogo" src="<?= get_template_directory_uri(); ?>/dist/images/compromis-bergueda.png">
				<div class="productTitle strong">COMPROMÍS</div>
				
				</div>
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->
	<a name="contacto"></a>
	<div class="width100 bgcolor1">
		<div class="container white ">
			<div class="col-sm-4 col-xs-12 responsivefootheight">
			&copy; Copyright 2016
			</div>
			<div class="col-sm-4 col-xs-12 text-center minpadtop" style="padding-bottom:1%;>
				<a href="<?= esc_url(home_url('/')); ?>">
					<img id="preforberlogo" src="<?= get_template_directory_uri(); ?>/dist/images/preforber-white.png">
				</a>
			</div>	
			<div class="col-sm-4 col-xs-12 textright responsivefootheight">
			<a href="/politica-cookies" class="white">Política de Cookies</a> &nbsp; <a href="/politica-privacitat" class="white">Avis Legal</a>
			</div>		
		</div>
	</div>

<script type='text/javascript' src='<?= get_template_directory_uri(); ?>/dist/scripts/grids.js'></script>

<script>
// COOKIES JQUERY
// VARIABLES
linkPoliticaCookies = "<?php echo get_site_url(); ?>/politica-cookies";
colorBoton = "#fff"
fondoBoton = "#2375a1";
fondoOverBoton = "#4395C1";
colorCookies = "#2375a1";
colorOverCookies = "#4395C1";

// COOKIES PREPARE
jQuery( document ).ready(function() {

	//eq heights
	var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
	if (!isSafari){
	jQuery('.iproRenderProductos').responsiveEqualHeightGrid();
	//jQuery('.iproRenderNoticias').responsiveEqualHeightGrid();
	}
	
	
    //MOSTRAR UNA SOLA VEZ
    function getCookieData( name ) {
        var pairs = document.cookie.split("; "),
            count = pairs.length, parts;
        while ( count-- ) {
            parts = pairs[count].split("=");
            if ( parts[0] === name )
                return parts[1];
        }
        return false;
    }
	
    var lacookie = getCookieData("lacookie");
    if ( lacookie == '') {

        //General CSS
        jQuery("body").prepend('<div id=cookieAlert></div>');
        jQuery("#cookieAlert").css("background-color", "#000");
        jQuery("#cookieAlert").css("color", "#eee");
        jQuery("#cookieAlert").css("text-align", "center");
        jQuery("#cookieAlert").css("padding", "15px");
		jQuery("#cookieAlert").css("line-height", "24px");

        // TEXTO
        jQuery("#cookieAlert").html("Utilizamos cookies propias y de terceros para mejorar nuestros servicios, mediante el análisis de su navegación por nuestro website. Si continua navegando, consideramos que acepta su uso. Puede cambiar la configuración u obtener más información <a id=cookies href="+ linkPoliticaCookies +">aquí</a>. &nbsp; <a id=acepto>Acepto</a> ");
    
        jQuery("#cookieAlert a").css("cursor", "pointer");

        jQuery("#cookieAlert #acepto").css("padding", "5px 9px");
        jQuery("#cookieAlert #acepto").css("background-color", fondoBoton);
		
        jQuery("#cookieAlert #acepto").mouseenter(function(){
            jQuery("#cookieAlert #acepto").css("background-color", fondoOverBoton);
        }).mouseleave(function(){
            jQuery("#cookieAlert #acepto").css("background-color", fondoBoton);
        });
        jQuery("#cookieAlert #acepto").css("color", colorBoton);
        jQuery("#cookieAlert #acepto").click(function(){
            jQuery("#cookieAlert").hide("fast");
            document.cookie = 'lacookie=1; path=/';
            //console.log(document.cookie);
        });

        // Link politica cookies
        jQuery("#cookieAlert #cookies").css("color", colorCookies);
        jQuery("#cookieAlert #cookies").mouseenter(function(){
        jQuery("#cookieAlert #cookies").css("color", colorOverCookies);
        }).mouseleave(function(){
        jQuery("#cookieAlert #cookies").css("color", colorCookies);
        });
    };
    
    jQuery('.wpcf7-submit').prop('title', 'Recuerde aceptar la política de cookies');
});
// COOKIES FIN

</script>