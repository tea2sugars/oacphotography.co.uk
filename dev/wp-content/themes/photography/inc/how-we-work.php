<article class="nav_border" id="how-we-work"><div class="celltitle"><h1>HOW WE WORK</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of HOW WE WORK PAN -->
<section class="how_we_work" id="how_we">
	
    <!--<div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>

<div class="six column faq_pan_right" style="width:35%;margin-top:135px;margin-left:20px;"><img src="<?php bloginfo('template_url'); ?>/images/prewedding-two.png"/></div>
-->
 <div class="howwe_image"><img src="<?php bloginfo('template_url'); ?>/images/semi/howwework.png"/></div>
<div class="howwe_text">

    <div class="ocarousel example_info" data-ocarousel-period="6000">
<a href="#" data-ocarousel-link="left" class="slidesjs-previous" ></a>
<div class="ocarousel_window">  
         <?php
$args = array('post_type' => 'how_we_work');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
?>
<div style="width: 680px;">
<div class="slide"><h1><?php $title=the_title();?></h1><p><?php echo $data['description'][0];?></p></div>
</div>
<?php endwhile;     ?>
  </div>
   <a href="#" data-ocarousel-link="right" class="slidesjs-next"></a>
			    <!--<div class="ocarousel_indicators"></div>
  </div>  
</div>

<!--<a href="#how-we-work" class="other-work-top">Back to Top</a>-->
</section>
<!-- EOF of HOW WE WORK PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->

<!-- EOF of NAV BORDER PAN -->
