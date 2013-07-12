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
<script>
jQuery(document).ready(function(){

jQuery(window).scroll(function(){	

if( jQuery(document).scrollTop() < jQuery('.images_pan').position().top) {    
 jQuery(".logo_heading").html('<img src="<?php bloginfo("template_url"); ?>/images/logo.png" class="img_home" alt="" />');
}

if( jQuery(document).scrollTop() > jQuery('.images_pan').position().top) {

 jQuery(".logo_heading").html('images');
}

if( jQuery(document).scrollTop() > jQuery('.faq_pan').position().top) {    
 jQuery(".logo_heading").html('Faqs');
}

if( jQuery(document).scrollTop() > jQuery('.about_pan').position().top) {    
 jQuery(".logo_heading").html('About');
}

if( jQuery(document).scrollTop() > jQuery('.prs_blg').position().top) {    
 jQuery(".logo_heading").html('blog');
}

if( jQuery(document).scrollTop() > jQuery('.how_we_work').position().top) {    
 jQuery(".logo_heading").html('How we work');
}

if( jQuery(document).scrollTop() > jQuery('.price_pan').position().top) {    
 jQuery(".logo_heading").html('Price');
}

if( jQuery(document).scrollTop() > jQuery('.amigos').position().top) {    
 jQuery(".logo_heading").html('Amigos');
}

if( jQuery(document).scrollTop() > jQuery('.amigos').position().top) {    
 jQuery(".logo_heading").html('Amigos');
}


if( jQuery(document).scrollTop() > jQuery('.other_work').position().top) {    
 jQuery(".logo_heading").html('other work');
}

if( jQuery(document).scrollTop() > jQuery('.contact_form').position().top) {    
 jQuery(".logo_heading").html('Contact');
}
//	jQuery('.logo_inner').slideToggle('slow', function() {});
// $('.logo_inner').slideToggle('slow', function() {});	

});
});

</script>


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
<li><a href="#blog">Blog</a></li>
<li><a href="#">About</a></li>
<li><a href="#contact">Contact</a></li>
<li><a href="#other-work">Other work</a></li>
<li><a href="#amigo_s">Amigos</a></li>
</ul>
</nav>

<!--iphone nav-->

<div id="main_content">
 
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="images_page"></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of IMAGES PAN -->
<section class="images_pan thumb" id="thumb_1">
<?php echo do_shortcode('[nggallery id=1]');?>
<?php echo do_shortcode('[nggallery id=5]');?>
<?php echo do_shortcode('[nggallery id=6]');?>

</section>

<!-- EOF of IMAGES PAN -->
<div class="clear"></div>

<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="faqs"></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of FAQ PAN -->
<section class="faq_pan" id="#faqs">

    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
    
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
<!--   <div class="six column faq_pan_right">
       <ul>
          <li><a href="#">asdasdasdasdasdasdk;sanlkfjs;a</a></li>
          <li><a href="#">as;kdfjlksajdflksaldfslakjdfkls</a></li>
          <li><a href="#">asdjfljsd;fjslkdjfksjflsjdfljsa</a></li>
          <li><a href="#">sajfd;sjadf;kjs;akfj;ksjdf;kjsdf</a></li>
          <li><a href="#">psadjf;sjd;foks;dlfk;lsdkf;lskdf;l</a></li>
          <li><a href="#">psajdfosidofispodifposidfpoisad</a></li>
       </ul>
   </div>-->
</section>
<!-- EOF of FAQ PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="she_and_him"></article>
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
	height:80%;
	width:70%;  
	background:#FFFFFF;  
	left: 241px;
	top: 48px;
	z-index:99999; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
	margin-left: 15px;  
	padding:24px;
	/* additional features, can be omitted */		
	padding:26px;  
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
	response=response.substring(0,response.length - 1);
jQuery('.about_pan').html(response);
jQuery('#inline_content').html(response);
});
});
</script>
<div id="popup_box">	<!-- OUR PopupBox DIV-->
	<div id="desc"></div>
	<a id="popupBoxClose">Close</a>	
</div>

<!--<section class="about_pan">
   <div class="six column about_pan_left">
     <img src="<?php bloginfo('template_url'); ?>/images/img6.jpg" width="480" height="358">
   </div>
   <div class="six column about_pan_right">
       <a href="#" class="tooltip1"><p>about Owen</p>
        <span>zmxc,bvl,xcmb.m,dxfcbv</span>
      </a>
   </div>
      
</section>

<section class="about_pan">
   <div class="six column about_pan_right bg_color">
     <a href="#" class="tooltip1"><p>about Charis</p>
        <span>zmxc,bvl,xcmb.m,dxfcbv</span>
      </a>
   </div>
   <div class="six column about_pan_left">
      <img src="<?php bloginfo('template_url'); ?>/images/img7.jpg" width="480" height="358"> 
   </div>
      
</section>-->
<section class="about_pan" id="about">  
      
</section>

<!-- EOF OF ABOUT PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="blog"></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of PRESS&BLOG PAN -->
<section class="prs_blg"> 


<div class="responsive-slider flexslider"><ul class="slides">
	<?php
$args = array('post_type' => 'blog_manage');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
$img = wp_get_attachment_image_src( $data['blog_image'][0],'blog-image');
?>    
  <li><div class="slide"><a href="<?php echo $data['blog_description'][0];?>" target="_blank"><img src="<?php echo $img[0];?>" class="slide-thumbnail wp-post-image" alt="img1" /></a></li>
  <?php endwhile;?>
  </ul></div>
</section>
<!-- EOF of PRESS&BLOG PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="how-we-work"></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of HOW WE WORK PAN -->
<section class="how_we_work">

    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
    
</section>
<!-- EOF of HOW WE WORK PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="price"></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of PRICE PAN -->
<section class="price_pan" id="price1">

    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
    
</section>
<!-- EOF of price PAN -->

<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="amigo_s"></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of Amigos PAN -->
<section class="amigos">

    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
    
</section>
<!-- EOF of Amigos PAN -->

<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="other-work"></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of Other Work PAN -->
<section class="other_work1" id="other-work1" style="display:none;">
    
    <div class="column other_work_inner">
    <h4>Portrait</h4>
    
    <div class="portrait thumb" id="thumb_2"><?php echo do_shortcode('[nggallery id=3]');?></div>
	<?php
     $port = get_post(125);
	 echo $port->post_content;
	?>
   </div>
    <div class="column other_work_inner">
     <h4>Corporate</h4>
     <div class="corporate thumb" id="thumb_3"><?php echo do_shortcode('[nggallery id=4]');?></div>
    </div>
	<div class="clear"></div>
    <!--<div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left">more info</a></div>
    <div class="right_arrow"><a href="#">more info<img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
</section>
<section class="other_work" id="other-work">
    
    <div class="six column other_work_inner">
    <h4>Portrait</h4>
    
    <div class="portrait thumb" id="thumb_5"><?php echo do_shortcode('[nggallery id=1]');?></div>
<!--    <ul>
    <li><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt=""></li>
    </ul>-->
    </div>
    <div class="six column other_work_inner">
     <h4>Corporate</h4>
     <div class="corporate thumb" id="thumb_4"><?php echo do_shortcode('[nggallery id=5]');?></div>
<!--    <ul>
    <li><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt=""></li>
    </ul>-->
    </div>
    <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left">more info</a></div>
    <div class="right_arrow"><a href="#">more info<img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
</section>
<!-- EOF of Other Work PAN -->
<article class="nav_border" id="contact">
<!--    <div class="logo_inner">Contact</div>-->
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of contact us form -->
<section class="contact_form" id="contact">    
    <?php //echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]');?>
	<p>We would love to hear from you whether it is for an enquiry, a booking, a thank you or just a hello. Get in touch.</p>
	<p>email <a href="mailto:<?php echo get_option_tree( 'footer_email' );?>"><?php echo get_option_tree( 'footer_email' );?></a></p>
    <p>Phone <span>+44-<?php echo get_option_tree( 'footer_phone' );?></span></p>
	<p>Twitter <a href="<?php echo get_option_tree( 'owen_tweet' );?>">@owenwarrell</a>&nbsp;&nbsp;<a href="<?php echo get_option_tree( 'charis_tweet' );?>">@CharisWarrell</a>
</section>
</div>


<!-- EOF OF WRAPPER -->

<script type="text/javascript">
$(document).ready(function(){
  $('.topnav').onePageNav({
    currentClass: 'current',
	  scrollOffset: 0
  });
});

function showdiv(id)
{
	var t=setTimeout(function(){
							  
							   $('.logo_inner').slideToggle('slow', function() {
// Animation complete.
setTimeout(function(){
					
					
					if(id == 0)
	{
		$(".logo_heading").html('<img src="images/logo.png" class="img_home" alt="" />');
		 $('.logo_inner').slideToggle('slow', function() {});	
		
	}
							  
							  if(id == 1)
	{
		$(".logo_heading").html('images');
		 $('.logo_inner').slideToggle('slow', function() {});	
		
	}
	if(id == 2)
	{
		$(".logo_heading").html('Faqs');
		 $('.logo_inner').slideToggle('slow', function() {});	
	}
	if(id == 3)
	{
		$(".logo_heading").html('Price');
		 $('.logo_inner').slideToggle('slow', function() {});	
	}
	if(id == 4)
	{
		$(".logo_heading").html('blog');
		 $('.logo_inner').slideToggle('slow', function() {});	
	}
	if(id == 5)
	{
		$(".logo_heading").html('Amigos');
		 $('.logo_inner').slideToggle('slow', function() {});	
	}
	if(id == 6)
	{
		$(".logo_heading").html('Contact');
		 $('.logo_inner').slideToggle('slow', function() {});	
	}
        if(id == 7)
	{
		$(".logo_heading").html('About');
		 $('.logo_inner').slideToggle('slow', function() {});	
	}
         if(id == 8)
	{
		$(".logo_heading").html('OtherWork');
		 $('.logo_inner').slideToggle('slow', function() {});	
	}
						  
							  
							  },100);
});
							  
							  
							  
							  },100);
	
	
	
	
	
}

function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}

</script>

<?php get_footer(); ?>
