<?php 
/**
 * Template Name: Homepage Template
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * The showcase template in Twenty Eleven consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 *
 * We are creating two queries to fetch the proper posts and a custom widget for the sidebar.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

// Enqueue showcase script for the slider
wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/showcase.js', array( 'jquery' ), '2011-04-28' );

get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/chocolat.css">
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.chocolat.js"></script>
 <script type="text/javascript" charset="utf-8">
				jQuery(function() {	
					jQuery('.thumb').each(function(){					
					 id = jQuery(this).attr('id');
                     jQuery('#'+id).find('a').Chocolat({overlayColor:'#000',leftImg:'<?php bloginfo("template_url"); ?>/images/leftw.gif',rightImg:'<?php bloginfo("template_url"); ?>/images/rightw.gif',closeImg:'<?php bloginfo("template_url"); ?>/images/closew.gif',loadingImg:'<?php bloginfo("template_url"); ?>/images/loadingw.gif'});
					});
				});
</script>

		<!-- SOF of BANNER -->
 
<section class="banner" id="home">
<!--    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
    <img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt="banner">-->
        <?php echo do_shortcode( '[responsive_slider]' ); ?>

</section>

<section class="banner_iphone">
    <div class="logo_iphone"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="O&amp;C Photography"></div>
    <div class="ip_left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="ip_right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
     <?php echo do_shortcode( '[responsive_slider]' ); ?>
</section>

<!-- EOF of BANNER -->

<!--iphone nav-->
<nav>
	<a href="#" id="pull">navigation</a>
<ul>
<li><a href="#">Home</a></li>
<li><a href="#images_page">Images</a></li>
<li><a href="#faqs">Faqs</a></li>
<li><a href="#price">Price</a></li>
<li><a href="#blogs">Blog</a></li>
<li><a href="#">About</a></li>
<li><a href="#contact">Contact</a></li>
<li><a href="#other-work">Other work</a></li>
<li><a href="#amigo_s">Amigos</a></li>
</ul>
</nav>

<!--iphone nav-->

<div id="main_content">
 
<!-- SOF of NAV BORDER PAN -->

<!-- To change the order of the homepage simply change the order of below functions -->

<?php include('inc/images.php'); ?> <!--Images segment-->

<?php include('inc/faqs.php'); ?> <!--FAQ'S segment-->

<?php include('inc/about-us.php'); ?> <!--About-us segment-->

<?php include('inc/blogs.php'); ?> <!--Blog Articles segment-->

<?php include('inc/how-we-work.php'); ?> <!--How we work segment-->

<?php include('inc/price.php'); ?> <!--Price segment-->

<?php include('inc/amigos.php'); ?> <!--Amigos segment-->

<?php include('inc/other-work.php'); ?> <!--Other Work segment-->


 <article class="nav_border" id="contact">
 <!--<div class="celltitle"><h1>Contact</h1></div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of contact us form -->
<!--<section class="contact_form" id="contact">    
    <?php //echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]');?>
	<p>We would love to hear from you whether it is for an enquiry, a booking, a thank you or just a hello. Get in touch.</p>
	<p>email <a href="mailto:<?php echo get_option_tree( 'footer_email' );?>"><?php echo get_option_tree( 'footer_email' );?></a></p>
    <p>Phone <span>+44-<?php echo get_option_tree( 'footer_phone' );?></span></p>
	<p>Twitter <a href="<?php echo get_option_tree( 'owen_tweet' );?>">@owenwarrell</a>&nbsp;&nbsp;<a href="<?php echo get_option_tree( 'charis_tweet' );?>">@CharisWarrell</a>

</section>-->
<div style="position: fixed; bottom: 10px; right: 10px; color: #000; font-size: 28px;" id= "toTop"> <a href="#" style="font-family:'blanchcaps_inline';">Back to Top</a></div>
</div>


<!-- EOF OF WRAPPER -->

<script src='<?php bloginfo('template_url'); ?>/js/swipe.js'></script>
<script>
// pure JS
var elem = document.getElementById('mySwipe');
window.mySwipe = Swipe(elem, {
   startSlide: 1,
   continuous: false,
});

</script>
<script type="text/javascript">
jQuery(document).ready(function(){	
  jQuery('.topnav').onePageNav({
    currentClass: 'current',
	  scrollOffset: 0
  });
});
</script>

<?php get_footer('inner'); ?>
