
<div id="imagecell">
<article class="nav_border" id="images_page"><div class="celltitle"><h1>RECENT BLOG POSTS AND FEATURE GALLERIES</h1></div></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF of IMAGES PAN -->
<section class="images_pan" style="overflow: hidden;float:left;">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/hover/css/caption.css"/>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/hover/js/jcaption.min.js" /></script>
<script type="text/javascript">
(function($){
$(document).ready(function(){
	
	$('.thumbimage img').jcaption({
		copyStyle: true,
		animate: true,
		show: {height: "hide"},
		hide: {height: "show"}
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
$args = array(
    'numberposts' => 6,
    'offset' => 0,
    'category' => 7,
    'orderby' => 'post_date',
    'order' => 'DESC',   
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args);
	foreach( $recent_posts as $recent ){	 

		 $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $recent['post_content'], $matches);
  $first_img = $matches [1] [0]; 
		
		?>
	<li><a href="<?php echo get_permalink($recent["ID"]);?>" target="_blank"><img  src="<?php echo $first_img;?>" class="slide-thumbnail wp-post-image latest_blog_img" alt="From the blog: <?php echo $recent['post_title'];?>" width="240" height="161" title="<?php //the_title();?>" /></a></li>
<?php	}
?>
<?php 
/*$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
$data = get_post_meta($post->ID);
$img2 =wp_get_attachment_image_src( $data['blog_image_thumbnail'][0],'blog_image_thumbnail');
$img = wp_get_attachment_image_src( $data['blog_image_thumbnail'][0],'thumbnail');
?>    

  <li><a href="<?php echo $data['blog_description'][0];?>" target="_blank"><img  src="<?php echo $img[0];?>" class="slide-thumbnail wp-post-image" alt="<?php the_title();?>" width="240" height="161" title="<?php //the_title();?>" /></a></li>
  <?php endwhile;*/?>
  </ul></div>
  <div class="clear"></div>
  <div class="bottom-slide">
<div class="thumb" id="thumb_9">
<?php echo do_shortcode('[nggallery id=1 images=0 w=240 h=161]');?>
</div>
<div class="thumb" id="thumb_6">
<?php echo do_shortcode('[nggallery id=6 images=0]');?>
</div>
<div class="thumb" id="thumb_7">
<?php echo do_shortcode('[nggallery id=5 images=0]');?>
</div></div>
<div class="clear"></div>

<div class="imagetitle"><h1>WE <span class="laugh">LAUGH</span>.WE <span class="laugh">SMILE</span>.WE <span class="laugh">LIVE</span>.WE<span class="laugh1"> LOVE</span></h1></div>

<div class="clear"></div>
<!--<a href="#imagecell" class="other-work-top">Back to Top</a>-->

</section>

</div>
<div class="clear"></div>

