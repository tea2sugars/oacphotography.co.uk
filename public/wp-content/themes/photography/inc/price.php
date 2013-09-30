<!-- SOF of PRICE PAN -->
<section class="price_pan" id="price1">
<article class="nav_border" id="price"><div class="celltitle"><h1>PRICE</h1></div></article>
    <!--<div class="left_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
   
<div class="pricetext">
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
<div style="width: 530px;">
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
<div class="priceimage"><img src="<?php bloginfo('template_url'); ?>/images/semi/price.png"/></div> 
<!--<a href="#price" class="other-work-top">Back to Top</a>-->
</section>
<!-- EOF of price PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->