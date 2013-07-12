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
<div id="imagecell">
<article class="nav_border" id="images_page"><div class="celltitle"><h1>IMAGES</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of IMAGES PAN -->
<section class="images_pan">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/hover/css/caption.css"/>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/hover/js/jcaption.min.js" /></script>
<script type="text/javascript">
(function($){
$(document).ready(function(){
	
	$('.thumbimage img').jcaption({
		copyStyle: true,
		animate: true,
		show: {height: "show"},
		hide: {height: "hide"}
	});
	$('.bottom-slide img').jcaption({
		copyStyle: true,
		animate: true,
		show: {height: "show"},
		hide: {height: "hide"}
	});

});

})(jQuery)

</script>


<div class="thumbimage thumb" >
<ul>

<?php
$args = array('post_type' => 'blog_manage','order'     => 'ASC','posts_per_page'=>'6');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
$img2 =wp_get_attachment_image_src( $data['blog_image_thumbnail'][0],'blog_image_thumbnail');
$img = wp_get_attachment_image_src( $data['blog_image_thumbnail'][0],'thumbnail');
?>    

  <li><a href="<?php echo $data['blog_description'][0];?>" target="_blank"><img  src="<?php echo $img[0];?>" class="slide-thumbnail wp-post-image" alt="<?php the_title();?>" width="240" height="161" title="<?php //the_title();?>" /></a></li>
  <?php endwhile;?>
  </ul></div>
  <div class="clear"></div>
  <div class="bottom-slide">
<div class="thumb" id="thumb_9">
<?php echo do_shortcode('[nggallery id=1]');?>
</div>
<div class="thumb" id="thumb_6">
<?php echo do_shortcode('[nggallery id=6]');?>
</div>
<div class="thumb" id="thumb_7">
<?php echo do_shortcode('[nggallery id=5]');?>
</div></div>
<div class="clear"></div>
<div class="imagetitle"><h1>WE <span class="laugh">LAUGH</span>.WE <span class="laugh">SMILE</span>.WE <span class="laugh">LIVE</span>.WE<span class="laugh1"> LOVE</span></h1></div>

<div class="clear"></div>
<!--<a href="#imagecell" class="other-work-top">Back to Top</a>-->

</section>

</div>
<!-- EOF of IMAGES PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->

<article class="nav_border" id="faqs"><div class="celltitle"><h1>FAQ's</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of FAQ PAN -->
<section class="faq_pan" id="faqs">

   <!-- <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
    
<div class="faqimage"><img src="<?php bloginfo('template_url'); ?>/images/prewedding.png"/></div>
<div class="faqtext">

    <div class="responsive-slider flexslider"><ul class="slides">
  
         <?php
$args = array('post_type' => 'custom_faqs');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>

<li><div class="slide"><h1><?php the_title();?></h1><p><?php echo $data['answer'][0];?></p></div></li> 
<?php endwhile;     ?>
       </ul>
   </div>
</div>


</section>
<!-- EOF of FAQ PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="she_and_him" style="height:0px;"></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF OF ABOUT PAN -->
<?php 
?>
<section class="about_pan" id="about">
<div id='mySwipe' style='max-width:100%;margin:0 auto' class='swipe'>
  <div class='swipe-wrap'>
    <div><b>
	<?php 
	$page_data = get_page('66');
	$meta = get_post_meta('66');
    $image1 = wp_get_attachment_url($meta['photo_upload'][0], 'full');
	?>	
	<div style="width:30%"><img src="<?php echo $image1; ?>" alt="<?php the_title();?>"/></div>	
	<div style="width:70%;" class="owen_swipe" onclick='mySwipe.next()'><h1><?php echo $page_data->post_title;?></h1><?php echo $page_data->post_content;?> </div>
	<span style="float:right;"><a href="javascript::void(0);" onclick="mySwipe.next()">Next</a></span>
	</b></div>
    <div><b>
	
	<section id="about">

     <div style="width:40%;" class="six column about_pan_left">
                    <div class="owen"><a title="66" class="toolti3" href="javascript::void(0);" onclick='mySwipe.prev()'><img alt="" src="<?php echo $image1;?>"></a></div>
	<h1></h1>    
    </div>
		<div style="float:left;width:19%;margin-top:65px;" class="celltitle abt-title"><h1 style="padding:0px;margin:0px;">ABOUT<br><hr style="margin:0px;padding:0px;background:#7c7c7c;height:3px;">US</h1>
		<div style="margin-left:40px" class="social">
		<a href="#" class="face"></a>
		<a href="#" class="print"></a>
		<a href="#" class="twit"></a>
		</div>
   </div> 
   <?php 
	$page_data = get_page('63');
	$meta = get_post_meta('63');
    $image2 = wp_get_attachment_url($meta['photo_upload'][0], 'full');
	?>
   <div style="width:40%;" class="six column about_pan_left">
       <div class="owen1" style="float:right;"><a title="63" class="toolti3" href="javascript::void(0);" onclick='mySwipe.next()'><img alt="" src="<?php echo $image2;?>"></a></div>
       <h1></h1>      
   </div>
</section>	
	</b></div>
    <div><b>	
	<div style="width:70%" onclick='mySwipe.prev()' class="charis_swipe"><h1><?php echo $page_data->post_title;?></h1><?php echo $page_data->post_content;?>
	</div>	
	<div style="width:30%"><img src="<?php echo $image2; ?>" alt="<?php the_title();?>"/></div>	
	</b><div class="clear"></div>
	<span style="float:left;"><a style="font-size: 18px;font-weight: bold;" href="javascript::void(0);" onclick="mySwipe.prev()">Previous</a></span></div>
  </div>
</div>   
</section>
<!-- EOF OF ABOUT PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<div id="blog_article">
<article class="nav_border" id="blog"><div class="celltitle"><h1>BLOG ARTICLES</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of PRESS&BLOG PAN -->
<section class="prs_blg" id="prs_blg"> 


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
<!--     <a href="#blog_article" class="other-work-top blg-top">Back to Top</a>-->
</section>
</div>
<!-- EOF of PRESS&BLOG PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="how-we-work"><div class="celltitle"><h1>HOW WE WORK</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of HOW WE WORK PAN -->
<section class="how_we_work" id="how_we">
	
    <!--<div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>

<div class="six column faq_pan_right" style="width:35%;margin-top:135px;margin-left:20px;"><img src="<?php bloginfo('template_url'); ?>/images/prewedding-two.png"/></div>
-->
 <div class="howwe_image"><img src="<?php bloginfo('template_url'); ?>/images/prewedding-two.png"/></div>
<div class="howwe_text">

    <div class="responsive-slider flexslider"><ul class="slides">
  

         <?php
$args = array('post_type' => 'how_we_work');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>

<li><div class="slide"><h1><?php $title=the_title();?></h1><p><?php echo $data['description'][0];?></p></div></li>

<?php endwhile;     ?>
       </ul>
  
</div>
</div>
<!--<a href="#how-we-work" class="other-work-top">Back to Top</a>-->
</section>
<!-- EOF of HOW WE WORK PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->

<!-- EOF of NAV BORDER PAN -->

<!-- SOF of PRICE PAN -->
<section class="price_pan" id="price1">
<article class="nav_border" id="price"><div class="celltitle"><h1>PRICE</h1></div></article>
    <!--<div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
   
<div class="pricetext">
    <div class="responsive-slider flexslider"><ul class="slides">
  

         <?php
$args = array('post_type' => 'price');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>

<li><div class="slide"><h1><?php $title=the_title();?></h1><p><?php echo $data['description'][0];?></p></div></li>

<?php endwhile;     ?>
       </ul>
  
</div>
</div>
<div class="priceimage"><img src="<?php bloginfo('template_url'); ?>/images/prewedding-one.png"/></div> 
<!--<a href="#price" class="other-work-top">Back to Top</a>-->
</section>
<!-- EOF of price PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<article class="nav_border" id="amigo_s"><div class="celltitle"><h1>AMIGOS</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of Amigos PAN -->
<section class="amigos" id="amigo">

    <!--<div class="left_arrow"><a href="#"><img src="<?php //bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php //bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
    
   <div class="amigostext">
       <div class="responsive-slider flexslider"><ul class="slides">
         <?php
$args = array('post_type' => 'amigos');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>
<li><div class="slide"><h1><?php the_title();?></h1>
<p><?php echo $data['description'][0];?></p></div>
</li> 
<?php endwhile;     ?>
       </ul>
   </div>
</div>
<!--<a href="#amigo_s" class="other-work-top">Back to Top</a>-->
</section>

<!-- EOF of Amigos PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<div id="otherwork">
<article class="nav_border" id="other-work"><div class="celltitle"><h1>OTHER WORK</h1></div></article>
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
     <div class="corporate thumb" id="thumb_3"><?php //echo do_shortcode('[nggallery id=4]');?></div>
    </div>
	<div class="clear"></div>
    <!--<div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left">more info</a></div>
    <div class="right_arrow"><a href="#">more info<img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
</section>
<section class="other_work" id="other-work">
    
    <div class="six column other_work_inner">
    <h4>Portrait</h4>
    
    <div class="portrait thumb" id="thumb_5"><?php echo do_shortcode('[nggallery id=7]');?></div>
<!--    <ul>
    <li><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt=""></li>
    </ul>-->
    </div>
    <div class="six column other_work_inner">
     <h4>Corporate</h4>
     <div class="corporate thumb" id="thumb_4"><?php echo do_shortcode('[nggallery id=8]');?></div>
<!--    <ul>
    <li><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt=""></li>
    <li><img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt=""></li>
    </ul>-->
    </div>
    <div class="left_arrow"><a href="/?page_id=125"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left">more info</a></div>
    <div class="right_arrow"><a href="/?page_id=184">more info<img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
     <div class="ft-left-arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="ft-right-arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>
<!--<a href="#otherwork" class="other-work-top corporate-wrk">Back to Top</a>-->
</section>

</div>
<div class="clear"></div>
<!-- EOF of Other Work PAN -->
<article class="nav_border" id="contact">
  <div class="celltitle"><h1>Contact</h1></div>
</article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of contact us form -->
<section class="contact_form" id="contact">    
    <?php //echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]');?>
	<p>We would love to hear from you whether it is for an enquiry, a booking, a thank you or just a hello. Get in touch.</p>
	<p>email <a href="mailto:<?php echo get_option_tree( 'footer_email' );?>"><?php echo get_option_tree( 'footer_email' );?></a></p>
    <p>Phone <span>+44-<?php echo get_option_tree( 'footer_phone' );?></span></p>
	<p>Twitter <a href="<?php echo get_option_tree( 'owen_tweet' );?>">@owenwarrell</a>&nbsp;&nbsp;<a href="<?php echo get_option_tree( 'charis_tweet' );?>">@CharisWarrell</a>
<div style="position: fixed; bottom: 10px; right: 10px; color: #000; font-size: 28px;" id= "toTop"> <a href="#" >Back to Top</a></div>
</section>
</div>


<!-- EOF OF WRAPPER -->

<script src='<?php bloginfo('template_url'); ?>/js/swipe.js'></script>
<script>
// pure JS
var elem = document.getElementById('mySwipe');
window.mySwipe = Swipe(elem, {
   startSlide: 1,
  // auto: 3000,
   continuous: false,
  // disableScroll: true,
  // stopPropagation: true,
  // callback: function(index, element) {},
  // transitionEnd: function(index, element) {}
});

// with jQuery
// window.mySwipe = $('#mySwipe').Swipe().data('Swipe');

</script>
<script type="text/javascript">
$(document).ready(function(){
  $('.topnav').onePageNav({
    currentClass: 'current',
	  scrollOffset: 0
  });
});

</script>

<?php get_footer('inner'); ?>
