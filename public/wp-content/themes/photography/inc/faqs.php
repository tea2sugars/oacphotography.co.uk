<article class="nav_border" id="faqs"><div class="celltitle"><h1>FAQs</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of FAQ PAN -->
<section class="faq_pan faq_new" id="faqs">

   <!-- <div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
    
<div class="faqimage"><img src="<?php bloginfo('template_url'); ?>/images/semi/faq.png"/></div>
<div class="faqtext">

<div class="ocarousel example_info" data-ocarousel-period="6000">
<?php
$args = array('post_type' => 'custom_faqs');
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
<div style="width: 680px;">
<div class="slide"><h1><?php the_title();?></h1><?php the_content();?></div>
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
