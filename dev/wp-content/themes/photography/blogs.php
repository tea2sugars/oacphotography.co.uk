<?php 
/**
 * Template Name: Blogs Template
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

get_header('blogs'); ?>

<div id="main_content">

<!-- SOF of FAQ PAN -->
<section class="blogs_manage thumb" id="thumb_14">
 <?php $args = array(
    'numberposts' => 1,
    'offset' => 0,
    'category' => 7,
    'orderby' => 'post_date',
    'order' => 'DESC',   
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args);
	
	foreach( $recent_posts as $recent ){
		
		 $auth_name = get_userdata($recent['post_author'])->display_name;


		
		?>
	<div class="blog_content">
	<h3><?php echo $recent['post_title'];?></h3>	
	<p class="author_date"><span><?php echo 'Posted on'.date('M d,Y',strtotime($recent['post_date'])).' by '.$auth_name;?></span></p>
	<div><?php echo $recent['post_content'];?></div>	
	</div>
<?php	}
?>
</section>
<section class="blog_right">
<?php dynamic_sidebar( 'sidebar-2' ); ?>
<div class="back_home"><span><img src="<?php bloginfo("template_url"); ?>/images/17.gif"></span><a href="<?php echo get_bloginfo('url');?>">Back to Home</a></div>
</section>
<!-- EOF of FAQ PAN -->


<div class="clear"></div>
</div>

<?php get_footer('inner'); ?>

<style>
html, body, div, span, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a,img,dl, dt, dd, ol, ul, li,label, legend, table, caption, tbody, tfoot, thead, tr, th, td{
  font-family: Helvetica;
}
h3{
font-size:17px;
}
a{
font-size:12px;
}
</style>
