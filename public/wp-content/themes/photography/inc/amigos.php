<article class="nav_border" id="amigo_s"><div class="celltitle"><h1>AMIGOS</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of Amigos PAN -->
<section class="amigos" id="amigo">

    <!--<div class="left_arrow"><a href="#"><img src="<?php //bloginfo('template_url'); ?>/images/left_arrow.png" alt="left"></a></div>
    <div class="right_arrow"><a href="#"><img src="<?php //bloginfo('template_url'); ?>/images/right_arrow.png" alt="right"></a></div>-->
 <div class="howwe_image"><!--<img src="<?php bloginfo('template_url'); ?>/images/prewedding-two.png"/>--></div>    
   <div class="howwe_text">
<div class="ocarousel example_info" data-ocarousel-period="6000">
<?php
$args = array('post_type' => 'amigos');
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
<div class="slide"><h1><?php the_title();?></h1>
<p class="amogios_desc"><?php the_content();?></p></div>
</div>
<?php endwhile;     ?>
      </div>
   <?php  if(count($loop->posts) > 1){ ?>
			    <a href="#" data-ocarousel-link="right" class="slidesjs-next"></a>
<?php }?>
			    <!--<div class="ocarousel_indicators"></div>-->
  </div>  
</div>
<!--<a href="#amigo_s" class="other-work-top">Back to Top</a>-->
</section>

<!-- EOF of Amigos PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
<script>
jQuery(function(){
jQuery('.amogios_desc').each(function(){
 jQuery(this).find('strong').prepend('<br/>');
});
});
</script>