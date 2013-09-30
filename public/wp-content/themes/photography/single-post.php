<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header('blogs'); ?>

		<div id="main_content">
		<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav>
        <section class="blogs_manage" id="inner_blogs">
				<?php while ( have_posts() ) : the_post();				
				?>

					<!-- #nav-single -->

					<div class="blog_content">
	<h3><?php the_title();?></h3>	
	<p class="author_date"><span><?php echo 'Posted on '.date('F d , Y',strtotime($post->post_date)).' by ';?><?php the_author(); ?></span></p>
	<div class="thumb" id="thumb_new"><?php echo $post->post_content;?></div>	
	</div>
   <?php wp_related_posts()?>
<?php dynamic_sidebar( 'sidebar-4' ); ?>
<?php dynamic_sidebar( 'sidebar-5' ); ?>
<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
			</section>
<section class="blog_right">
<?php dynamic_sidebar( 'sidebar-2' ); ?>
<div class="back_home"><span><img src="<?php bloginfo("template_url"); ?>/images/17.gif"></span><a href="<?php echo get_bloginfo('url');?>">Back to Home</a></div>
</section>
</div>
<div class="clear"></div>

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