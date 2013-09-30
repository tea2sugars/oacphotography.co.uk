<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->
    <head>

        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title>O&C Photography</title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head() ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css">
<link href="<?php bloginfo('template_url'); ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon"> 
<!--[if lt IE 9]>  
        <script>  
                document.createElement("header");  
                document.createElement("footer");  
                document.createElement("nav");  
                document.createElement("article");  
                document.createElement("section"); 
            document.createElement("aside"); 
        </script>  
        <![endif]-->
        
        <script src="<?php bloginfo('template_url'); ?>/js/jquery_004.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
          <script>
            jQuery(document).ready(function(){
                i =1;
                jQuery('.menu').addClass('topnav');
                jQuery('.menu li').each(function(){
                    var tit= '#'+jQuery(this).find('a').attr('title');
                    jQuery(this).find('a').attr('rel',i);
                    var tit1=jQuery(this).find('a').attr('title');
                 
                        jQuery(this).find('a').attr('href',tit);
                        jQuery(this).find('a').addClass(tit1);
                    
                    i++;
                });
                jQuery('.topnav li a').click(function(){
                     var t =jQuery(this).attr('rel');
if(t == 1){
var k ='<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo"/>';
}else{
var k =jQuery(this).html();
}
                    //var k =jQuery(this).html();
                    var t=setTimeout(function(){
							     jQuery('.logo_inner').slideToggle('slow', function() {
// Animation complete.
setTimeout(function(){
					
	
	//if(jQuery(this).attr('rel'))
	            
		jQuery(".logo_heading").html(k);
		 jQuery('.logo_inner').slideToggle('slow', function() {});	
	
							  
						  
							  
	 },100);
});
							  
							  
							  
 },100);
	
                });
            });
        </script>


<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.js"></script>
  <script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery.nav.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery_003.js"></script>
  <script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery_002.js"></script>
  <script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
  
  
 <script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery.mousewheel.js"></script>
  <script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery.jscrollpane.min.js"></script>

<!--  <script type="text/javascript">
 
	$(document).ready(function(){
	
	$x = $(window).width();
	if($x <= 1024)
	{ 
            $("#main_content").css({position: 'relative'});
			$("#home,#images_page,#about,#faqs,#blog,#price,#amigo_s,#contact").html();
			     }
				 
					
				 				 
   	
	})	
	
  </script>-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/chocolat.css">
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.chocolat.js"></script>
 <script type="text/javascript" charset="utf-8">
				jQuery(function() {	
					jQuery('.thumb').each(function(){					
					 id = jQuery(this).attr('id');
                     jQuery('#'+id).find('a').Chocolat({overlayColor:'#000',leftImg:'<?php bloginfo("template_url"); ?>/images/cor-left-arrow.jpg',rightImg:'<?php bloginfo("template_url"); ?>/images/cor-right-arrow.jpg',closeImg:'<?php bloginfo("template_url"); ?>/images/cor-close-icon.png',loadingImg:'<?php bloginfo("template_url"); ?>/images/loadingw.gif'});
					});
				});
</script>	


    </head>

    <body <?php //body_class(); ?>>
       <section class="row wrapp">
<!-- SOF OF HEADER -->
<header>
<div class="back_home"><span><img src="<?php bloginfo("template_url"); ?>/images/17.gif"></span><a href="<?php echo get_bloginfo('url');?>">Back to Home</a></div>
<div class="logo">
<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_bg.png" alt=""> 
<div class="logo_inner" style="height: 300px; margin-top: -3px; display: block;"><span class="logo_heading" style="margin-top:90px;"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo"/></span>
</div></a>
</div>
<div class="names" style="display:none" id="welcomeDiv">images</div>

<div class="corporate-inner"> </div>
    
     
</header>
