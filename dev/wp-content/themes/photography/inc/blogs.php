<div id="blog_article">
<article class="nav_border" id="blog"><div class="celltitle"><h1>BLOG AND PRESS FEATURES</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of PRESS&BLOG PAN -->
<section class="prs_blg" id="prs_blg">
    <div class="ocarousel example_info" data-ocarousel-period="6000">
<a href="#" data-ocarousel-link="left" class="slidesjs-previous" ></a>
<div class="ocarousel_window"> 
	<?php
$args = array('post_type' => 'blog_manage');
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
$img = wp_get_attachment_image_src( $data['blog_image'][0],'blog-image');
?>    
  <div style="width: 890px;">
<div class="slide"><a href="<?php echo $data['blog_description'][0];?>" target="_blank"><img src="<?php echo $img[0];?>" class="slide-thumbnail wp-post-image" alt="img1" /></a></div></div>
  <?php endwhile;?>
  </div>
   <a href="#" data-ocarousel-link="right" class="slidesjs-next"></a>
			    <!--<div class="ocarousel_indicators"></div>-->
  </div> 

<!--     <a href="#blog_article" class="other-work-top blg-top">Back to Top</a>-->
</section>
</div>
<!-- EOF of PRESS&BLOG PAN -->

<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->
