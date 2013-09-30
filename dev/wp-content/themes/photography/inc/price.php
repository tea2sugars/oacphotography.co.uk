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
<div class="priceimage"><img src="<?php bloginfo('template_url'); ?>/images/semi/price.png"/></div> 
<!--<a href="#price" class="other-work-top">Back to Top</a>-->
</section>
<!-- EOF of price PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->