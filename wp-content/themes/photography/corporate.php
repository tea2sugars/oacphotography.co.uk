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
</style>
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

<div id="main_content">
 


<!-- SOF of FAQ PAN -->
<section class="faq_pan" id="faqs">

   
<div class="faqimage"><img src="<?php bloginfo('template_url'); ?>/images/corporate-left-image.jpg"/></div>
<div class="faqtext">
 <div class="responsive-slider flexslider"><ul class="slides">
  

         <?php
$args = array('post_type' => 'corporate_gallery');
$loop = new WP_Query( $args );
$i= 12;
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>

<li><div class="slide thumb" id="thumb_<?php echo $i;?>"><?php echo do_shortcode($data['gallery_id'][0]);?></div></li>

<?php $i++;endwhile;     ?>
       </ul>
  
</div>
</div>

</section>
<!-- EOF of FAQ PAN -->


<div class="clear"></div>

<!-- SOF of PRICE PAN -->
<section class="price_pan" id="price1">

    <!--<div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
   
<div class="pricetext">
    <div class="responsive-slider flexslider"><ul class="slides">
  

         <?php
$args = array('post_type' => 'corporate_content');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>

<li><div class="slide corpo"><a href="#"><h1><?php $title=the_title();?></h1><p><?php echo $data['text'][0];?></p></a></div></li>

<?php endwhile;     ?>
       </ul>
  
</div>
</div>
<div class="priceimage"><img src="<?php bloginfo('template_url'); ?>/images/corporate-right-image.jpg"/></div> 

</section>
<!-- EOF of price PAN -->
<div class="clear"></div>


<?php get_footer('inner'); ?>
