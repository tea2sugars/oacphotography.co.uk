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
<link href="http://demos.rizecorp.net/photography/favicon.ico" rel="shortcut icon" type="image/x-icon"> 
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
<script>

jQuery(function(){   
 jQuery('#toTop').css('display','none');
jQuery(window).scroll(function() { 
    if (jQuery(this).scrollTop()) { 
        jQuery('#toTop').css('display','block')
    } else {
        jQuery('#toTop').css('display','none')
    }
});    

jQuery("#toTop").click(function() { //alert('kkkk');
    jQuery("html, body").animate({scrollTop: 0}, 1000);
 });
if(jQuery(".images_pan").height() <= '700'){ 
jQuery(".faq_pan").css("min-height",jQuery(".images_pan").height());    
jQuery(".about_pan").css("min-height",jQuery(".images_pan").height());  
jQuery(".prs_blg").css("min-height",jQuery(".images_pan").height());  
jQuery(".how_we_work").css("min-height",jQuery(".images_pan").height());
jQuery(".amigos").css("min-height",jQuery(".images_pan").height());  
jQuery(".price_pan").css("min-height",jQuery(".images_pan").height());
}else{
jQuery(".about_pan").css("min-height",jQuery(".images_pan").height()-parseInt(900)); 
}
 })
</script>

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

            });
        </script>


<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.js"></script>
  <script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery.nav.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery_003.js"></script>
  
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


    </head>

    <body <?php //body_class(); ?>>
       <section class="row wrapp">
<!-- SOF OF HEADER -->
<header>
<div class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo_bg.png" alt=""> <div class="logo_inner" style="height: 300px; margin-top: -3px; display: block;"><span class="logo_heading" style="margin-top:90px;"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo"/></span></div> </div>
<div class="names" style="display:none" id="welcomeDiv">images</div>


     <div class="six column nav_left">
         <div class="" style="float:left;width:500px;margin-bottom: 10px;margin-top: 5px;">
             <?php wp_nav_menu(array('theme_location' => 'home_Left_navigation', 'menu' => 'home_Left_navigation')); ?>
         </div>
<!--     <p><a href="#" onclick="javascript: showdiv(0);">Home</a>
     </p>                       -->
         <div class="" style="float:left;">
         <?php wp_nav_menu(array('theme_location' => 'Left_navigation', 'menu' => 'Left_navigation')); ?>
         </div>

     </div>
     <div class="six column nav_right">
     
      <div class="" style="float:right;width:500px;margin-bottom: 10px;margin-top: 5px;">
             <?php wp_nav_menu(array('theme_location' => 'home_Right_navigation', 'menu' => 'home_Right_navigation')); ?>
         </div>
<!--     <p><a href="#other-work" onclick="javascript: showdiv(8);">Other work</a></p>-->
         <div class="">
                        <?php wp_nav_menu(array('theme_location' => 'Right_navigation', 'menu' => 'Right_navigation')); ?>
         </div>

     
     </div>
</header>
