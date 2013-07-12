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
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/smoothness.css">
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
    </head>

    <body <?php body_class(); ?>>
        <script>
            jQuery(function() {
                var pull 		= jQuery('#pull');
                menu 		= jQuery('nav ul');
                menuHeight	= menu.height();

                jQuery(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });

                jQuery(window).resize(function(){
                    var w = jQuery(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
             
            });
        </script>
<script type="text/javascript" charset="utf-8" src="http://demos.rizecorp.net/photography/js/jquery.scrollTo.js"></script>
  <script type="text/javascript" charset="utf-8" src="http://demos.rizecorp.net/photography/js/jquery.nav.js"></script>
        <script>
            jQuery(document).ready(function(){
                i =1;
                jQuery('.menu').addClass('topnav');
                jQuery('.menu li').each(function(){
                    var tit= '#'+jQuery(this).find('a').attr('title');
                    jQuery(this).find('a').attr('rel',i);
                    var tit1=jQuery(this).find('a').attr('title');
                    if(tit == '#undefined'){
                        jQuery(this).find('a').attr('href','#');
                    }else{
                        jQuery(this).find('a').attr('href','javascript:void(0);');
                        jQuery(this).find('a').addClass(tit1);
                    }
                    i++;
                });
                jQuery('.topnav li a').click(function(){
                    var t=setTimeout(function(){
							     jQuery('.logo_inner').slideToggle('slow', function() {
// Animation complete.
setTimeout(function(){
					
	
	if(jQuery(this).attr('rel') == 2)
	{
		jQuery(".logo_heading").html('blog');
		 jQuery('.logo_inner').slideToggle('slow', function() {});	
	}
							  
						  
							  
	 },100);
});
							  
							  
							  
 },100);
	
                });
            });
        </script>
	
      <section class="row wrapp">
            <!-- SOF OF HEADER -->
            <header>
                <div class="six column nav_left">
                    <p>
                        <!--<ul>
                          <li><a href="#images_page">Images</a></li>
                          <li><a href="#faqs">Faqs</a></li>
                          <li><a href="#price">Price</a></li>
                          <li><a href="#blog">Blog</a></li>
                        </ul>-->
                        <?php wp_nav_menu(array('theme_location' => 'Left_navigation', 'menu' => 'Left_navigation')); ?>
                </div>
                <div class="six column nav_right">


                    <p>
                        <!--<ul>
                          <li><a href="#">About</a></li>
                          <li><a href="#amigo_s">Amigos</a></li>
                          <li><a href="#">Contact</a></li>
                        </ul>-->
                        <?php wp_nav_menu(array('theme_location' => 'Right_navigation', 'menu' => 'Right_navigation')); ?>

                </div>
            </header>
            <!--<div class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="O&amp;C Photography" /></div>-->

            <!-- EOF OF HEADER --> 

            <div class="logo_inner"><span style="margin-top:90px;" class="logo_heading"></span></div>

            <!-- SOF of BANNER -->
