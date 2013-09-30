<?php 
/**
 * Template Name: Corporate Template
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

get_header('corporate'); ?>


<style>
.caption.none > p {
    display: none !important;
}
.ngg-navigation{
display:none !important;
}
</style>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/chocolat.css">
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.chocolat.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.openCarousel.js"></script>
 <script type="text/javascript" charset="utf-8">
				jQuery(function() {	
					jQuery('.thumb').each(function(){					
					 id = jQuery(this).attr('id');
                     jQuery('#'+id).find('a').Chocolat({overlayColor:'#000',leftImg:'<?php bloginfo("template_url"); ?>/images/cor-left-arrow.jpg',rightImg:'<?php bloginfo("template_url"); ?>/images/cor-right-arrow.jpg',closeImg:'<?php bloginfo("template_url"); ?>/images/cor-close-icon.png',loadingImg:'<?php bloginfo("template_url"); ?>/images/loadingw.gif'});
					});
				});
</script>

		<!-- SOF of BANNER 
 
<section class="banner" id="home">

        <?php //echo do_shortcode( '[responsive_slider]' ); ?>

</section>-->

<section class="prs_blg inprs_blg" id="prs_blg"> 
<div class="responsive-slider flexslider"><ul class="slides">
	<?php
$args = array('post_type' => 'corporate_slider');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
$img = wp_get_attachment_image_src( $data['slider_image'][0],'full');
?>    
  <li><div class="slide"><a href="<?php //echo $data['blog_description'][0];?>" target="_blank"><img src="<?php echo $img[0];?>" class="slide-thumbnail wp-post-image" alt="img1" /></a></div></li>
  <?php endwhile;?>
  </ul></div>
     
</section>

<section class="banner_iphone">
    <div class="in-corporate">Corporate</div>
    <div class="logo_iphone in-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="O&amp;C Photography"></div>
    <div class="ip_left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="ip_right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
     <?php //echo do_shortcode( '[responsive_slider]' ); ?>
     <div class="responsive-slider flexslider"><ul class="slides">
	<?php
$args = array('post_type' => 'corporate_slider');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
$img = wp_get_attachment_image_src( $data['slider_image'][0],'full');
?>    
  <li><div class="slide"><a href="<?php //echo $data['blog_description'][0];?>" target="_blank"><img src="<?php echo $img[0];?>" class="slide-thumbnail wp-post-image" alt="img1" /></a></div></li>
  <?php endwhile;?>
  </ul></div>
     
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

<div id="main_content" class="corp-page"> 

<article id="images_page" class="nav_border"><div class="celltitle"><h1>Corporate Photography</h1></div></article>
<!-- SOF of FAQ PAN -->
<section class="faq_pan" id="faqs">

   <!-- <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
    
<div class="faqimage"><img src="<?php bloginfo('template_url'); ?>/images/corporate-left-image.jpg"/></div>
<div class="faqtext price-corp image_corp">

<div class="ocarousel example_info" data-ocarousel-period="6000">
<?php
$args = array('post_type' => 'corporate_gallery');
$loop = new WP_Query( $args );
if(count($loop->posts) > 1){
?>
<a href="#" data-ocarousel-link="left" class="slidesjs-previous" ></a>
<?php }?>
<div class="ocarousel_window">  
         <?php

$i= 12;
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>
<div style="width: 628px;">
<div class="slide thumb" id="thumb_<?php echo $i;?>"><?php echo do_shortcode($data['gallery_id'][0]);?></div>
</div>
<?php $i++;endwhile; ?>
</div> 			    
<?php  if(count($loop->posts) > 1){ ?>
			    <a href="#" data-ocarousel-link="right" class="slidesjs-next"></a>
<?php }?>
			    <!--<div class="ocarousel_indicators"></div>-->
   </div>
</div>


</section>

<div class="clear"></div>

<article id="about" class="nav_border"><div class="celltitle"><h1>About</h1></div></article>
<section class="faq_pan corp-faq" id="faqs">

   <!-- <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->   

<div class="faqtext">

<div class="ocarousel example_info" data-ocarousel-period="6000">
<?php
$args = array('post_type' => 'corporate_content');
$loop = new WP_Query( $args ); 
if(count($loop->posts) > 1){
?>
<a href="#" data-ocarousel-link="left" class="slidesjs-previous" ></a>
<?php }?>
<div class="ocarousel_window">  
         <?php

while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta( $post->ID);
?>
<div style="width: 680px;">
<div class="slide"><p><?php the_content();?></p></div>
</div>
<?php endwhile;     ?>
</div> 			    
<?php  if(count($loop->posts) > 1){ ?>
			    <a href="#" data-ocarousel-link="right" class="slidesjs-next"></a>
<?php }?>
			    <!--<div class="ocarousel_indicators"></div>-->
   </div>
</div>
<div class="priceimage"><img src="<?php bloginfo('template_url'); ?>/images/corporate-right-image.jpg"/></div> 

</section>
<div class="clear"></div>

<article id="price1" class="nav_border"><div class="celltitle"><h1>Price</h1></div></article>
<section class="faq_pan" id="faqs">

   <!-- <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
    
<div class="faqimage"><img src="<?php bloginfo('template_url'); ?>/images/portncorp/price.png"/></div>
<div class="faqtext price-corp">

<div class="ocarousel example_info" data-ocarousel-period="6000">
<?php
$args = array('post_type' => 'price');
$loop = new WP_Query( $args ); 
if(count($loop->posts) > 1){
?>
<a href="#" data-ocarousel-link="left" class="slidesjs-previous" ></a>
<?php }?>
<div class="ocarousel_window">  
         <?php

while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>
<div style="width: 628px;">
<div class="slide"><p><?php the_content();?></p></div>
</div>
<?php endwhile;     ?>
</div> 			    
<?php  if(count($loop->posts) > 1){ ?>
			    <a href="#" data-ocarousel-link="right" class="slidesjs-next"></a>
<?php }?>
			    <!--<div class="ocarousel_indicators"></div>-->
   </div>
</div>


</section>

<div class="clear"></div>
<article id="price2" class="nav_border"><div class="celltitle"><h1>Testimonials</h1></div></article>
<section class="faq_pan corp-faq" id="faqs">

   <!-- <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->   

<div class="faqtext">

<div class="ocarousel example_info" data-ocarousel-period="6000">
<?php
$args = array('post_type' => 'testimonial',
'tax_query' => array(
    array(
      'taxonomy' => 'testmonial_categories',
      'field' => 'id',
      'terms' => 8 // Where term_id of Term 1 is "1".
    ))
);
$loop = new WP_Query( $args ); 
if(count($loop->posts) > 1){
?>
<a href="#" data-ocarousel-link="left" class="slidesjs-previous" ></a>
<?php }?>
<div class="ocarousel_window">  
         <?php
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta( $post->ID, 'testimonial', true );
?>
<div style="width: 680px;">
<div class="slide"><?php the_content();?><span class="client_name">---<i><?php echo $data['person-name'];?></i></span></div>
</div>
<?php endwhile;     ?>
</div> 			    
<?php  if(count($loop->posts) > 1){ ?>
			    <a href="#" data-ocarousel-link="right" class="slidesjs-next"></a>
<?php }?>
			    <!--<div class="ocarousel_indicators"></div>-->
   </div>
</div>
<div class="priceimage"><img src="<?php bloginfo('template_url'); ?>/images/portncorp/corp-test.png"/></div> 

</section>
<div class="clear"></div>
<!-- SOF of PRICE PAN -->

<article id="clients" class="nav_border"><div class="celltitle"><h1>Clients</h1></div></article>
<section class="faq_pan" id="faqs">

   <!-- <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
    
<div class="faqimage"><img src="<?php bloginfo('template_url'); ?>/images/portncorp/clients.png"/></div>
<div class="faqtext price-corp">

<div class="ocarousel example_info" data-ocarousel-period="6000">
<?php
$args = array('post_type' => 'portrait_clients');
$loop = new WP_Query( $args ); 
if(count($loop->posts) > 1){
?>
<a href="#" data-ocarousel-link="left" class="slidesjs-previous" ></a>
<?php }?>
<div class="ocarousel_window">  
         <?php
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>
<div style="width: 628px;">
<div class="slide"><?php the_content();?></div>
</div>
<?php endwhile;     ?>
</div> 			    
<?php  if(count($loop->posts) > 1){ ?>
			    <a href="#" data-ocarousel-link="right" class="slidesjs-next"></a>
<?php }?>
			    <!--<div class="ocarousel_indicators"></div>-->
   </div>
</div>


</section>
<!-- EOF of price PAN -->
<div class="clear"></div>
<article id="other-work" class="nav_border"><div class="celltitle"><h1>Other Work</h1></div></article> 
<section class="other_work">
    
    <div class="six column other_work_inner">
    <h4>Weddings</h4>
    
    <div class="portrait thumb" id="thumb_5"><?php echo do_shortcode('[nggallery id=11 images=0]');?></div>

    </div>
    <div class="six column other_work_inner">
     <h4>Corporate</h4>
     <div class="corporate thumb" id="thumb_4"><?php echo do_shortcode('[nggallery id=8 images=0]');?></div>

    </div>
   
</section>

<div class="clear"></div>
<div style="position: fixed; bottom: 10px; right: 10px; color: #000; font-size: 28px;" id= "toTop"> <a href="#" style="font-family:'blanchcaps_inline';">Back to Top</a></div>
</div>
<?php get_footer('inner'); ?>

<!--<section class="faq_pan" id="faqs">-->
<script src="<?php bloginfo("template_url"); ?>/js/jquery.slides.min.js"></script>
 <script> 
    jQuery(function() {
      jQuery('#slides2').slidesjs({
        width: 940,
        height: 528,
        navigation: true
      });
	  jQuery('#slides3').slidesjs({
        width: 940,
        height: 528,
        navigation: true
      });
});
 </script>
 <style>
 .faqtext{
width:100%;
 }
 </style>

