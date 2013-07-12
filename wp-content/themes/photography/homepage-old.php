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

		<section class="banner">
    <!--<div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left" /></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right" /></a></div>
    <img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt="banner" />-->
    <?php echo do_shortcode( '[responsive_slider]' ); ?>

</section>

<section class="banner_iphone">
    <div class="logo_iphone"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="O&amp;C Photography" /></div>
    <div class="ip_left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left" /></a></div>
    <div class="ip_right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right" /></a></div>
    <img src="<?php bloginfo('template_url'); ?>/images/img2.jpg" alt="banner" />
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
<li><a href="#blog">Blog</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#amigo_s">Amigos</a></li>
<li><a href="#other-work">Other work</a></li>

</ul>
</nav>

<!--iphone nav-->


 
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="images_page">
<!--<div class="logo_inner">images</div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of IMAGES PAN -->
<section class="images_pan">
   <!--<ul>
     <!-- <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt="image" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img4.jpg" alt="image" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img5.jpg" alt="image" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt="image" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img4.jpg" alt="image" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img5.jpg" alt="image" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt="image" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img4.jpg" alt="image" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img5.jpg" alt="image" /></a></li>

   </ul>-->
<?php echo do_shortcode('[nggallery id=1]');?>
</section>

<!-- EOF of IMAGES PAN -->
<div class="clear"></div>

<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="faqs">
<!--    <div class="logo_inner"></div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of FAQ PAN -->
<section class="faq_pan">

    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left" /></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right" /></a></div>
    
   <div class="six column faq_pan_left">
       <ul>
     <?php
$args = array('post_type' => 'custom_faqs');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>
<li><a href="#"><?php the_title();?></a>
<p><?php echo $data['answer'][0];?></p>
</li> 
<?php endwhile;     ?>
</ul>
   </div>
</section>
<!-- EOF of FAQ PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="she_and_him">
<!--    <div class="logo_inner">SHE AND HIM</div>-->
</article>-
<!-- EOF of NAV BORDER PAN -->

<!-- SOF OF ABOUT PAN -->
<?php 
?>
<style type="text/css">
/* popup_box DIV-Styles*/
#popup_box { 
	display:none; /* Hide the DIV */
	position:fixed;  
	_position:absolute; /* hack for internet explorer 6 */  
	/*height:300px;  */
	width:600px;  
	background:#FFFFFF;  
	left: 300px;
	top: 150px;
	z-index:99999; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
	margin-left: 15px;  
	
	/* additional features, can be omitted */
	border:2px solid #ff0000;  	
	padding:15px;  
	font-size:15px;  
	-moz-box-shadow: 0 0 5px #ff0000;
	-webkit-box-shadow: 0 0 5px #ff0000;
	box-shadow: 0 0 5px #ff0000;
	
}

#container {
	background: #d2d2d2; /*Sample*/
	width:100%;
	height:100%;
}

a{  
cursor: pointer;  
text-decoration:none;  
} 

/* This is for the positioning of the Close Link */
#popupBoxClose {
	font-size:20px;  
	line-height:15px;  
	right:5px;  
	top:5px;  
	position:absolute;  
	color:#6fa5e2;  
	font-weight:500;  	
}
</style>
<script type="text/javascript">
	
	jQuery(document).ready( function() {
	
		// When site loaded, load the Popupbox First
		//loadPopupBox();
	
		
		
		jQuery('#container').click( function() {
			unloadPopupBox();
		});

			
		
		function loadPopupBox() {	// To Load the Popupbox
			jQuery('#popup_box').fadeIn("slow");
			jQuery("#container").css({ // this is just for style
				"opacity": "0.3"  
			}); 		
		}
		/**********************************************************/
		
	});
</script>		
<script>
jQuery(document).ready(function(){
var path = '<?php echo site_url() ?>';
ajaxurl= path+'/wp-admin/admin-ajax.php';
	var data = {		
                action: 'get_about_pages',
                id :26	
                               
	};
	// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
jQuery.post(ajaxurl, data, function(response) {
jQuery('.about_pan').html(response);
jQuery('#inline_content').html(response);
});
});
</script>
<div id="popup_box">	<!-- OUR PopupBox DIV-->
	<div id="desc"></div>
	<a id="popupBoxClose">Close</a>	
</div>

<section class="about_pan" id="about">  
      
</section>

<!-- EOF OF ABOUT PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border">
<!--    <div class="logo_inner" id="blog">Press & blog features</div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of PRESS&BLOG PAN -->
<section class="prs_blg">

    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left" /></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right" /></a></div>
    
  <img src="<?php bloginfo('template_url'); ?>/images/img8.jpg" alt="" /> 
</section>
<!-- EOF of PRESS&BLOG PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="how-we-work">
<!--    <div class="logo_inner">How we work</div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of HOW WE WORK PAN -->
<section class="how_we_work">

    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left" /></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right" /></a></div>
    
</section>
<!-- EOF of HOW WE WORK PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="price">
<!--    <div class="logo_inner">Price</div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of PRICE PAN -->
<section class="price">

    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left" /></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right" /></a></div>
    
</section>
<!-- EOF of price PAN -->

<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="amigo_s">
<!--    <div class="logo_inner">Amigos</div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of Amigos PAN -->
<section class="amigos">

    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left" /></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right" /></a></div>
    
</section>
<!-- EOF of Amigos PAN -->

<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="other-work">
<!--    <div class="logo_inner">Other Work</div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of Other Work PAN -->
<section class="other_work">
    
    <div class="six column other_work_inner">
    <h4>Corporate</h4>
    <?php echo do_shortcode('[nggallery id=4]');?>
    </div>
    <div class="six column other_work_inner">
     <h4>Portrait</h4>
    <?php echo do_shortcode('[nggallery id=3]');?>
    </div>
    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left" /></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right" /></a></div>
</section>
<!-- EOF of Other Work PAN -->
<article class="nav_border" id="contact">
<!--    <div class="logo_inner">Contact</div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of Other Work PAN -->
<section class="other_work">    
    <?php echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]');?>
</section>



</section>

<?php get_footer(); ?>
